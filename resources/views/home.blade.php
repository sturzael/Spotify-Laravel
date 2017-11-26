@extends('layouts.master')
@section('title','Home')
@section('description', 'this is a blog post')
@section('links')
  @if(Auth::user())
  <div class="links">
        <li><a href="/admin">Admin Panel</a></li>
  </div>

@endif
@endsection
