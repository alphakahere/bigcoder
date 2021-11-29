<x-layout>
    <x-slot name="categoryfilter">
        <x-categoryBar :categories="$categories"/>
    </x-slot>
    <div class="mb-2">
        <div class="">
            <h1 class="text-center text-2xl font-medium">{{$post->title}}</h1>
            <img src="{{asset('/images/img.jpeg')}}" alt="img" class="w-full mt-1 rounded">
        </div>
        <div class="my-3 text-lg">
            {!!$post->body!!}
        </div>
    </div>
    {{-- comment form --}}
    <div class="w-full my-5 border-t border-gray-400 pt-5">
       @auth
           <x-comment-form :post="$post" />
        @else 
            Il faut te connecter pour participer à la discussion.
            <a href="/login" class=" text-blue-500">Se Connecter</a>
       @endauth
    </div>
    {{-- Comments --}}
    @if (count($post->comments))
        <x-comments :post="$post" />
    @endif


</x-layout>