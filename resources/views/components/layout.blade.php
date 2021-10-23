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
<body>
    <nav class="flex items-center  bg-black justify-between px-56 py-3">
        <h1 class="flex items-center text-2xl space-x-1 text-white">
            <i class="fas fa-bars"></i>
            <span class="logo text-3xl">BigCoder</span>
        </h1>
        <div class="relative">
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
       <div class="">           
           <span>Développeur ReactJs && Laravel,</span>
           <span>passionné par la programmation et du bussiness</span>
       </div>
    </header>

</body>
</html>