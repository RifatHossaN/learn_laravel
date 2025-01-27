<x-layout>
    <h1 class="text-white text-2xl mb-2 font-bold bg-teal-600 inline-block p-2 rounded-lg">Post Page</h1>
    @auth
        <h1 class="text-white text-xl">welcome {{auth()->user()->username}}! you are logged in. Your latest posts are here.
        </h1>
        @foreach ($posts as $post)
            <div class="bg-cyan-950 p-4 m-2 text-white flex flex-col gap-3 rounded-lg">
                <div>
                    <h3 class="text-base font-semibold">{{$post->title}}</h3>
                    <h3 class="text-xs">Posted {{$post->created_at->diffForHumans()}} by </h3>
                </div>
                
                <p class="text-sm">{{Str::words($post->body,15,"")}}<b class="font-semibold"> ...See More</b></p>
                 



            </div>
        @endforeach
        
    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>