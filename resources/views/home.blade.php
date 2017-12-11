@extends('layouts.master')
@section('title',$identity->Title)
@section('description', $identity->Meta_Desc)
@section('content')

  @if ($post->id === 1)
    <style type="text/css">
      .homeImage{

  background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../images/uploads/{{$images->home_image}}.jpg)no-repeat center;
  background-position: center;
  background-size: cover;

      }
      #infoimg {
      background-image: url(../images/uploads/{{$images->block1_image}}.jpg);
    }
    #outline{
      background-image: url(../images/uploads/{{$images->block2_image}}.png);
    }

    </style>
    <div class="homeImage">
  <div class="title-container">
  <h1 class="title">{{$post->header}}</h1>
  <a href="blog/2"><div class="plans-button">
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
                          {{$post->para_one_header}}
              </h2>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->para_one_sub_header_1}}
                </h3>
                <p>
                                {{$post->para_one_text_1}}
                </p>
              </div>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->para_one_sub_header_2}}
                </h3>
                <p>
                              {{$post->para_one_text_2}}
                </p>
              </div>
              <div class="animated animatedFadeInUp fadeInUp">
                <h3 class="sub-header">
                                {{$post->para_one_sub_header_3}}
                </h3>
                <p>
                                  {{$post->para_one_text_3}}
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
        <h2 class="Header-Home invert">
                  {{$post->para_two_header}}
        </h2>
        <div>
          <h3 class="sub-header white">
                        {{$post->para_two_sub_header_1}}
          </h3>
          <p class="white invert">
                            {{$post->para_two_text_1}}
          </p>
        </div>
        <div >
          <h3 class="sub-header white">
                            {{$post->para_two_sub_header_2}}
          </h3>
          <p class="white invert">
                            {{$post->para_two_text_2}}
          </p>
        </div>
        <div>
          <h3 class="sub-header white">
                          {{$post->para_two_sub_header_3}}
          </h3>
          <p class="white invert">
                          {{$post->para_two_text_3}}
          </p>
      </div>

    </div>
      </div>




          </div>

          <div class="container">
              <div class="row plansrow">
                <div class="col-sm-4 colcard">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">{{$plans->plan_name}}</h3>
                      <p class="card-text">${{$plans->plan_price}} Per Month</p>
                      <hr>
                      <ul class="ulspec">


                      <li>Shuffle Play</li>
                      <li class="disabled">Ad free</li>
                      <li class="disabled">Unlimited skips</li>
                      <li class="disabled">Listen offline</li>
                      <li class="disabled">Play any track</li>
                      <li class="disabled">High quality </li>
                      </ul>
                      <hr>
                      <a href="blog/2" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 colcard">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">{{$plans->plan_name2}}</h3>
                      <p class="card-text">${{$plans->plan_price2}} Per Month</p>
                      <hr>
                      <ul class="ulspec">


                      <li>Shuffle Play</li>
                      <li>Ad free</li>
                      <li>Unlimited skips</li>
                      <li class="disabled">Listen offline</li>
                      <li class="disabled">Play any track</li>
                      <li class="disabled">High quality </li>
                      </ul>
                      <hr>
                      <a href="blog/2" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 colcard">
                  <div class="card center-align">
                    <div class="card-block">
                      <h3 class="card-title">{{$plans->plan_name3}}</h3>
                      <p class="card-text">${{$plans->plan_price3}} Per Month</p>
                      <hr>
                      <ul class="ulspec">


                      <li>Shuffle Play</li>
                      <li>Ad free</li>
                      <li>Unlimited skips</li>
                      <li>Listen offline</li>
                      <li>Play any track</li>
                      <li>High quality </li>
                            </ul>
                      <hr>
                      <a href="blog/2" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
          </div>
        </diV>
        <div class="jumbotron">
              <div class="container">
                <p class="subtitle invert" >  {{$post->footer_small_text}}</p>
                <h3 class="Deal invert">  {{$post->footer_big_text}}</h3>
                <a href="blog/2"><div class="plans-button deal-button">
                <h1 class="title plans-button-link">Learn More</h1>
                </div></a>

              </div>
            </div>


 @elseif ($post->id === 2)
  <style type="text/css">
    .homeImage{
      height: 54vh;
min-height: 475px;
background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../images/uploads/page.jpg)no-repeat center;
background-position: center;
background-size: cover;

    }
    #infoimg {
    background-image: url(../images/uploads/{{$images->block3_image}}.jpg);
  }
  #outline{
    background-image: url(../images/uploads/{{$images->block4_image}}.png);
  }


  </style>
  <div class="homeImage">
<div class="title-container">
<h1 class="title">{{$post->header}}</h1>

</div>

  </div>
<div class="container">
    <div class="row" style="height: 100vh;    min-height: 700px;">
      <div class="col-sm-7 col-md-5 center-align" id="main-text" style="
height: 100%;">
        <div class="center-align">
          <h2 class="Header-Home" style="margin-top:20px;">
                      {{$post->para_one_header}}
          </h2>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->para_one_sub_header_1}}
            </h3>
            <p>
                            {{$post->para_one_text_1}}
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->para_one_sub_header_2}}
            </h3>
            <p>
                          {{$post->para_one_text_2}}
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3 class="sub-header">
                            {{$post->para_one_sub_header_3}}
            </h3>
            <p>
                              {{$post->para_one_text_3}}
            </p>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-sm-offset-1 col-md-6 whatson">
        <div class="info-img info" id="infoimg">

        </div>
      </div>
</div>
</div>
<div class="box-container-main">
  <div class="maintext-img" id="outline">

  </div>
  <div class="maintext-div">
    <div class="center-align col-sm-9 col-md-9 itseasy">
      <h2 class=" Header-Home invert">
                {{$post->para_two_header}}
      </h2>
      <div>
        <h3 class="sub-header white">
                      {{$post->para_two_sub_header_1}}
        </h3>
        <p class="white invert">
                          {{$post->para_two_text_1}}
        </p>
      </div>
      <div >
        <h3 class="sub-header white">
                          {{$post->para_two_sub_header_2}}
        </h3>
        <p class="white invert">
                          {{$post->para_two_text_2}}
        </p>
      </div>
      <div>
        <h3 class="sub-header white">
                        {{$post->para_two_sub_header_3}}
        </h3>
        <p class="white invert">
                        {{$post->para_two_text_3}}
        </p>
    </div>

  </div>
    </div>




        </div>


                  <div class="container">
                      <div class="row plansrow">
                        <div class="col-sm-4 colcard">
                          <div class="card center-align">
                            <div class="card-block">
                              <h3 class="card-title">{{$plans->plan_name}}</h3>
                              <p class="card-text">${{$plans->plan_price}} Per Month</p>
                              <hr>
                              <ul class="ulspec">


                              <li>Shuffle Play</li>
                              <li class="disabled">Ad free</li>
                              <li class="disabled">Unlimited skips</li>
                              <li class="disabled">Listen offline</li>
                              <li class="disabled">Play any track</li>
                              <li class="disabled">High quality </li>
                              </ul>
                              <hr>
                              <a href="https://accounts.spotify.com/en-US/login" class="btn btn-primary">Get Premium</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 colcard">
                          <div class="card center-align">
                            <div class="card-block">
                              <h3 class="card-title">{{$plans->plan_name2}}</h3>
                              <p class="card-text">${{$plans->plan_price2}} Per Month</p>
                              <hr>
                              <ul class="ulspec">


                              <li>Shuffle Play</li>
                              <li>Ad free</li>
                              <li>Unlimited skips</li>
                              <li class="disabled">Listen offline</li>
                              <li class="disabled">Play any track</li>
                              <li class="disabled">High quality </li>
                              </ul>
                              <hr>
                              <a href="https://accounts.spotify.com/en-US/login" class="btn btn-primary">Get Premium</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 colcard">
                          <div class="card center-align">
                            <div class="card-block">
                              <h3 class="card-title">{{$plans->plan_name3}}</h3>
                              <p class="card-text">${{$plans->plan_price3}} Per Month</p>
                              <hr>
                              <ul class="ulspec">


                              <li>Shuffle Play</li>
                              <li>Ad free</li>
                              <li>Unlimited skips</li>
                              <li>Listen offline</li>
                              <li>Play any track</li>
                              <li>High quality </li>
                                    </ul>
                              <hr>
                              <a href="https://accounts.spotify.com/en-US/login" class="btn btn-primary">Get Premium</a>
                            </div>
                          </div>
                        </div>
                  </div>
                </diV>


                <div class="jumbotron">
                      <div class="container">
                        <p class="subtitle invert" >  {{$post->footer_small_text}}</p>
                        <h3 class="Deal invert">  {{$post->footer_big_text}}</h3>
                        <a href="https://accounts.spotify.com/en-US/login"><div class="plans-button deal-button">
                        <h1 class="title plans-button-link">Get Premium</h1>
                        </div></a>

                      </div>
                    </div>

  @endif





@endsection
@section('styles')
  p{
    color:{{ $colours->text_colour }};
  }
  .Header-Home{
    color:{{$colours->header_colour}};
  }
  .box-container-main{
    background-color:{{$colours->block_colour}}
  }
  .jumbotron{
      background-color:{{$colours->deal_colour}}
  }
  .invert{
    color:{{$colours->oncolour_text_colour}}
  }

@endsection
