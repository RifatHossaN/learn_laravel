<x-layout>
    welcome Page <br>
    @auth
        welcome {{auth()->user()->username}}! you are logged in
    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>