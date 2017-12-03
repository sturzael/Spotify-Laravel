
@extends('layouts.master')
@section('title','Admin')
@section('description', 'this is a blog post')
@section('content')
<div class="admin-div">
  <h3 class="Deal center-align">Control Panel</h3>
</div>
<div class="admin-settings container">
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
    {{Form::label('site_header', 'Main Title')}}
    {{Form::text('site_header', $post->site_header,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_header', 'Block 1 Header')}}
    {{Form::text('site_para_one_header', $post->site_para_one_header,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_sub_header_1', 'Sub Header')}}
    {{Form::text('site_para_one_sub_header_1',$post->site_para_one_sub_header_1,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_text_1', 'Text')}}
    {{Form::text('site_para_one_text_1',$post->site_para_one_text_1,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_sub_header_2', 'Sub Header')}}
    {{Form::text('site_para_one_sub_header_2',$post->site_para_one_sub_header_2,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_text_2', 'Text')}}
    {{Form::text('site_para_one_text_2',$post->site_para_one_text_2,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_sub_header_3', 'Sub Header')}}
    {{Form::text('site_para_one_sub_header_3',$post->site_para_one_sub_header_3,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_one_text_3', 'Text')}}
    {{Form::text('site_para_one_text_3',$post->site_para_one_text_3,array('class' =>'form-control'))}}
  </div>


  <div class="form-group">
    {{Form::label('site_para_two_header', 'Block 2 Header')}}
    {{Form::text('site_para_two_header',$post->site_para_two_header,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_sub_header_1', 'Sub Header')}}
    {{Form::text('site_para_two_sub_header_1',$post->site_para_two_sub_header_1,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_text_1', 'Text')}}
    {{Form::text('site_para_two_text_1',$post->site_para_two_text_1,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_sub_header_2', 'Sub Header')}}
    {{Form::text('site_para_two_sub_header_2',$post->site_para_two_sub_header_2,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_text_2', 'Text')}}
    {{Form::text('site_para_two_text_2',$post->site_para_two_text_2,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_sub_header_3', 'Sub Header')}}
    {{Form::text('site_para_two_sub_header_3',$post->site_para_two_sub_header_3,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('site_para_two_text_3', 'Text')}}
    {{Form::text('site_para_two_text_3',$post->site_para_two_text_3,array('class' =>'form-control'))}}
  </div>

  <div class="form-group">
    {{Form::label('footer_small_text', 'Small Footer Text')}}
    {{Form::text('footer_small_text',$post->footer_small_text,array('class' =>'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('footer_big_text', 'Big Footer Text')}}
    {{Form::text('footer_big_text',$post->footer_big_text,array('class' =>'form-control'))}}
  </div>


  {{Form::submit('Update', array('class' => 'btn btn-primary'))}}
  {{Form::close()}}
</div>

@endsection
@section('styles')
.main-nav{
  display:none;
}
@endsection
