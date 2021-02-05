<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ViewLife</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

    <link rel="stylesheet" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/icofont/icofont.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/boxicons/css/boxicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/remixicon/remixicon.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/venobox/venobox.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/owl.carousel/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/aos/aos.css")}}">

    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/opstyle.css')?>">

  
  <!-- =======================================================
  * Template Name: OnePage - v2.2.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo mr-auto"><a href="{{ url('/') }}">ViewLife</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            
            <li class="drop-down"><a href="">เมนู</a>
              <ul>
                <li><a href="http://127.0.0.1:8000/search">ค้นหาแผนประกัน</a></li>
                <li><a href="/page/nlist">ข้อมูลข่าวสาร</a></li>
                <li><a href="/calinsure">คำนวณเบี้ยประกัน</a></li>
              </ul>
            </li>

            @guest
                <li class="nav-item">
                    <a class="nav-item" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="drop-down">
                        <a class="drop-down" href="{{ route('register') }}">{{ __('ลงทะเบียน') }}</a>
                    </li>
                @endif
            @else
                <li class="drop-down">
                    <a href="/administrator" role="button" data-toggle="dropdown" aria-haspopup="true" v-pre>
                        {{ Auth::user()->username }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="/administrator">หน้าแอดมิน</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('ออกจากระบบ') }}
                        </a>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->

    
    
    <main class="py-4">
        @yield('content')
    </main>
  

    
    <!-- ======= Footer ======= -->
    <footer id="footer">
  
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>ViewLife</h3>
              <p>
                36/572 Pruksa 12/1 <br>
                Wall Maria, Trost section 12120<br>
                Eldia, Paradis Island <br><br>
                <strong>Phone:</strong> 088-222-xxxx<br>
                <strong>Email:</strong> 1160109050881@mail.ac.th<br>
              </p>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>หน้าผู้ใช้งาน</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="http://127.0.0.1:8000/search">ค้นหาเบี้ยประกัน</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/page/nlist">ข้อมูลข่าวสาร</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/calinsure">คำนวณเบี้ยประกัน</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>คณะกรรมการ</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ดร.พิทยา พุ่มพวง</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ดร.จุฬาลักษณ์ วัฒนานนท์</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ผศ.เมธา ศิริกูล</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">อ.สิริณา ช่วยเต็ม</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">อ.ปิยนันท์ </a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">อ.ประภาส ทองรัก</a></li>
              </ul>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>สมัครรับข่าวสาร</h4>
              <p>ข้อมูลแผนประกันชีวิตเพื่อการสะสมทรัพย์ จากบริษัทชั้นนำของประเทศไทย</p> 
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="สมัครรับข้อมูล">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container d-md-flex py-4">
  
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span>ViewLife</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
  
  
    <!-- Template Main JS File -->
    
    <script src="{{asset('js/main.js')}}"></script>
  
  </body>

</html>