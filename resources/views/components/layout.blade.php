<div class="bg-slate-950 min-h-svh flex flex-col justify-between">
    <header class="bg-slate-800 text-white flex justify-between p-4">
        <div>
            <a href="{{route('welcome')}}">home</a>
        </div>
        <div class="flex gap-4">
            <a href="#">LogIn</a>
            <a href="{{route('register')}}">Register</a>
        </div>
    </header>

    <main class="h-full p-4">
        <h1 class="text-teal-300">{{$slot}}</h1>
    </main>
    <footer class="p-4">
        <h1 class="text-cyan-500">footer is here</h1>
    </footer>
</div>