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

    <!-- ======= ชื่อแผนประกัน ======= -->
    <section id="pricing" class="planinfo">
        <div class="container" data-aos="fade-up">
  
            <div class="section-title">
                <h2>แผนประกัน</h2>
            </div>

            <div class="col mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                <div class="box-cus-02">

                    <div class="form-group-text">
                        <h3 class="p-name">{{$fdplan->p_name}}</h3>
                    </div><br><br><br><br><br>

                    <div class="row">
                        <div class="logo-02">
                            <img src="<?php echo asset("images/logo/{$fdplan->p_image}")?>" height=150 width=150>
                        </div>
                    </div><br>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex" style="margin-left: 20%; margin-right: 9%;">
                            <div class="count-box">
                              <span data-toggle="counter-up">{{$fdplan->pay_ins_pre}}</span>
                              <p class="pay">จ่ายเบี้ยประกัน(ปี)</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                              <span data-toggle="counter-up">{{$fdplan->protection}}</span>
                              <p class="pay">ความคุ้มครอง(ปี)</p>
                            </div>
                        </div>
                    </div>

                    <div class="brand-02">
                        <h3>{{$fdplan->p_brand}}</h3>
                    </div>

                    <div class="descript-02">
                        <ul>
                            <li>{{$fdplan->p_descript}}</li>
                        </ul>
                    </div>

                </div>
            </div>
  
        <!--
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
                        <img src="<?php echo asset("images/logo/{$fdplan->p_image}")?>" height=150 width=150>
                    </div>
                </div>
            </div>
        -->
        </div>
    </section><!-- End Section -->

    <!-- ======= ข้อมูลแผนประกันแบบแยกหมวดหมู้ Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>ข้อมูลแบบประกัน</h2>
          </div>
  
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
                    <div class="box">
                        <i class="fa fa-user fa-3x" aria-hidden="true"></i><br>
                        <h3>อายุรับประกัน</h3>
                        <ul>
                        <li>{{$fdplan->insurer_age}}</li>
                        </ul>
                    </div>
                </div>
  
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-hand-holding-usd fa-3x"></i><br>
                        <h3>รับเงินจ่ายคืน</h3>
                        <ul>
                        <li>{{$fdplan->annuity}}</li>
                        </ul>
                    </div>
                </div>
  
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-coins fa-3x"></i><br>
                        <h3>เงินปันผล</h3>
                        <ul>
                        <li>{{$fdplan->bonus}}</li>
                        </ul>
                    </div>
                </div>
  
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-funnel-dollar fa-3x"></i><br>
                        <h3>สิทธิลดหย่อนภาษี</h3>
                        <ul>
                        <li>{{$fdplan->tax_break}}</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-file-contract fa-3x"></i><br>
                        <h3>การซื้อสัญญาเพิ่มเติม</h3>
                        <ul>
                        <li>{{$fdplan->add_contract}}</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-notes-medical fa-3x"></i><br>
                        <h3>การตรวจสุขภาพ</h3>
                        <ul>
                        <li>{{$fdplan->health_ck}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-comments-dollar fa-3x"></i><br>
                        <h3>เงินเอาประกันภัยขั้นต่ำ</h3>
                        <ul>
                        <li>{{$fdplan->min_amount}}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="fas fa-receipt fa-3x"></i><br>
                        <h3>รูปแบบการชำระเบี้ยประกัน</h3>
                        <ul>
                        <li>{{$fdplan->pay_ip_type}}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <i class="far fa-credit-card fa-3x"></i><br>
                        <h3>วิธีการชำระเบี้ยประกัน</h3>
                        <ul>
                        <li>{{$fdplan->pay_method}}</li>
                        </ul>
                    </div>
                </div>
            </div>
              
        </div>
      </section><!-- End Pricing Section -->

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