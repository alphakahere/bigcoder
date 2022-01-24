<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigCoder</title>
    <link rel="stylesheet" href="{{secure_asset('css/app.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('images/favicon.jpg')}}"/>
    <script src="https://kit.fontawesome.com/e4530581f4.js" crossorigin="anonymous"></script>
</head>
<body class="overflow-x-hidden">
    @include('navbar')
    <div class="h-screen flex flex-col justify-between w-full">
        <div class="w-full">
            {{$header ?? ''}}    
            {{$categoryfilter ?? ''}}        
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
        {{-- main --}}
        <main class="pt-10 px-10 md:px-20 lg:px-56 xl:px-72">
            {{$slot}}
        </main>
        <!-- Footer -->

        <footer class="bg-black text-white text-center pt-4 pb-6">
            <p>Copyright &copy; <span class="name">Alpha Amadou Diallo</span></p>
            <p>2021 Tous droits resérvés</p>
        </footer>
    </div>
</body>
</html>