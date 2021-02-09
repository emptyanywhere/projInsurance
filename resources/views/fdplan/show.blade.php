<DOCTYPE! html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/favicon.png" rel="icon">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/show.css')?>">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="{{asset('js/show_product.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 

    

    <script src="https://kit.fontawesome.com/bc08b5fff6.js" crossorigin="anonymous"></script> <!-- https://fontawesome.com/ -->

    <script src="https://use.fontawesome.com/c6c576ba33.js"></script> <!-- https://fontawesome.com/v4.7.0/icons/ -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

</html>

@extends('layouts.app')
@section('content')

    <!-- ======= รายละเอียดแผนประกันแบบกลุ่ม ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>แผนประกัน</h2>
          </div>
  
            <div class="container v">
                <div class="form-group">
                    <div class="form-group-text">
                        <h3 style="color: rgb(33, 125, 179);">{{$fdplan->p_name}}</h3>
    
                        <div class="pay-pro">
                            <p>จ่ายเบี้ยประกัน {{$fdplan->pay_ins_pre}} ปี &nbsp; &nbsp; ความคุ้มครอง {{$fdplan->protection}} ปี</p>
                        </div><br>
    
                        <div class="brand">
                            <h4>{{$fdplan->p_brand}}</h4>
                        </div>
        
                        <div class="descript">
                            <p>{{$fdplan->p_descript}}</p>
                        </div>
    
                        <br><h4>ข้อมูลแบบประกัน</h4><br><br>

                        <div class="icon-text">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fa fa-user fa-3x" aria-hidden="true"></i><br><br>
                                        <label>อายุรับประกัน</label>
                                        <p>{{$fdplan->insurer_age}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-hand-holding-usd fa-3x"></i><br><br>
                                        <label>รับเงินจ่ายคืน</label>
                                        <p>{{$fdplan->annuity}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-coins fa-3x"></i><br><br>
                                        <label>เงินปันผล</label>
                                        <p>{{$fdplan->bonus}}</p>
                                    </div>
                                </div>
                            </div><br>
        
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-funnel-dollar fa-3x"></i><br><br>
                                        <label>สิทธิลดหย่อนภาษี</label>
                                        <p>{{$fdplan->tax_break}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-file-contract fa-3x"></i><br><br>
                                        <label>การซื้อสัญญาเพิ่มเติม</label>
                                        <p>{{$fdplan->add_contract}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-notes-medical fa-3x"></i><br><br>
                                        <label>การตรวจสุขภาพ</label>
                                        <p>{{$fdplan->health_ck}}</p>
                                    </div>
                                </div>
                            </div><br>
        
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-comments-dollar fa-3x"></i><br><br>
                                        <label>เงินเอาประกันภัยขั้นต่ำ</label>
                                        <p>{{$fdplan->min_amount}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="fas fa-receipt fa-3x"></i><br><br>
                                        <label>รูปแบบการชำระเบี้ยประกัน</label>
                                        <p>{{$fdplan->pay_ip_type}}</p>
                                    </div>
                                </div>
        
                                <div class="col-6 col-md-4">
                                    <div class="item">
                                        <i class="far fa-credit-card fa-3x"></i><br><br>
                                        <label>วิธีการชำระเบี้ยประกัน</label>
                                        <p>{{$fdplan->pay_method}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="logo">
                        <!-- <img src="{{$fdplan->p_image}}" height=150 width=150> -->
                        <img src="<?php echo asset("images/logo/{$fdplan->p_image}")?>" height=150 width=150>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End รายละเอียดแผนประกันแบบกลุ่ม Section -->

    <!-- ======= รูปภาพผลประโยชน์ความคุ้มครอง ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
            <div class="section-title">
                <h2>ผลประโยชน์ความคุ้มครอง</h2>
            </div>
  
            <div class="benefits">
                <center><img src="<?php echo asset("images/benefits/{$fdplan->policy_ben_pic}")?>" width="100%"></center>
            </div>
    
        </div>
    </section><!-- End Testimonials Section -->

    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>นโยบายของบริษัทต่อแผนประกัน</h2>
            <center><p>รายละเอียดที่แนบมากับแผนประกันจำเป็นต้องศึกษาก่อนตัดสินใจทำแผนประกัน</p></center>
          </div>
  
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">หมายเหตุ<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    {{$fdplan->note}}
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">ข้อยกเว้นความคุ้มครอง<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    {{$fdplan->exclusion_cov}}
                  </p>
                </div>
              </li>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->


@endsection