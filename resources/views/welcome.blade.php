<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta content="" name="description">
      <meta content="" name="keywords">

        <title>TravelGo</title>

        <link rel="shortcut icon" href="/img/logo.png" type="image/png">
      

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/css/style1.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- main template CSS-->
        <!--<link rel="stylesheet" href="/css/style.css">-->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}


    .btn {
      border: 1px solid #fff;
    }

    ul.social-buttons {
      color: gray;
    }

    ul.social-buttons li a {
      font-size: 20px;
      line-height: 50px;
      display: block;
      width: 50px;
      height: 50px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      color: white;
      border-radius: 100%;
      outline: none;
      background-color: #f1611f;
    }
           
        </style>

    </head>
    <body>
       <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>TravelGo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<a href="index.html"><img src="/img/logo_tg.png" alt="" class="img-fluid"></a>-->
      </div>

      <!--<nav class="nav-menu d-none d-lg-block">-->
      <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
          @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  <a href="#" class="text-sm text-gray-700">Home</a>
                  <a href="#" class="ml-4 text-sm text-gray-700">About Us</a>
                  <a href="#" class="ml-4 text-sm text-gray-700">Contact Us</a>
                  @auth
                      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-900">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="ml-4 scrollto text-sm text-gray-900">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm  get-started">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Travel Go - Dukung Kemajuan Pariwisata Balikpapan</h1>
        <h2>Website Sistem Informasi Pariwisata Balikpapan</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="/img/trv_bg.png" class="img-fluid animated" alt="" >
      </div>
    </div>
  </div>
  </section>

  <br>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src="/img/traveling.png" alt="">
        </div>
        <div class="col-md-7" style="padding: 80px">
          <h2>Travel Go</h2>
          <p>Travel Go merupakan website yang menyediakan informasi mengenai 
            pariwisata di Balikpapan. Hal ini bertujuan untuk meningkatkan sektor pariwisata yang ada di Balikpapan
          </p>

        </div>
      </div>
    </div>
  </section>

<section style="background-color: #fff6f1">
    <div class="col">
      <center>
        <h2>Contact Us</h2>
        <p>Contact Us to Get Started</p>
      </center>
      </div>
      <div class="row">
      <div class="col">
        <center>
          <img width="80%" src="" alt="" class="rounded-circle">
          <h3>Travel Go</h3>
          <div class="col md-4">
            <p style="text-align: justify">Travel Go merupakan website yang menyediakan informasi mengenai 
              pariwisata di Balikpapan. Hal ini bertujuan untuk meningkatkan sektor pariwisata yang ada di Balikpapan</p>
          </div>
          <ul class="list-inline social-buttons text-center mt 5">
            <li class="list-inline-item"> 
              <a href="https://www.facebook.com" target="_blank">
              <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item"> 
              <a href="https://www.instagram.com" target="_blank">
              <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item"> 
              <a href="https://www.twitter.com" target="_blank">
              <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item"> 
              <a href="https://www.google.com" target="_blank">
              <i class="fab fa-google"></i>
              </a>
            </li>
          </ul>
        </center>
      </div>

      <div class="col">
        <center>
          <h3>Contact </h3>
          <p>
              Jl. Ahmad Yani <br>
              Balikpapan, Kaltim 535022<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> sportave@gmail.com<br>
          </p>
        </center>
      </div>

        <div class="col">
          <center>
            <img width= 80% src="" alt="" class="rounded-circle">
            <h3>Maps</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8707009781597!2d116.833633813947!3d-1.248781999089157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147072e33d7e9%3A0x69d39cc1dd4ba54b!2sJl.%20Ahmad%20Yani%2C%20Karang%20Rejo%2C%20Kec.%20Balikpapan%20Tengah%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur!5e0!3m2!1sen!2sid!4v1622797296720!5m2!1sen!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </center>
        </div>
    </div>
</section>
<footer>
  <div class="text-center p-3">
    &copy; 2021 Copyright TravelGo Team
  </div>
</footer>  
  

    <!-- template main js -->
    <script src="/js/script.js"></script>
    <script src="/js/main.js"></script>


    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Vendor JS Files -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/venobox/venobox.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/vendor/aos/aos.js"></script>

  

    </body>
</html>
