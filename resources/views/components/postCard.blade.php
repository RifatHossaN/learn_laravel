@props(['post'])

<div class="bg-cyan-950 p-4 m-2 text-white flex flex-col gap-3 rounded-lg">
    <div>
        <h3 class="text-base font-semibold">{{$post->title}}</h3>
        <h3 class="text-xs">Posted {{$post->created_at->diffForHumans()}} by {{$post->user->username}}</h3>
    </div>
    
    <p class="text-sm">{{Str::words($post->body,15,"")}}<b class="font-semibold"> ...See More</b></p>
     
</div>