<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('/web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('web/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('web/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('web/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('web/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="">
            <h1 class="mb-0 site-logo"><a href="" class="h4 mb-0">Origin Solutions<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#Our_Produts" class="nav-link">Our Products</a></li>
                
                <li><a href="#Our_Services" class="nav-link">Our Services</a></li>
             
                <li><a href="#contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    <section class="site-blocks-cover overflow-hidden" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row">
              <div class="col-lg-11">

                <h1> <span class="typed-words"></span></h1>

                <p></p>
				<br>
				<br>
				<br>
				<br>
				<br>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section> 

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12" style="margin-top: -20%;">
            <div class="slide-one-item home-slider owl-carousel">
              <img src="images/cover1.jpg" alt="Image" class="img-fluid img"style="height:400px;" >
              <img src="images/cover3.jpg" alt="Image" class="img-fluid img" style="height:400px;">
            </div>
          </div>
        </div>
      </div>
    </section>
  @yield('content')

    
    
    <footer class="site-footer bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">About Coaching</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem officiis dolorem assumenda alias mollitia reprehenderit dolor facilis.</p>
          </div>


          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
            <li><a href="#home-section" class="nav-link">Home</a></li>

                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#training-section" class="nav-link">Some Products</a></li>
                <li><a href="#blog-section" class="nav-link">Our Products </a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <div class="mb-5">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>

          </div>
        </div>

        <div class="row pt-5 mt-5 text-left">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                  class="icon-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/mohamad.dogmosh.9" target="_blank">Mohamad Do</a></p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>

      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('web/js/jquery-ui.js')}}"></script>
  <script src="{{asset('web/js/popper.min.js')}}"></script>
  <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('web/js/aos.js')}}"></script>
  <script src="{{asset('web/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('web/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
  
  <script src="{{asset('web/js/typed.js')}}"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: [" Origin Solutions", " WE THINK SOLUTIONS"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
  
  <script src="{{asset('web/js/main.js')}}"></script>

  </body>
</html>