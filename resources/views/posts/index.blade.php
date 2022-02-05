@extends('layouts.app')

@section('content')

<div class="">

<form action=" {{ route('post') }} " method="post" class="m-5" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group w-25 bg-black">

  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose image</label>
  </div>
  <div>
    
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="body"  class="form-control @error('body') border-danger @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="@error('body') {{$message}} @enderror"></textarea>
    
  </div>
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">post</button>
</form>

@if ($posts->count())
  @foreach ($posts as $post)
  <div>
  
  <div class="pa">
     <h4 class="n">{{$post->user->name}}</h4>
    <img src="{{asset('images/' . $post->image_path)}}" alt="" class="p">
    <h4 class=" rounded-bottom d">
    {{$post->body}}
    </h4>
  </div>
  </div>
  @endforeach

@else
no posts
@endif


</div>




@endsection