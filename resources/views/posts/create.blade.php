@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post" >
    @csrf
       <div class="row">
       <div class="col-8 offset-2">

        <div class="row">
            <h1>Add New post</h1>
        </div>
           
           <div class="form-group row">  
                    <div class="col-md-6">
                     <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>
                     <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                      @error('caption')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong> </span>
                     @enderror
                    </div>                   
           </div>

           <div class="row">
                   <div class="col-md-6">
                          <label for="image" class="col-form-label text-md-right">Post Image</label>
                          <input type="file" class="form-control-file" id="image" name="image" >

                          @error(('image'))
                         <strong>{{$message}}</strong> 
                         @enderror
                   </div>
            </div>

            <div class="row">
                <div class="col-md-6 pt-2">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>

       </div>
   </div>
   </form>
</div>
@endsection
