<DOCTYPE! html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/show.css')?>"> 
</head>

</html>

@extends('layouts.app')
@section('content')
    
    <div class="container v">
        <div class="form-group">
            <div class="form-group-text">
                <h3>{{$fdplan->p_name}}</h3>

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
                <div class="icon-text" style="background-color: lightblue;">
                    
                    <table>
                        <tr>
                            <td>
                                <div class="insurer-age">
                                    <span></span>
                                    <label>อายุรับประกัน</label>
                                    <p>{{$fdplan->insurer_age}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>รับเงินจ่ายคืน</label>
                                    <p>{{$fdplan->annuity}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="bonus">
                                    <span></span>
                                    <label>เงินปันผล</label>
                                    <p>{{$fdplan->bonus}}</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>สิทธิลดหย่อนภาษี</label>
                                    <p>{{$fdplan->tax_break}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>การซื้อสัญญาเพิ่มเติม</label>
                                    <p>{{$fdplan->add_contract}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>การตรวจสุขภาพ</label>
                                    <p>{{$fdplan->health_ck}}</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>เงินเอาประกันภัยขั้นต่ำ</label>
                                    <p>{{$fdplan->min_amount}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>รูปแบบการชำระเบี้ยประกัน</label>
                                    <p>{{$fdplan->pay_ip_type}}</p>
                                </div>
                            </td>
                            <td>
                                <div class="annuity">
                                    <span></span>
                                    <label>วิธีการชำระเบี้ยประกัน</label>
                                    <p>{{$fdplan->pay_method}}</p>
                                </div>
                            </td>
                          </tr>
                      </table>

                </div>
            </div>

            <div class="logo">
                <!-- <img src="{{$fdplan->p_image}}" height=150 width=150> -->
                <img src="<?php echo asset("images/{$fdplan->p_image}")?>" height=150 width=150>
            </div>
        </div>
    </div>

@endsection