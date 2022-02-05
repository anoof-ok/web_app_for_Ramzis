@extends('layouts.app')

@section('content')

<div>

<form action="{{route('register')}}" method="post" class="mx-auto pt-5" style="width: 300px;">
@csrf
  <div class="form-group" >
    <label for="name"></label>
    <input type="text" value="{{old('name')}}" class="form-control @error('name') border-danger @enderror" id="exampleInputText"  placeholder="your name" name="name">
    @error('name')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="username" ></label>
    <input type="text" value="{{old('username')}}"  class="form-control @error('username') border-danger @enderror" id="exampleInputText"  placeholder=" your username" name="username">
    @error('username')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
  </div>
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
  </div>
  <div class="form-group">
    <label for="password_confirmation"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" again Password" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary" style="width: 300px;" >Submit</button>
</form>
</div>

@endsection