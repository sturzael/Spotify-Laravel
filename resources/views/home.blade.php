@extends('layouts.master')
@section('title','Home')
@section('description', 'this is a blog post')
@section('content')
  @if ($post->id === 1)

    <div class="homeImage">
  <div class="title-container">
  <h1 class="title">{{$post->site_header}}</h1>
  <a href="#"><div class="plans-button">
  <h1 class="title plans-button-link">Learn more</h1>
  </div></a>
  </div>

    </div>
    <div class="container">
        <div class="row" style="height: 100vh;    min-height: 700px;">
          <div class="col-sm-7 col-md-5 center-align" id="main-text" style="
  height: 100%;">
            <div class="center-align">
              <h2 class="Header-Home" style="margin-top:20px;">
                          {{$post->site_para_one_header}}
              </h2>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->site_para_one_sub_header_1}}
                </h3>
                <p>
                                {{$post->site_para_one_text_1}}
                </p>
              </div>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->site_para_one_sub_header_2}}
                </h3>
                <p>
                              {{$post->site_para_one_text_2}}
                </p>
              </div>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->site_para_one_sub_header_3}}
                </h3>
                <p>
                                  {{$post->site_para_one_text_3}}
                </p>
              </div>
            </div>

          </div>
          <div class="col-sm-4 col-sm-offset-1 col-md-6 whatson">
            <div class="info-img info" id="infoimg">

            </div>
          </div>
    </div>
  </diV>
  <div class="box-container-main">
    <div class="maintext-img" id="outline">

    </div>
    <div class="maintext-div">
      <div class="center-align col-sm-9 col-md-9 itseasy">
        <h2 class="Header-Home white">
                  {{$post->site_para_two_header}}
        </h2>
        <div>
          <h3 class="sub-header white">
                        {{$post->site_para_two_sub_header_1}}
          </h3>
          <p class="white">
                            {{$post->site_para_two_text_1}}
          </p>
        </div>
        <div >
          <h3 class="sub-header white">
                            {{$post->site_para_two_sub_header_2}}
          </h3>
          <p class="white">
                            {{$post->site_para_two_text_2}}
          </p>
        </div>
        <div>
          <h3 class="sub-header white">
                          {{$post->site_para_two_sub_header_3}}
          </h3>
          <p class="white">
                          {{$post->site_para_two_text_3}}
          </p>
      </div>

    </div>
      </div>




          </div>

          <div class="container">
              <div class="row" style="height: 100vh; ">
                <div class="col-sm-4">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">Special title treatment</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">Special title treatment</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">Special title treatment</h3>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
          </div>
        </diV>


 @elseif ($post->id === 2)
  <style type="text/css">
    .homeImage{
      height: 54vh;
min-height: 475px;

    }
    #infoimg {
    background-image: url(../images/laptopv2.png);
  }
  </style>
  <div class="homeImage">
<div class="title-container">
<h1 class="title">{{$post->site_header}}</h1>

</div>

  </div>
<div class="container">
    <div class="row" style="height: 100vh;    min-height: 700px;">
      <div class="col-sm-7 col-md-5 center-align" id="main-text" style="
height: 100%;">
        <div class="center-align">
          <h2 class="Header-Home" style="margin-top:20px;">
                      {{$post->site_para_one_header}}
          </h2>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->site_para_one_sub_header_1}}
            </h3>
            <p>
                            {{$post->site_para_one_text_1}}
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->site_para_one_sub_header_2}}
            </h3>
            <p>
                          {{$post->site_para_one_text_2}}
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->site_para_one_sub_header_3}}
            </h3>
            <p>
                              {{$post->site_para_one_text_3}}
            </p>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-sm-offset-1 col-md-6 whatson">
        <div class="info-img info" id="infoimg">

        </div>
      </div>
</div>
<div class="container">
    <div class="row" style="height: 100vh; ">
      <div class="col-sm-4">
        <div class="card center-align">
          <div class="card-block">
            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card center-align">
          <div class="card-block">
            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card center-align">
          <div class="card-block">
            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
</div>
</diV>
</div>
  @endif




<div class="jumbotron">
      <div class="container">
        <p class="subtitle" stlye="color: white;">  {{$post->footer_small_text}}</p>
        <h3 class="Deal">  {{$post->footer_big_text}}</h3>
        <a href="#"><div class="plans-button deal-button">
        <h1 class="title plans-button-link">Learn more</h1>
        </div></a>

      </div>
    </div>

@endsection
