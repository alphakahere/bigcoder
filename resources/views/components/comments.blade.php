@props(['post'])
<section>
    @foreach ($post->comments->sortDesc() as $comment)
        <div class="mb-5 flex space-x-3 bg-gray-50 py-1 px-2 rounded-lg">
            <img src="{{asset('images/me.jpg')}}" alt="" class="w-10 h-10 rounded-full">
            <div class="">
                <div class="mb-1">
                    <span class="font-medium ">{{$comment->author->pseudo}}, </span>
                    <time class=" opacity-50">{{$comment->created_at->diffForHumans()}}</time>
                </div>
                <p>
                    {{$comment->content}}
                </p>
            </div>                   
        </div>  
    @endforeach 
</section>