<x-layout>
    <x-slot name="categoryfilter">
        <div class="h-8 bg-gray-200  items-center justify-center hidden md:flex ">
            <ul class="flex space-x-4 justify-center items-center">
                @foreach ($categories as $category)
                    <li>
                        <a href="/categories/{{$category->slug}}" class="text-gray-600 hover:text-gray-700">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
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