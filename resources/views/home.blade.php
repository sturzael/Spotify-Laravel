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
      <div class="row">
        <div class="col-sm-7 col-md-5" id="main-text">
          <h2 class="animated animatedFadeInUp fadeInUp">
                        What’s on Spotify?
          </h2>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3>
                            Music
            </h3>
            <p>
                            There are millions of songs on Spotify. Play your favorites, discover new tracks, and build the perfect collection.
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3>
                            Playlists
            </h3>
            <p>
                            You’ll find readymade playlists to match your mood, put together by music fans and experts.
            </p>
          </div>
          <div class="animated animatedFadeInUp fadeInUp">
            <h3>
                            New Releases
            </h3>
            <p>
                            Hear this week’s latest singles and albums, and check out what’s hot in the Top 50.
            </p>
          </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1 col-md-6">
          <div class="info-img info" id="infoimg">

          </div>
        </div>
  {{-- <div class="info-container">
    <div class="info-text info">
      <div class="info-box">
        <h2 class="info-header">Music</h2>
        <p class="info-content">There are millions of songs on Spotify. Play your favorites, discover new tracks, and build the perfect collection.</p>
      </div>
      <div class="info-box">
        <h2 class="info-header">Playlists</h2>
        <p class="info-content">You’ll find readymade playlists to match your mood, put together by music fans and experts.</p>
      </div>
      <div class="info-box">
        <h2 class="info-header">New Releases</h2>
        <p class="info-content">Hear this week’s latest singles and albums, and check out what’s hot in the Top 50.</p>
      </div>

    </div>



  </div> --}}


@endsection
