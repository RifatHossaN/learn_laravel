
<x-layout>
    User DashBoard Page <br>
    @auth
        welcome {{auth()->user()->username}}! you are logged into the User DashBoard



        <form action="{{route('post.store')}}" method="post" class="p-4 bg-teal-900 rounded-lg my-2 flex flex-col gap-4">

            @if (session('success'))
                <h1>{{session('success')}}</h1>
            @endif
            
            <h1>Create new post</h1>

            @csrf
            
            {{-- post Title --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="title" class="text-xs">Post Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="rounded text-black px-2
                @error('title')
                    bg-red-300
                @enderror">

                @error('title')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            
            {{-- Post Body --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="body" class="text-xs">Post Body</label>
                <textarea name="body" rows="5" class="rounded text-black px-2
                @error('body')
                    bg-red-300
                @enderror"></textarea>

                @error('body')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>

            @error('failed')
                <p class="text-red-400">{{$message}}</p>
            @enderror

            {{-- submit button --}}
            <button class="rounded p-1 bg-emerald-600 text-white mt-2">Post</button>
        </form>

    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>