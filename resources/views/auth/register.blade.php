<x-layout>
    <div class=" flex justify-center mb-10">
        <div class="p-5 bg-gray-100 space-y-5 w-2/5 rounded">
            <h1 class="text-center font-medium text-2xl">S'inscrire</h1>
            @if (session('message'))
                <h4 class=" text-green-500">{{session('message')}}</h4>
            @endif
            <form action="/register" method="POST" class="flex flex-col space-y-3 text-gray-600">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="">Prénoms et Nom</label>
                    <input type="text" required id="name" name="name" class="w-full h-10 rounded outline-none px-3" value="{{old('name')}}">
                    @error('name')
                        <small class=" text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="pseudo" class="">Pseudo</label>
                    <input type="text" required id="pseudo" name="pseudo" class="w-full h-10 rounded outline-none px-3" value="{{old('pseudo')}}">
                    @error('pseudo')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="email" class="">Email</label>
                    <input type="email" required id="email" name="email" class="w-full h-10 rounded outline-none px-3" value="{{old('email')}}">
                    @error('email')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="password" class="">Password</label>
                    <input type="password" required id="password" name="password" class="w-full h-10 rounded outline-none px-3">
                    @error('password')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="pt-5">
                    <button class=" bg-blue-500 text-white w-24 h-8 rounded hover:bg-blue-600 transition-all duration-300 ease-in">
                        S'inscrire
                    </button>
                    <p class="mt-3">
                        <span>Avez-vous un compte?</span>
                        <a href="/login" class=" text-blue-500 hover:underline">Se Connecter</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>