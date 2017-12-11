
@extends('layouts.master')
@section('title','Admin')
@section('description', 'this is a blog post')
@section('content')



    <div class="container-fluid">
      <div class="row" style="padding-top:45px;">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">

            <li class="nav-item">
              <a class="nav-link active" href="#">Site Identity <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/blog/1/edit">Home content </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog/2/edit">Premium content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/plans/1/edit">Plans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/colours/1/edit">Colours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/images/1/edit">Images</a>
            </li>
          </ul>


        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Dashboard</h1>
          <div class="admin-settings container">
            <?php if ($errors->isEmpty()): ?>
                          <?php
else: ?>

                            <div class="alert alert-danger">
                                <ul >
                                    @foreach($errors->all() as $error)
                                        <li style="Display:block;">{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                          <?php
endif; ?>
            {{Form::open(array('url' => 'identity', 'files'=>true))}}
            <div class="form-group">
              {{Form::label('Title', 'Site Title')}}
              {{Form::text('Title', $post->Title,array('class' =>'form-control'))}}
             </div>
             <div class="form-group">
               {{Form::label('Meta_Desc', 'Meta Description')}}
               {{Form::text('Meta_Desc', $post->Meta_Desc,array('class' =>'form-control'))}}
              </div>
              <div class="form-group">
                {{Form::label('page_name', 'Page 2 Name')}}
                {{Form::text('page_name', $post->page_name,array('class' =>'form-control'))}}
               </div>


            {{Form::submit('Store', array('class' => 'btn btn-primary'))}}
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
  position:fixed;
  bottom:0;
}
.top-banner{
  position:fixed;

}

@endsection
