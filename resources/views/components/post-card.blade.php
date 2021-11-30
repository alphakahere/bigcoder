@props(['post'])
<article
    class="flex flex-col space-x-5 p-3 mb-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class=" px-5">
        <a href="/posts/{{ $post->slug }}">
            <img src="{{ asset('images/img.jpeg') }}" alt="img-post" class="lg:h-44 h-64 w-full rounded">
        </a>
    </div>
    <div class="flex flex-col p-0">
        <h5 class="">
            <a href="/categories/{{ $post->category->slug }}" class="   text-blue-500 text-xl font-medium">
                {{ $post->category->name }}
            </a>
        </h5>
        <a href="/posts/{{ $post->slug }}">
            <h1 class="my-2 text-base font-semibold">{{ $post->title }}</h1>
        </a>
        <p class="lg:text-sm">
            {{ $post->excerpt }}
        </p>
        <div class="flex items-center mt-6 space-x-1">
            <img src="{{ asset('images/me.jpg') }}" alt="avatar-photo" class="h-10 w-10 rounded-full object-cover ">
            <div class="flex flex-col justify-center">
                <h1 class="name">Alpha Amadou Diallo</h1>
                <p class=" uppercase text-gray-500 font-medium text-sm">
                    {{ date_format($post->created_at, 'd M Y') }}
                    - {{ $post->time }}min read
                </p>
            </div>
        </div>
    </div>
</article>
