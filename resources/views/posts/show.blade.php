@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" class="w-100 h-55" alt="">
        </div>
        <div class="col-4">
            <h1>{{$post->user->username}}</h1>

            <p>{{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection
