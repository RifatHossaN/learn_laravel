<x-layout>
    <h1 class="text-white text-2xl mb-2 font-bold bg-teal-600 inline-block p-2 rounded-lg">Post Page</h1>
    @auth
    
    <h1 class="text-white text-xl">welcome {{auth()->user()->username}}! you are logged in. Your latest posts are here.
        
    </h1>
    @endauth

    @guest
        <h1 class="text-white text-xl py-2">welcome guest! you are not logged in</h1>
    @endguest

    <div class="grid grid-cols-2">
        @foreach ($posts as $post)
            <x-postCard :post="$post" />
        @endforeach
    </div>
    <div>
        {{$posts->links()}}
    </div>
        
    

    
</x-layout>