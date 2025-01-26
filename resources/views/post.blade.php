<x-layout>
    Post Page <br>
    @auth
        welcome {{auth()->user()->username}}! you are logged in. Your latest posts are here.
    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>