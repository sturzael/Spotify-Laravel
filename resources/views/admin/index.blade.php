
@extends('layouts.master')
@section('title','Admin')
@section('description', 'this is a blog post')
@section('links')
  @if(Auth::user())
  <div class="links">
        <li><a href="{{route('blog.create')}}">Create new blog post</a></li>

        <li><a>Delete blog post</a></li>
  </div>
@endif
@endsection
@section('styles')
  .head{
    height:40vh !important;
  }
@endsection
