@extends('layouts.app')

@section('header')
<h3>Create your own post</h3>

@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  <p>Some problems have occurred, The form has not been saved!</p>
</div>
@endif
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
    @error('title')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
    @error('description')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group seriesA">
    <label for="">Post series</label>
    <input type="number" class="form-control @error('seriesA') is-invalid @enderror" name="seriesA" value="1">
    @error('seriesA')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>

<p class="series-p"> / </p>

  <div class="form-group seriesB">
    <label for=""></label>
    <input type="number" class="form-control @error('seriesB') is-invalid @enderror" name="seriesB" value="1">
    @error('seriesB')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="noFloat"></div>

  <div class="form-group">
    <label for="">Publication date</label>
    <input type="date" class="form-control @error('pub_date') is-invalid @enderror" name="pub_date" value="{{old('pub_date')}}" placeholder="yyyy-mm-dd">
    @error('pub_date')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control form-button @error('image') is-invalid @enderror" name="image">
    @error('image')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group NoGo">
    <input type="text" class="form-control" name="user" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Post blog!</button>
</form>
@endsection
