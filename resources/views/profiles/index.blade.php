@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">

  <div class="col-sm-3 p-3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV8bzQ0NCsJHKF01mLwsTSrEh_i2noZhjAFl_VbkWWI-o4nYCP" 
    class="rounded-circle">
  </div>

  <div class="col-9 p-5 pl-4 float-right">
    <div class="d-flex justify-content-between align-items-baseline">
      <h1>{{$user->username}}</h1>
      <a href="/p/create">Add Post</a>
    </div>

    <a href="/profile/{{ $user->id }}/edit">Edit Post</a>
    <div class="d-flex">
        <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pr-3"><strong>23k</strong> followers</div>
        <div class="pr-3"><strong>211</strong> following</div>
    </div>

    <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>

  <div>{{$user->profile->description}}</div>
  <div><a href="#">{{$user->profile->url}}</a></div>
  </div>
  
</div>

<div class="row pt-5">

    @foreach ($user->posts as $post)
    
    <div class="col-4 pb-4">
    <a href="/p/{{ $post->id }}">
      <img src="/storage/{{ $post->image }}" class="w-100">
    </a>
    </div>    

    @endforeach
   

</div>

</div>
@endsection
