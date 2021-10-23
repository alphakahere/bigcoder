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
<body class=" overflow-x-hidden">
    <nav class="flex items-center  bg-black justify-between px-5 md:px-32 lg:px-48 xl:px-56 py-3">
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
            <a href="#" class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
                <i class="fab fa-twitter text-black"></i>
            </a>
            <a href="#" class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
            <i class="fab fa-linkedin-in text-black"></i>
            </a>
            <a href="#" class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
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
    <main class="pt-10 px-72">
        <div class="flex space-x-6 border p-5">
            <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="h-80 w-2/5 rounded">
            <div class="flex flex-col">
                <h5 class=" "> <a href="#" class="text-blue-500 text-xl font-medium">Laravel</a></h5>
                <h1 class="my-2 text-2xl font-semibold">Comment deployer une application laravel sur Heroku</h1>
                <p class="text-lg">
                    Dans ce tutoriel, je suppose que vous êtes assez familier avec Laravel, parce que je ne vais pas discuter des bases de Laravel . 
                    Par exemple, on va deployer une simple application  qui affichera le fameux 
                    "Hello World" mais vous pouvez le faire directement avec l'application que vous voulez deployer car c'est la même procédure. 
                </p>
                <div class="flex items-center mt-16 space-x-1">
                    <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
                    <div class="flex flex-col justify-center">
                        <h1 class="name">Alpha Amadou Diallo</h1>
                        <p class=" uppercase text-gray-500 font-medium text-sm">23 OCT 2021 - 4min read </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>