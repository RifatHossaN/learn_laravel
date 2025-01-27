@props(['post', 'full'=>false])

<div class="bg-cyan-950 p-4 m-2 text-white flex flex-col gap-3 rounded-lg">
    <div>
        <h3 class="text-base font-semibold">{{$post->title}}</h3>
        <h3 class="text-xs">Posted {{$post->created_at->diffForHumans()}} by <a class="text-blue-400" href="{{route('user.posts',$post->user)}}">{{$post->user->username}}</a></h3>
    </div>

    
    @if ($full)
        <p class="text-sm">{{$post->body}}</p>
    @else
        <p class="text-sm">{{Str::words($post->body,15,"")}}<b class="font-semibold"> <a class="text-blue-500" href="{{route('post.show',$post)}}">...See More</a></b></p>
    @endif

    
    
    
     
</div>