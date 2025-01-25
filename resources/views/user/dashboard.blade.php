
<x-layout>
    User DashBoard Page <br>
    @auth
        welcome {{auth()->user()->username}}! you are logged into the User DashBoard
    @endauth

    @guest
        welcome guest! you are not logged in
    @endguest
</x-layout>