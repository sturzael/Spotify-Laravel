<?php
  $id = preg_replace('/[^1-2]/', '',url()->current());
  if ($id == false) {
    $id = 1;

   }?>
<div class="top-banner">
  <div class="inner-container-top-banner">
    <div class="wrapper-banner">
      <ul class="left">

      </ul>
      <ul class="right">
          @guest
        <li><a class="account-link" tabindex="2" href="{{ route('login') }}"><i class="fa fa-user a-icon"></i><span class="a-text">Login </span></a></li>

      @else

        <li><a class="account-link" id="back" tabindex="2" href="{{ route('home') }}"><span class="a-text">Back</span></a></li>
          <li><a class="account-link" tabindex="2" href="/identity/1/edit"><span class="a-text">Control Panel </span></a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" style="text-align:center;">
                  <li style="float:none;">
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" style="color:black;">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>

              </ul>

          </li>

      @endguest
      </ul>
    </div>

  </div>
</div>
<div class="main-nav" id="pagetop">
  <div class="inner-container-nav">
    <div class="wrapper-banner">
      <a href="{{ route('home') }}">
      <div class="nav-logo left main-absolute">

      </div>
      </a>
      <ul class="right main-absolute">
        <li class="center-align"><a class="account-link"  tabindex="2" href="/blog/2"><span id="menu-item" class="a-text">{{  $identity->page_name}}</span></a></li>
      </ul>
    </div>
  </div>

</div>
