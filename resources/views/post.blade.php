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
        <form action="#" method="POST" class="w-full xl:w-2/3 ">
            @csrf
            <textarea name="content" id="content"  class=" border border-gray-400 outline-none rounded w-full p-2 text-gray-500" placeholder="Ajouter un commentaire"></textarea>
            <button class="bg-blue-500 text-white px-2 py-1 rounded outline-none hover:bg-blue-500 transition-all ease-in duration-300">Commenter</button>
        </form>
    </div>
    {{-- Comments --}}
    @if (count($post->comments))
        <section>
            @foreach ($post->comments as $comment)
                <div class="mb-5 flex space-x-2 items-center">
                    <img src="{{asset('images/me.jpg')}}" alt="" class="w-10 h-10 rounded-full">
                    <p>
                        {{$comment->content}}
                    </p>
                </div>  
            @endforeach 
        </section>
    @endif


</x-layout>