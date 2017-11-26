




@extends('layouts.master')
@section('title','Create')
@section('description', 'this is a blog post')
@section('content')
  <div class="text">
  @if($errors)
              <div class="alert alert-danger">
                  <ul >
                      @foreach($errors->all() as $error)
                          <li style="Display:block;">{{ $error }}</li>
                      @endforeach

                  </ul>
              </div>
              @endif
  {{Form::open(array('url' => 'blog', 'files'=>true))}}
  <div class="form-group">
    {{Form::label('post_title', 'Post Title')}}
    {{Form::text('post_title', '',array('class' =>'form-control'))}}
  </div>

  <div class="form-group">
    {{Form::label('post_description', 'Description')}}
    {{Form::text('post_description', '',array('class' =>'form-control'))}}
  </div>

  {{-- <div class="form-group">
    {{Form::label('image', 'Description')}}
    {{Form::label('image',array('class' =>'form-control'))}}
  </div> --}}

  <div class="form-group">
  			{{ Form::label('image_name', 'Post Image') }}
  			{{ Form::file('image_name', array('class' => 'form-control'))}}
  		</div>


  {{Form::submit('Add New Post', array('class' => 'btn btn-primary'))}}
  {{Form::close()}}

    {{-- <form action="{{route('blog.store' )}}">
  <div class="form-group">
    <label for="text">Title</label>
    <input type="text" name="text"class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="desc">Desc</label>
    <input type="text" class="form-control" name="desc" id="desc">
  </div>
  <div class="form-group">
    <label for="image">img</label>
    <input type="text" class="form-control" name="image" id="image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  </form> --}}
  </div>

@endsection
@section('styles')
  .head{
    height:40vh !important;
  }
@endsection
