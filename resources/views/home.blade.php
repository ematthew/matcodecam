@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/logo.png" class="rounded-circle">
        </div>
 
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
           <div class="d-flex">
            <div class="pr-3"><strong>154</strong> posts</div>
            <div class="pr-3"> <strong>23k</strong> followers</div>
            <div class="pr-3"><strong>212</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
        <img src="/img/showcase1.jpg" class="w-100">
    </div>
    <div class="col-4">
        <img src="/img/showcase1.jpg" class="w-100">
    </div>
    <div class="col-4">
        <img src="/img/showcase1.jpg" class="w-100">
    </div>
    </div>
</div>
@endsection
