@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <img src="/storage/{{ $post->image }}" class="w-100 h-55" alt="">
        </div>
    </div>
<div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div> 
            <p><a href="/profile/{{$post->user->id}}"><h6>{{$post->user->username}}</h6></a>{{$post->caption}}</p>
        </div>
      </div> 

    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>

</div>
@endsection
