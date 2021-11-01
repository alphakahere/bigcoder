@props(['post'])
<article class="lg:flex space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="lg:w-1/2">
        <img src="{{asset('images/img.jpeg')}}" alt="img-post" class="md:h-80 h-64 w-full rounded">
    </div>
    <div class="flex flex-col p-0 justify-between lg:w-1/2">
        <div>
            <h5 class=" "> 
                <a href="/categories/{{$post->category->id}}" class="text-blue-500 text-xl font-medium">
                    {{$post->category->name}}
                </a>
            </h5>
            <a href="/posts/{{$post->id}}">
                <h1 class="my-2 text-2xl font-semibold">{{ $post->title }}</h1>
            </a>
            <p class="lg:text-lg">
                {{ $post->excerpt }} 
            </p>
        </div>
        <div class="flex items-center mt-6 lg:mt-9 space-x-1">
            <img src="{{asset('images/me.jpg')}}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
            <div class="flex flex-col justify-center">
                <h1 class="name">Alpha Amadou Diallo</h1>
                <p class=" uppercase text-gray-500 font-medium text-sm">{{date_format($post->created_at, 'd M Y')}} - {{$post->time}}MIN read </p>
            </div>
        </div>
    </div>
</article>