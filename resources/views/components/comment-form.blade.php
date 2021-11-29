<form action="/comment"" method="POST" class="w-full xl:w-2/3 ">
    @csrf
    <textarea  name="content" id="content"  class=" border border-gray-400 outline-none rounded w-full p-2 text-gray-500" placeholder="Ajouter un commentaire" style="min-height: 80px; max-height:80px;"></textarea>
    <button class="bg-blue-500 text-white px-2 py-1 rounded outline-none hover:bg-blue-500 transition-all ease-in duration-300">Commenter</button>
</form>