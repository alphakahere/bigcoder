<nav class="flex items-center fixed w-full bg-black justify-between px-5 md:px-7 lg:px-48 xl:px-56 py-3 z-50">
    <h1 class="flex items-center text-2xl space-x-1 text-white">
        <a href="/">
            <i class="fas fa-bars"></i>
            <span class="logo text-3xl">BigCoder</span>
        </a>
    </h1>
    <div class="">
        @if (Route::is('home'))
            {{$searchBar}}            
        @endif
    </div>
    <ul class="text-white flex items-center space-x-3">
        <li class=" list-none">
            <a href="https://twitter.com/alpho69" target="_blank" class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
                <i class="fab fa-twitter text-black"></i>
            </a>
        </li>
        <li class=" list-none">
            <a href="https://www.linkedin.com/in/alpha-amadou-diallo-3944661b9/" target="_blank"
            class="bg-white h-6 w-6 flex items-center justify-center rounded-full"
            >
            <i class="fab fa-linkedin-in text-black"></i>
            </a>
        </li>
        <li class=" list-none">
            <a href="https://github.com/alphakahere" target="_blank" 
            class="bg-white h-6 w-6 flex items-center justify-center rounded-full">
                <i class="fab fa-github text-black"></i>
            </a>
        </li>
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class=" text-white hover:underline" >Se Deconnecter</button>
            </form>
        @else
            <li class=" list-none">
                <a href="/login" class=" text-white hover:underline" class="">Se Connecter</a>
            </li>
        @endauth
        
    </div>
</nav>