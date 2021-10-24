<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigCoder</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/e4530581f4.js" crossorigin="anonymous"></script>
</head>
<body class="overflow-x-hidden">
    <nav class="flex items-center  bg-black justify-between px-5 md:px-7 lg:px-48 xl:px-56 py-3">
        <h1 class="flex items-center text-2xl space-x-1 text-white">
            <i class="fas fa-bars"></i>
            <span class="logo text-3xl">BigCoder</span>
        </h1>
        <div class="relative hidden md:block">
            <input type="text" name="search" id="search" 
                class="px-2 placeholder-black outline-none text-black rounded-xl h-6"  
                placeholder="Rechercher"
            />
            <i class="fas fa-search absolute top-1 right-2 text-black"></i>
        </div>
        <div class="text-white flex items-center space-x-3">
            <a href="https://twitter.com/alpho69" target="_blank" class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
                <i class="fab fa-twitter text-black"></i>
            </a>
            <a href="https://www.linkedin.com/in/alpha-amadou-diallo-3944661b9/" target="_blank"
                class="bg-white h-6 w-6 flex items-center justify-center rounded-full"
            >
            <i class="fab fa-linkedin-in text-black"></i>
            </a>
            <a href="https://github.com/alphakahere" target="_blank" 
                class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
                <i class="fab fa-github text-black"></i>
            </a>
        </div>
    </nav>
    <header class="header  h-96 text-white flex flex-col justify-center items-center" id="header">
        <div class="flex items-center mb-5 space-x-1">
            <img src="{{asset('images/me.jpg')}}" alt="Ma-Photo" class="h-20 w-20 rounded-full object-cover">
            <div class="name text-2xl" >
                <p>Alpha Amadou</p>
                <p class="text-center">Diallo</p>
            </div>
        </div>
       <p class="flex items-center text-center">           
           Développeur ReactJs && Laravel, <br>passionné par la programmation et du bussiness
       </p>
    </header>
    <main class="pt-10 px-10 md:px-20 lg:px-56 xl:px-72">
        <article class="lg:flex space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="lg:w-1/2">
                <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
            </div>
            <div class="flex flex-col p-0 lg:w-1/2">
                <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                <p class="lg:text-lg">
                    Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                    Par exemple, on va deployer une simple application  qui affichera le fameux 
                    "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                </p>
                <div class="flex items-center mt-6 lg:mt-9 space-x-1">
                    <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                    <div class="flex flex-col justify-center">
                        <h1 class="name">Alpha Amadou Diallo</h1>
                        <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                    </div>
                </div>
            </div>
        </article>
        <div class=" grid lg:grid-cols-2 gap-4">
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=""> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class=" grid lg:grid-cols-3 gap-4">
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=""> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=""> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="">
                    <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
                </div>
                <div class="flex flex-col p-0">
                    <h5 class=""> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                    <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                    <p class="lg:text-lg">
                        Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                        Par exemple, on va deployer une simple application  qui affichera le fameux 
                        "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                    </p>
                    <div class="flex items-center mt-6 space-x-1">
                        <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                        <div class="flex flex-col justify-center">
                            <h1 class="name">Alpha Amadou Diallo</h1>
                            <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>
</html>