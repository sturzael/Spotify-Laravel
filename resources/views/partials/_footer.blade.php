
<div class="top-banner" id="footer">
  <div class="inner-container-top-banner">
    <div class="wrapper-banner">
      <ul class="left">

      </ul>
      <ul class="right">
          @guest
        <li><a class="account-link" tabindex="2" href="{{ route('login') }}"><i class="fa fa-user a-icon"></i><span class="a-text">Login </span></a></li>

      @else

        <li><a class="account-link" id="back" tabindex="2" href="{{ route('home') }}"><span class="a-text">Back</span></a></li>
          <li><a class="account-link" tabindex="2" href="/blog/1/edit"><span class="a-text">Control Panel </span></a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" style="text-align:center; bottom: 100%;top: unset;">
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
