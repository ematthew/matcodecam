@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->image }}" class="w-100">
        </div>
 
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
               <div class="h4"> {{$user->username}}</div>

               <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

                
                @if($user->id == Auth::user()->id);
                     <a href="/p/create">Add New Post</a>
               @endif
               
            </div>
            @if($user->id == Auth::user()->id);
            
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

            @endif
           <div class="d-flex">
            <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
            <div class="pr-3"> <strong>{{$user->followers->count()}}</strong> followers</div>
            <div class="pr-3"><strong>{{$user->following->count()}}</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile->title ?? "no title"}}</div>
           <div>{{$user->profile->description ?? "no description"}}</div>
           <div><a href="#">{{$user->profile->url ?? "no profile"}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
         <div class="col-4 pt-4">
       <a href="/p/{{$post->id}}"> <img src="/storage/{{$post->image}}" class="w-100"></a>
    </div>
        @endforeach
    </div>
    
    </div>
</div>
@endsection


