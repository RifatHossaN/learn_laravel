
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{env('APP_NAME')}} Welcome</title>
</head>
<body>
    <div class="bg-slate-950 min-h-svh flex flex-col">
        <header class="bg-slate-800 text-white flex justify-between p-4">
            <div>
                <a href="{{route('post')}}">home</a>
            </div>

            @guest
                <div class="flex gap-4">
                    <a href="{{route('login')}}">LogIn</a>
                    <a href="{{route('register')}}">Register</a>
                </div>
            @endguest

            @auth
                <div class="h-4" x-data="{ open: false }" @click.outside="open=false">
                    <button @click="open = !open" type="button">
                        <img class="rounded-full" src="https://picsum.photos/30" alt="">
                    </button>

                    <div class="bg-teal-950 shadow-lg absolute top-14 right-4 rounded-lg p-2 overflow-hidden font-light text-white text-center" x-show="open">
                        <p class="px-2 text-base">{{auth()->user()->username}}</p>
                        <a href="{{route('dashboard')}}" class="text-xs">DashBoard</a>

                        <form action="{{route('logout')}}" method="post">
                            @csrf

                            <button class="px-2 text-xs">LogOut</button>
                        </form>

                    </div>
                    
                </div>
            @endauth
            
        </header>

        <main class="h-full p-4 ">
            <h1 class="text-teal-300">{{$slot}}</h1>
        </main>
        <footer class="p-4">
            <h1 class="text-cyan-500">footer is here</h1>
        </footer>
    </div>
</body>
</html>