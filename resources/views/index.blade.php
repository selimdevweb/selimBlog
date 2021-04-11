@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class=" m-auto pt-4 pb-16 sm:m-auto w-4/5block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Veux tu devenir un développeur ?
                </h1>
                <a
                href="/blog"
                class="text-center bg-white text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>


    <div class="sm:grid grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
     <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378_960_720.jpg" width="700" alt="">
     </div>


    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">
            Etre un meilleur membre actif ?
        </h2>
        <p class="py-8 text-gray-500 text-s">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error neque et quam magni numquam quisquam eos quaerat.
        </p>
        <p class="font-extrabold text-gray-500 text-l pb-9">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error neque et quam magni numquam quisquam eos quaerat.
        </p>

        <a href="/blog"
        class="uppercase bg-blue-500 text-gray-100 text-l
        font-extrabold py-3 px-8 rounded-3xl">
          Voir plus
        </a>
    </div>
</div>
<div class="text-center p-15 bg-black w-full text-white">
    <h2 class="text-2xl pb-5 text-l">
        Je suis un expert en ...
    </h2>
    <span class="font-extrabold block text-3xl">
        Ux design
    </span>
    <span class="font-extrabold block text-3xl">
        Manageent de projet
    </span><span class="font-extrabold block text-3xl">
        Stratégie digital
    </span>
    <span class="font-extrabold block text-3xl">
        Développement back end
    </span>
</div>

<div class="text-center py-15">
    <span class=" uppercase text-4xl text-gray-400">
        Blog
    </span>
    <h2 class=" text-4xl font-bold py-5">
        Publications récentes
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. A explicabo esse quam ipsa nulla quas, rerum dolorem cupiditate quo quae corrupti iste accusamus ut, at eveniet assumenda corporis doloremque veritatis.
    </p>
</div>

<div class=" sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa placeat, in sit sunt ad quae deserunt repellendus blanditiis illum? Obcaecati maxime facilis recusandae impedit, tempore hic in quaerat odio nobis!
            </h3>

            <a href=""
            class=" uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            En voir plus
        </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378_960_720.jpg" width="700" alt="">
     </div>
</div>
@endsection
