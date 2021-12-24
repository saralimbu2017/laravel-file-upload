@extends('layouts.app')

@section('content')
  <ul>
    @foreach($posts as $post)
      <div class="image-container">
        <p>hello</p>
        <img height="100" src="/images/{{$post->path}}" alt="">
      </div>
      <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
    @endforeach

  </ul>

@endsection