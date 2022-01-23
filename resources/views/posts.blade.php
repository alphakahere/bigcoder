<x-layout>
    <x-slot name="searchBar">
        <div class="relative hidden md:block">
            <form method="GET" action="#">
                <input type="text" name="search" id="search" 
                    class="px-2 placeholder-black outline-none text-black rounded-xl h-6"  
                    placeholder="Rechercher"
                />
                <i class="fas fa-search absolute top-1 right-2 text-black"></i>
            </form>
            </div>
        </div>
    </x-slot>
    <x-slot name="header">
        <header class="header  h-96 text-white flex flex-col justify-center items-center" id="header">
            <div class="flex items-center mb-5 space-x-1">
                <img src="{{asset('images/me.jpg')}}" alt="Ma-Photo" class="h-20 w-20 rounded-full object-cover">
                <div class="name text-2xl" >
                    <p>Alpha Amadou</p>
                    <p class="text-center">Diallo</p>
                </div>
            </div>
           <p class="flex items-center text-center">           
               Développeur ReactJs && Laravel, <br>passionné par la programmation, des nouvelles technologies et du bussiness
           </p>
        </header>
    </x-slot>
    <x-slot name="categoryfilter">
        <x-categoryBar :categories="$categories"/>
    </x-slot>
    
    @if(count($posts))
        <x-post-latest-card :post="$posts[0]"/>
        <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts->skip(1) as $post)
                <x-post-card :post="$post"/>
            @endforeach
        </div>
    @else 
        <p class=" text-center">Pas d'articles encore, s'il vous plaît revérifier après.</p>
    @endif
</x-layout>