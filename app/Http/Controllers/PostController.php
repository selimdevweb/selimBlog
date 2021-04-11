<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    public function __construct(){
       $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   /* $posts = Post::all(); */
        return view('blog.index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* valider ce que l'on reçoit  */
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:5048'
        ]);

        /* donnner un id uniuqe à l'image avec le chemin et l'extension */
        $newImageName = uniqid().'-'.$request->title.'.'.$request->image->extension();

        /* déplacer l'image dans le dossier image */
        $request->image->move(public_path('images'), $newImageName);

        /* création d'un slug */

        /* création d'une publication dans la base de donnée   */
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
        ]);

        /* afficage de confirmation */

        return \redirect('/blog')->with('message', 'Votre publication est en ligne ');
    }


    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug)
    {


        $request->validate([
            'title' => 'required',
            'description' => 'required',
            /* 'image' => 'required|mimes:png,jpg,jpeg,webp|max:5048' */
        ]);
        /* $post = Post::where('slug', $slug)->first();
            $image = public_path('images').$post->image_path;

       File::delete($image);

        $newImageName = uniqid().'-'.$request->title.'.'.$request->image->extension();

        $request->image->move(public_path('images'), $newImageName); */

        Post::where('slug',$slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,/*
            'image_path' => $newImageName, */
            'user_id' => auth()->user()->id,
        ]);
        return redirect ('/blog')
        ->with('message', 'Votre publication a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();
        return redirect('/blog')
            ->with('message', 'Votre publication a bien été effacé');
    }
}
