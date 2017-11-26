

@extends('layouts.master')
@section('title','Blog')
@section('description', 'this is a blog post')
@section('content')
  <div class="container">
    <h1>{{$post->post_title}}</h1>
    <p>Create at: {{$post->created_at}}</p>
    <hr>
    <div class="col-xs-4">
      <img src="images/uploads/{{$post->image_name}}--large.jpg">
    </div>
    <div class="col-xs-8">
      <p>{{$post->post_description}}</p>
    </div>
  </div>
@endsection
@section('styles')
  .head{
    height:40vh !important;
  }
@endsection
