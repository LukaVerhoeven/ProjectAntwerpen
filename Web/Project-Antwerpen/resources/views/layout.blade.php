<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../../css/toggle-switch.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script>
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
              document.write('<link  rel="stylesheet" href="/css/mobile-navigation.css">');
              document.write('<script src="/js/mobilenavigation.js"><\/script>');
          
          }
          </script>
        @yield('scripts')
    </head>
    <body>
      <div class="ContentDiv">
        <div class="navbar">
            <div class="navbar-header">
              <a class="navbar-left" id="leftfix" href="/overzicht"><img src="../../img/A_logo_RGB_123x123.jpg" alt="Logo antwerpen"/></a>
              <a class="navbar-left titelpage" href="/overzicht">Antwerpen Projecten</a>
              <a class="navbar-left titelpagemobile"   href="/overzicht">Projecten</a>
              <div class="nav navbar-btn navbar-right navbar-fixed-top navbar-toggle">
                  @if (Auth::guest())
                      <a id="loginicon" href="{{ url('/login') }}"><span class="fa fa-btn fa-sign-in icon-large" ></span></a>
                      <a id="registericon" href="{{ url('/register') }}"><span class="fa fa-btn fa-pencil" ></span></a>
                  @else
                      <a id="logouticon" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> </a>
                  @endif
              </div>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="fa fa-btn fa-sign-in" ></span> Login</a></li>
                    <li><a href="{{ url('/register') }}"><span class="fa fa-btn fa-pencil" ></span> Registreren</a></li>
                @else
                  <li id="welcome">Welkom,<a href="{{ url('/profiel') }}" id="account">{{ Auth::user()->firstname }}</a></li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                @endif
              </ul>
            </div>
        </div>
      @yield('navigation-layout')
      @yield('content')
      </div>
      <footer class="footer">
        <p>&copy Stad Antwerpen</p>
      </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
