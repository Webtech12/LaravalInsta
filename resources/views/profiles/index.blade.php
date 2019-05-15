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
      <a href="#">Add Post</a>
    </div>
    <div class="d-flex">
        <div class="pr-3"><strong>123</strong> posts</div>
        <div class="pr-3"><strong>23k</strong> followers</div>
        <div class="pr-3"><strong>211</strong> following</div>
    </div>

    <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>

  <div>{{$user->profile->description}}</div>
  <div><a href="#">{{$user->profile->url}}</a></div>
  </div>
  
</div>

<div class="row pt-5">

    <div class="col-4">
        <img src="https://educationaltechnology.net/wp-content/uploads/2017/09/wiki.gif" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/80/Wikipedia-logo-v2.svg/1200px-Wikipedia-logo-v2.svg.png" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/80/Wikipedia-logo-v2.svg/1200px-Wikipedia-logo-v2.svg.png" class="w-100">
    </div>

</div>

</div>
@endsection
