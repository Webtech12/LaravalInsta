@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" class="w-100 h-55" alt="">
        </div>

        <div class="col-4">
            <div> 
                <div class="d-flex align-items-center">
                    <div class="p-3">
                        <img src="{{$post->user->profile->profileImage() }}"
                         class="rounded-circle w-100" style="max-width: 50px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}" style="color: cadetblue">{{$post->user->username}}</a>
                            <a href="#" class="pl-4">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>

            <p><a href="/profile/{{$post->user->id}}"><h6>{{$post->user->username}}</h6></a>{{$post->caption}}</p>
        </div>
      </div> 

    </div>
</div>
@endsection
