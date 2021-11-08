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
    <nav class="flex items-center fixed w-full bg-black justify-between px-5 md:px-7 lg:px-48 xl:px-56 py-3 z-50">
        <h1 class="flex items-center text-2xl space-x-1 text-white">
            <a href="/">
                <i class="fas fa-bars"></i>
                <span class="logo text-3xl">BigCoder</span>
            </a>
        </h1>
        @if (Route::is('home'))
            {{$searchBar}}            
        @endif
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
        {{$categoryfilter}}        
        <div class="md:hidden flex space-x-4 items-center justify-center mt-3 z-0">
        <div class="relative">
            <form class="" method="GET" action="#" class="">
                <input type="text" name="search" id="search" 
                    class="px-3 py-1 placeholder-black outline-none text-black rounded-xl h-6 border border-gray-300 w-48    "  
                    placeholder="Rechercher"
                />
            <i class="fas fa-search absolute top-1 right-2 text-black"></i>
            </form>
            </div>
        </div>
        
    </div>
    <main class="pt-10 px-10 md:px-20 lg:px-56 xl:px-72">
        {{$slot}}
    </main>
    <!-- Footer -->

    <footer class="bg-black text-white text-center pt-4 pb-6">
        <p>Copyright &copy; <span class="name">Alpha Amadou Diallo</span></p>
        <p>2021 Tous droits resérvés</p>
    </footer>
</body>
</html>