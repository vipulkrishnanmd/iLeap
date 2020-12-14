<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iLeapMe</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animsition.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <header class="templateux-navbar" data-aos="fade-down">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-3"><div class="site-logo"><a href="/" class="animsition-link">iLeapMe</a></div></div>
          <div class="col-sm-9 col-9 text-right">

            <button class="hamburger hamburger--spin toggle-menu ml-auto js-toggle-menu" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>  

            <nav class="templateux-menu js-templateux-menu" role="navigation">
              <ul class="list-unstyled">
		            <li><a href="/" class="animsition_link">Home</a></li>
                <li><a href="/url" class="animsition-link">Check URL</a></li>
                <li><a href="/services" class="animsition-link">Find Services</a></li>
                <li><a href="/map" class="animsition-link">Find iLocations</a></li>
                <li><a href="/chat" class="animsition-link">Hotline</a></li>
		            <li><a href="/info" class="animsition-link">Learn to Use</a></li>
                <li><a href="/about" class="animsition-link">About</a></li>
              </ul>
            </nav>  
          </div>
        </div>
      </div>
    </header>

        <div>
            @yield('content')
        </div>
    </div>
    <a class="templateux-section templateux-cta animsition-link mt-5" href="{{url('/info')}}" data-aos="fade-up">
      <div class="container-fluid">
        <div class="cta-inner">
          <h2><span class="words-1">See our tools which would help you</span> <span class="words-2">Find out How to Use</span></h2>
        </div>
      </div>
    </a>
    <!-- END call to action -->

    <footer class="templateux-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
          <div class="col-md-6 text-md-right text-center footer-social">
            Thank you :)
          </div>
        </div>
      </div>
    </footer>


  </div>
<script src="{{asset('js/scripts-all.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
  
  </body>
</html>
