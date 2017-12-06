
@extends('layouts.master')
@section('title','Admin')
@section('description', 'this is a blog post')
@section('content')



    <div class="container-fluid">
      <div class="row" style="padding-top:45px;">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">

            <li class="nav-item">
              <a class="nav-link" href="/identity/1/edit">Site Identity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($post->id == 1){
                echo 'active';
              }?>" href="/blog/1/edit">Home content <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($post->id == 2){
                echo 'active';
              }?>" href="/blog/2/edit">Premium content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/colours/1/edit">Colours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/images/1/edit">Images</a>
            </li>
          </ul>


        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Dashboard</h1>
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
            <div class="form-group">
              {{Form::label('id', 'Database ID')}}
              {{Form::text('id',$post->id,array('class' =>'form-control', 'readonly' => 'readonly'))}}
            </div>


            {{Form::submit('Update', array('class' => 'btn btn-primary'))}}
            {{Form::close()}}
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


@endsection
@section('styles')
.main-nav{
  display:none;
}
#back{
  display:inline-block;
}
#footer{
  margin-top:100px;
  position:relative;
}
.top-banner{
  position:fixed;

}

@endsection
