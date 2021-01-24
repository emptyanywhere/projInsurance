<DOCTYPE! html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/favicon.png" rel="icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/show.css')?>">

    <script src="https://kit.fontawesome.com/bc08b5fff6.js" crossorigin="anonymous"></script> <!-- https://fontawesome.com/ -->

    <script src="https://use.fontawesome.com/c6c576ba33.js"></script> <!-- https://fontawesome.com/v4.7.0/icons/ -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

</html>

@extends('layouts.app')
@section('content')
<br><br><br><br>
    
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
    </div><br><br>

    <div class="container b">
        <br>
        <div class="form-group">
            <h4>ผลประโยชน์ความคุ้มครอง</h4>
        </div>

        <br><br>
        <div class="benefits">
            <center><img src="<?php echo asset("images/benefits/{$fdplan->policy_ben_pic}")?>" width="100%"></center>
        </div>

        <br><br>
        <div id="flip">หมายเหตุ</div>
        <div id="panel"> {{$fdplan->note}} </div>

        
        <div id="flip-v">ข้อยกเว้นความคุ้มครอง</div>
        <div id="panel-v"> {{$fdplan->exclusion_cov}} </div>

    </div>



@endsection