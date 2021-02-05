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

            @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                        <a href="{{ url('/home') }}">ระบบแอดมิน</a>
                    @else
                        <a href="{{ route('login') }}">เข้าสู่ระบบ</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ลงทะเบียน</a>
                        @endif
                    @endauth
                </li>
            @endif
  
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Life Insurance</h1>
            <h2>ค้นหาแผนประกันที่เหมาะสมกับคุณได้ที่นี่</h2>
          </div>
        </div>
        <div class="text-center">
          <a href="http://127.0.0.1:8000/search" class="btn-get-started scrollto">Search</a>
        </div>
  
        <div class="row icon-boxes">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title"><a href="http://127.0.0.1:8000/search">ค้นหาแผนประกัน</a></h4>
              <p class="description">ค้นหาแบบประกันชีวิตเพื่อการสะสมทรัพย์ ผ่านการกรอกเงื่อนไขของผู้ใช้งาน เช่น อายุ รายได้สุทธิต่อปีและอื่นๆ</p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="ri-article-line"></i></div>
              <h4 class="title"><a href="/page/nlist">ข้อมูลข่าวสาร</a></h4>
              <p class="description">ข้อมูลข่าวสาร ความรู้ที่เกี่ยวกับแผนประกันในหลากหลายประเภท จากเว็บไซต์บทความคุณภาพต่างๆ</p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="ri-calculator-line"></i></div>
              <h4 class="title"><a href="/calinsure">คำนวณเบี้ยประกัน</a></h4>
              <p class="description">วางแผนการเงินก่อนทำแผนประกันง่ายๆ จากการทดลองคำนวณ</p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="ri-contacts-line"></i></div>
              <h4 class="title"><a href="">ช่องทางติดต่อ</a></h4>
              <p class="description">ช่องทางการติดต่อสำหรับปรึกษาด้านการเขียนโปรแกรมโดยใช้ ภาษา PHP ด้วย Laravel framework</p>
            </div>
          </div>
  
        </div>
      </div>
    </section><!-- End Hero -->
  
    <main id="main">
  
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>About Us</h2>
            <p>โปรเจคนักศึกษาชั้นปีที่ 4 สาขาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี </p>
          </div>
  
          <div class="row content">
            <div class="col-lg-6">
              <p>
                วัตถุประสงค์ ระบบสนับสนุนการตัดสินใจซื้อแบบประกันเพื่อการสะสมทรัพย์ มีดังนี้
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> พัฒนาเว็บแอปพลิเคชั่นใช้ค้นหาแผนประกันที่เหมาะสมตามเงื่อนไขผู้ใช้</li>
                <li><i class="ri-check-double-line"></i> พัฒนาเว็บแอปพลิเคชั่นที่สามารถรายงานข่าวสารเกี่ยวกับแผนประกัน<br>ผ่านบทความจากหลากหลายเว็บไซต์</li>
                <li><i class="ri-check-double-line"></i> พัฒนาเว็บแอปพลิเคชั่นที่สามารถคำนวณเบี้ยประกันเพื่อความสะดวกในการวางแผนการทำประกันของผู้ใข้งาน</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                ภาษาที่ใช้พัฒนาเว็บแอปพลิเคชั่นคือ ภาษา PHP เวอรชั่น 7 เฟรมเวิร์คที่ใช้ Laravel เวอร์ชั่น 7, database ทดลองผ่าน phpmyadmin, 
                โปรแกรมที่ใช้จำลอง server คือ XAMPP version 3.2.4, ระบบปฏิบัติการ Windows 10 Pro 64bit, เทมเพลตที่ใช้คือ Bootstrapmade,
                package bootstrap version 4, sweetalert, jquery, fontawesome และอื่นๆ 
              </p>
              <a href="#" class="btn-learn-more">อ่านเพิ่มเติม</a>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
  
      <!-- ======= Services Section ======= -->
      <!--
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Sevices</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx bxl-dribbble"></i>
                </div>
                <h4><a href="">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="">Sed Perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                  </svg>
                  <i class="bx bx-tachometer"></i>
                </div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-yellow">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-red">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                  </svg>
                  <i class="bx bx-slideshow"></i>
                </div>
                <h4><a href="">Dele Cardo</a></h4>
                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-teal">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                  </svg>
                  <i class="bx bx-arch"></i>
                </div>
                <h4><a href="">Divera Don</a></h4>
                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Sevices Section -->

  
    </main><!-- End #main -->
  
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
                <li><i class="bx bx-chevron-right"></i> <a href="#">ดร.พิทยา พุ่มพวง (อ.ที่ปรึกษา)</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ดร.จุฬาลักษณ์ วัฒนานนท์</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">ผศ.เมธา ศิริกูล</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">อ.สิริณา ช่วยเต็ม</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">อ.ปิยนันท์ เทียบศรไชย</a></li>
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