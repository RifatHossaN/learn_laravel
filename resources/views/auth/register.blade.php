<x-layout class="bg-blue-700">
    Register Page

    <div class="mx-auto max-w-screen-sm card mt-4 p-4 bg-gray-800 rounded-xl">

        <form action="{{route('register')}}"  method="post" class="flex flex-col gap-4">
            @csrf
            
            {{-- username --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="username" class="text-xs">Username</label>
                <input type="text" name="username" value="{{old('username')}}" class="rounded text-black px-2
                @error('username')
                    bg-red-300
                @enderror">

                @error('username')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            
            {{-- email --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="email" class="text-xs">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="rounded text-black px-2
                @error('email')
                    bg-red-300
                @enderror">

                @error('email')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            
            {{-- password --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="password" class="text-xs">Password</label>
                <input type="password" name="password" class="rounded text-black px-2
                @error('password')
                    bg-red-300
                @enderror">

                @error('password')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            
            {{-- confirm password --}}
            <div class="flex flex-col gap-1 text-white">
                <label for="password_confirmation" class="text-xs">Confirm Password</label>
                <input type="password" name="password_confirmation" class="rounded text-black px-2
                @error('password')
                    bg-red-300
                @enderror">

                @error('password')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>

            {{-- submit button --}}
            <button class="rounded p-1 bg-emerald-600 text-white mt-2">Register</button>
        </form>

    </div>
</x-layout>
