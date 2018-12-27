

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ url('assets/images/xx.png') }}">
  <meta name="description" content="">
  <title>
    ventiX</title>
  <link rel="stylesheet" href="{{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ url('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ url('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

  <style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
    body {
        font-family: 'Open Sans', sans-serif;
    }

    .popup-box-on {
        display: block !important;
    }
    .off {
        display: none;
    }
    .chat_box .chat_message_wrapper ul.chat_message > li + li {
        margin-top: 4px;
    }

    #search.open {
        opacity: 1;
        transform: translate(0px, 0px) scale(1, 1);
    }
    #search {
        background-color: #fff;
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        transition: all 0.5s ease-in-out 0s;
        width: 100%;
        z-index: 2000;
        
    }
    #search .close {
        color: #be5254;
        font-size: 40px;
        opacity: 1;
        padding: 10px 17px;
        position: fixed;
        right: 15px;
        top: 15px;
    }
    button.close {
        background: transparent none repeat scroll 0 0;
        border: 0 none;
        cursor: pointer;
    }
    .close {
        float: right;
        font-weight: bold;
        line-height: 1;
        text-shadow: 0 1px 0 #fff;
    }

    #search input[type="text"] {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: 0 none;
        color: #333;
        font-family: "Open Sans",sans-serif;
        font-size: 50px;
        font-weight: 300;
        margin: -51px auto 0;
        outline: medium none;
        padding-left: 30px;
        padding-right: 30px;
        position: absolute;
        text-align: center;
        top: 50%;
        width: 100%;
    }
    #search .btn {
        left: 50%;
        margin-top: 60px;
        padding: 10px 50px;
        position: absolute;
        top: 50%;
        transform: translateX(-50%);
    }
    .s-icon a {
        background: #fff none repeat scroll 0 0 !important;
        border-radius: 40px !important;
        color: #be5254 !important;
        font-size: 26px;
        height: 44px;
        margin: 3px -12px 0 0;
        padding: 7px 0 0 !important;
        text-align: center;
        width: 44px;
    }
    .btn-lg, .btn-group-lg > .btn {
        border-radius: 153px;
        font-size: 29px;
    }
    .btn-site {
        background: #be5254 none repeat scroll 0 0;
        color: #fff !important;
    }
  </style>

  @yield('style')
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
          <div class="navbar-brand">
            <span class="navbar-logo">
              <a href="{{ url('/') }}">
                <img src="assets/images/logo2.png" alt="event" style="height: 3.8rem;">
                  </a>
            </span>
              <span class="navbar-caption-wrap">
                <a class="navbar-caption text-white display-4" href="{{ url('/') }}">ventiX</a>
              </span>
          </div>
        </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-white display-4" href="#"></a>
              </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="{{ url('/add-event') }}">Add Event</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" id="addClass"><span class="" style="font-size: 30px;">Search</span></a>        
                </li>
            </ul>
            @if (Route::has('login'))
            @auth
            <div class="navbar-buttons mbr-section-btn">
              <a class="btn btn-sm btn-primary display-4" href="@if(Auth::user()->role == 'admin') {{ url('/admin') }} @else {{ route('logout') }} @endif" @if(Auth::user()->role != 'admin') onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" @endif>
                    <span class=" mbr-iconfont mbr-iconfont-btn">Hello, {{ Auth::user()->name }}</span>
              </a>
            </div>
            @if(Auth::user()->role != 'admin')
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endif
            @else
            <div class="navbar-buttons mbr-section-btn">
              <a class="btn btn-sm btn-primary display-4" href="{{ route('login') }}">
                    <span class=" mbr-iconfont mbr-iconfont-btn">Login</span>
                </a>
            </div>
            <div class="navbar-buttons mbr-section-btn">
              <a class="btn btn-sm btn-primary display-4" href="{{ route('register') }}">
                    <span class=" mbr-iconfont mbr-iconfont-btn">Register</span>
                </a>
            </div>
            @endauth
            @endif
        </div>
    </nav>
</section>

<div id="qnimate" class="off">
    <div id="search" class="open">
    <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
    <form action="{{ url('/search') }}" method="get" autocomplete="off">
      <input type="text" placeholder="Type search keywords here" value="" name="q" id="term">
      <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
    </div>
</div>

<section class="engine"><a href="https://ventix.com"></a></section><section class="features18 popup-btn-cards cid-rcv2g7Onfg" id="features18-4">

    <div class="container">

        @yield('content')

    </div>

</section>

<section class="cid-qTkAaeaxX5" id="footer1-2">
  <div id="about">
  
  </div>
  <div class="container">
    <div class="media-container-row content text-white">
      <div class="col-12 col-md-3">
        <div class="media-wrap">
          <a href="https://ventix.com/">
            <img src="assets/images/logo2.png" alt="event">
              </a>
        </div>
      </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
          <h5 class="pb-3">Address</h5>
            <p class="mbr-text">Bandung, Jawa Barat</p>
        </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
          <h5 class="pb-3">Contacts</h5>
            <p class="mbr-text">Email: ventix@yahoo.com
              <br>Phone: +62 821-270-21001
            </p>
        </div>
      </div>
        <div class="footer-lower">
          <div class="media-container-row">
            <div class="col-sm-12">
              <hr>
            </div>
          </div>
            <div class="media-container-row mbr-white">
              <div class="col-sm-6 copyright">
                <p class="mbr-text mbr-fonts-style display-7">© Copyright 2018 - Teknik Informatika UIN BDG</p>
              </div>
      <div class="col-md-6">
        <div class="social-list align-right">
          <div class="soc-item">
            <a href="https://twitter.com/ventix" target="_blank">
              <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://instagram.com/ventix" target="_blank">
              <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="https://plus.google.com/u/0/+ventix" target="_blank">
              <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <script src="{{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/popper/popper.min.js') }}"></script>
  <script src="{{ url('assets/tether/tether.min.js') }}"></script>
  <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ url('assets/mbr-popup-btns/mbr-popup-btns.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>

  <script>
    $(function(){
    $("#addClass").click(function () {
      $('#qnimate').addClass('popup-box-on');
        });
      
        $("#removeClass").click(function () {
      $('#qnimate').removeClass('popup-box-on');
        });
    });
  </script>

  @yield('script')
</body>
</html>