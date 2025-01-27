<x-layout>
    <h1 class="text-white text-2xl mb-2 font-bold bg-teal-600 inline-block p-2 rounded-lg">{{$username}}</h1>

    <div class="grid grid-cols-2">
        @foreach ($posts as $post)
            <x-postCard :post="$post" />
        @endforeach
    </div>
    <div>
        {{$posts->links()}}
    </div>

</x-layout>