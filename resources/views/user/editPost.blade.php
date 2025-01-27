
<x-layout>
    Edit Post Page <br>
    @auth

        <form action="{{route('post.update',$post)}}" method="post" class="p-4 bg-teal-900 rounded-lg my-2 flex flex-col gap-4">

            @if (session('success'))
                <x-flashMsg msg="{{session('success')}}" bg="{{session('bgColor')}}"/>
            @endif
            
            <h1>Edit The post</h1>

            @method('PUT')

            @csrf
            
            {{-- post Title --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="title" class="text-xs">Post Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="rounded text-black px-2
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
                <textarea name="body" rows="5" value={{$post->body}} class="rounded text-black px-2
                @error('body')
                    bg-red-300
                @enderror">{{$post->body}}</textarea>

                @error('body')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>

            @error('failed')
                <p class="text-red-400">{{$message}}</p>
            @enderror

            {{-- submit button --}}
            <button class="rounded p-1 bg-emerald-600 text-white mt-2">Edit</button>
        </form>

    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>