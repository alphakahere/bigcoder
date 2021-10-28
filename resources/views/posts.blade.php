<x-layout>
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