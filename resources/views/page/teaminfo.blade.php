<DOCTYPE! html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/favicon.png" rel="icon">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/result.css')?>"> 
</head>

</html>

@extends('layouts.app')
@section('content')

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>ผู้พัฒนาโปรเจคหวังเป็นอย่างยิ่งว่าผลงานชิ้นนี้สามารถ นำไปประยุกต์ในการทำงานในชีวิตจริงหรือเป็นพื้นฐานในการศึกษาต่อในเรื่องเขียนโปรแกรมต่อไปได้ ตลอดจนนำไปต่อยอดให้เป็นเว็บ&emsp;&emsp;&emsp;แอปพลิเคชั่นที่สามารถนำไปใช้งานได้จริง</p>
        <br><p>ขอบคุณรูปภาพจาก www.marvel.com/characters</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo asset("images/team/061ult_ons_crd_01-1.jpg")?>" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>นายฏิญ เต็มดวง</h4>
              <span>นักศึกษาวิทยาการคอมพิวเตอร์</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo asset("images/team/105vat_ons_crd_01_0.jpg")?>" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>นายปภินวิทย์ เรียนกีรติกร</h4>
              <span>นักศึกษาวิทยาการคอมพิวเตอร์</span>
            </div>
          </div>
        </div>

      </div><br><br><br>

      <div class="section-title">
        <h2>Consultant</h2>
        <p>อาจารย์ภายในคณะวิทยาศาสตร์และเทคโนโลยีสารสนเทศ</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo asset("images/team/019tha_ons_crd_03.jpg")?>" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>ดร.พิทยา พุ่มพวง</h4>
              <span>อาจารย์ที่ปรึกษาโปรเจค/อาจารย์ที่ปรึกษา</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Team Section -->

@endsection