@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
     <div class="col-5">
       <img src="/storage/{{$post->image}}" class="w-100">
     </div>

     <div class="col-4">
       <div>
         <div>
           <div class="d-flex align-items-center">
             <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 50px;">
             <div>
              <div class="font-weight-bold pl-3"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }} </span></a> | <a href="#" class="pl-2">follow</a> </div>
             </div>
           </div>
         </div>

         <hr>

         <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a> </span> {{$post->caption}}</p>
       </div>
     </div>

   </div>
</div>
@endsection
