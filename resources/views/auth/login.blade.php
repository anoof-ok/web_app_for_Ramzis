@extends('layouts.app')

@section('content')

<div>



<form action="{{route('login')}}" method="post" class="mx-auto pt-5" style="width: 300px;">
@if(session('status'))
<p class="text-danger">
    {{session('status')}}
</p>
@endif
@csrf
  <div class="form-group">
    <label for="email" ></label>
    <input type="email" value="{{old('email')}}" class="form-control  @error('email') border-danger @enderror" id="exampleInputEmail"  placeholder=" your email" name="email">
    @error('email')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="password"></label>
    <input type="password" class="form-control  @error('password') border-danger @enderror" id="exampleInputPassword1" placeholder=" choose Password" name="password">
    @error('password')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
  <button type="submit" class="btn btn-primary" style="width: 300px;" >Submit</button>
</form>
</div>

@endsection