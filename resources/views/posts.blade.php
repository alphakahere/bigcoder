<x-layout>
    <x-post-latest-card :post="$posts[0]"/>
    <div class=" grid lg:grid-cols-2 gap-4">
        <x-post-card />
        <x-post-card />
        <x-post-card />
        <x-post-card />
    </div>
    <div class=" grid lg:grid-cols-3 gap-4">
        <x-post-card />
        <x-post-card />
        <x-post-card />
        <x-post-card />
        <x-post-card />
        <x-post-card />
    </div>
</x-layout>