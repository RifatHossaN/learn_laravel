<x-layout class="bg-blue-700">
    LogIn Page

    <div class="mx-auto max-w-screen-sm card mt-4 p-4 bg-gray-800 rounded-xl">

        <form action="{{route('login')}}"  method="post" class="flex flex-col gap-4">
            @csrf
            
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

            @error('failed')
                <p class="text-red-400">{{$message}}</p>
            @enderror

            {{--remember checkbox--}}
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="text-white">Remember me</label>
            </div>

            {{-- submit button --}}
            <button class="rounded p-1 bg-emerald-600 text-white mt-2">LogIn</button>
        </form>

    </div>
</x-layout>
