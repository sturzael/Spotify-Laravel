@extends('layouts.master')
@section('title','Home')
@section('description', 'this is a blog post')
@section('content')
  <div class="homeImage">
<div class="title-container">
<h1 class="title">One Account.<br>Listen Everywhere.</h1>
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
                          What’s on Spotify?
            </h2>
            <div class="animated animatedFadeInUp fadeInUp">
              <h3 class="sub-header">
                              Music
              </h3>
              <p>
                              There are millions of songs on Spotify. Play your favorites, discover new tracks, and build the perfect collection.
              </p>
            </div>
            <div class="animated animatedFadeInUp fadeInUp">
              <h3 class="sub-header">
                              Playlists
              </h3>
              <p>
                              You’ll find readymade playlists to match your mood, put together by music fans and experts.
              </p>
            </div>
            <div class="animated animatedFadeInUp fadeInUp">
              <h3 class="sub-header">
                              New Releases
              </h3>
              <p>
                              Hear this week’s latest singles and albums, and check out what’s hot in the Top 50.
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
                It's easy.
      </h2>
      <div>
        <h3 class="sub-header white">
                      Search
        </h3>
        <p class="white">
                        Know what you want to listen to? Just search and hit play.
        </p>
      </div>
      <div >
        <h3 class="sub-header white">
                        Browse
        </h3>
        <p class="white">
                        Check out the latest charts, brand new releases and great playlists for right now.
        </p>
      </div>
      <div>
        <h3 class="sub-header white">
                       Discover
        </h3>
        <p class="white">
                        Enjoy new music every Monday with your own personal playlist. Or sit back and enjoy Radio.
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
{{-- <div class="deal-container">


<div class="container center-align">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h1>Get Spotify for 2  months for just $2.45¯</h1>
    </div>
  </div>
</div>
</div> --}}


<div class="jumbotron">
      <div class="container">
        <p class="subtitle" stlye="color: white;">Spotify is available on PlayStation™Music.</p>
        <h3 class="Deal">2 months of Spotify Premium for just $2.45.</h3>
        <a href="#"><div class="plans-button deal-button">
        <h1 class="title plans-button-link">Learn more</h1>
        </div></a>

      </div>
    </div>

@endsection
