@props(['categories'])
<div class="h-8 bg-gray-200  items-center justify-center hidden md:flex ">
    <ul class="flex space-x-4 justify-center items-center">
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{$category->slug}}" class="text-gray-600 hover:text-gray-700">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
</div>