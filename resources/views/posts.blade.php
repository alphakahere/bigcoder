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
    <x-slot name="categoryfilter">
        <x-categoryBar :categories="$categories"/>
    </x-slot>
    
    @if(count($posts))
        <x-post-latest-card :post="$posts[0]"/>
        <div class=" grid lg:grid-cols-3 gap-4">
            @foreach($posts->skip(1) as $post)
                <x-post-card :post="$post"/>
            @endforeach
        </div>
    @else 
        <p class=" text-center">Pas d'articles encore, s'il vous plaît vérifier après:</p>
    @endif
</x-layout>