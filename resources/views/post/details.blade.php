@extends('layouts.app')

@section('header')
<h2>{{$post->title}}</h2>
@endsection

@section('content')
<div class="master-post-container">

  <div class="sub-post-con detail-box">

    <div class="post-series-con right">
      <p>{{$post->seriesA}} / {{$post->seriesB}}</p>
    </div>

    <div class="post-title-con">
      <h2><a href="{{route('Post.detail', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
    </div>

    <div class="post-des-con-detail">
      <p>{{$post->description}}</p>
    </div>

    <img class="post-img" src="{{asset('storage/' . $post->image)}}" onerror="this.style.display='none'"/>

    <div class="post-date-con">
      <p>{{$post->pub_date}}</p>
    </div>

    <div class="post-user-con">
      <p>-{{$post->user}}</p>
    </div>

  </div>

</div>

<div class="center">
<a class="btn btn-primary left" href="{{route('Post.list') }}">Back to posts</a>
</div>

@endsection
