<x-layout>
    <div class="mb-2">
        <div class="">
            <h1 class="text-center text-2xl font-medium">{{$post->title}}</h1>
            <img src="{{asset('/images/img.jpeg')}}" alt="img" class="w-full mt-1 rounded">
        </div>
        <div class="my-3 text-lg">
            {!!$post->body!!}
        </div>
    </div>
</x-layout>