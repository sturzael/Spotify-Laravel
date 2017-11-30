{{-- <div class="head">
  <div class="headContainer">
    <h1 class="homeh1">Laravel | @yield('title')</h1>
    <div class="links">
        <li><a href="/">Home</a></li>
      <li><a href="{{route('blog.index')}}">Blog</a></li>
        <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>

            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest

    </div>
    @yield('links')
  </div>

</div> --}}
<div class="top-banner">
  <div class="inner-container-top-banner">
    <div class="wrapper-banner">
      <ul class="left">

      </ul>
      <ul class="right">
        <li><a class="account-link" tabindex="2" href="/en-us/home/my-account"><i class="fa fa-user a-icon"></i><span class="a-text">Login </span></a></li>
      </ul>
    </div>

  </div>
</div>
<div class="main-nav" id="pagetop">
  <div class="inner-container-nav">
    <div class="wrapper-banner">
      <div class="nav-logo left main-absolute">

      </div>
      <ul class="right main-absolute">
        <li class="center-align"><a class="account-link"  tabindex="2" href="/en-us/home/my-account"><span id="menu-item" class="a-text">Premium </span></a></li>
      </ul>
    </div>
  </div>

</div>
