<DOCTYPE! html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/search.css')?>"> 
</head>

</html>

@extends('layouts.app')
@section('content')

        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                
                <div class="section-title">
                    <h3 align="center">กรอกข้อมูลเงื่อนไขของท่าน</h3>
                </div>

                <div class="row" style="background-color: ;">

                    {!! Form::open(['action' => 'ResultController@index', 'method' => 'GET']) !!}
                        <div class="form-group">
                            <label class="col-l-2 control-label">อายุ</label>
                            <div class="col-l-4">
                                <input type="number" class="form-control" name="age" placeholder="">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label class="col-l-2 control-label">รายได้สุทธิ/ปี</label>
                            <div class="col-l-4">
                                <input type="text" class="form-control" name="net_income" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-l-2 control-label">เงินปันผล</label>
                            <div class="col-l-4">
                                <input type="radio" name="divident" value="มีเงินปันผล"> จำเป็น&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="divident" value="ไม่มีเงินปันผล"> ไม่จำเป็น
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label class="col-l-2 control-label">ตรวจสุขภาพ</label>
                            <div class="col-l-4">
                                <input type="radio" name="health_ck" value="ต้องตรวจสุขภาพ"> สะดวก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="health_ck" value="ไม่ต้องตรวจสุขภาพ"> ไม่สะดวก
                            </div>
                        </div>
                        
                        <div class="form-group">
                            
                            <label class="col-l-2 control-label">เป้าหมายการออมเงิน</label>
                            <div class="col-l-4">
                                <select class="form-control input-lg dynamic" name="saving_goal" data-dependent="state">
                                    <option value="">เลือก</option>
                                    @foreach($saving_goals as $saving_goal)
                                        <option value="{{$saving_goal}}"> {{$saving_goal}} </option>
                                    @endforeach
                                </select>
                            </div><br>
        
                            <label class="col-l-2 control-label">รูปแบบการชำระเบี้ยประกัน</label>
                            <div class="col-l-4">
                                <select class="form-control input-lg dynamic" name="pay_ip_type" data-dependent="state">
                                    <option value="">เลือก</option>
                                    @foreach($pay_ip_types as $pay_ip_type)
                                        <option value="{{$pay_ip_type}}"> {{$pay_ip_type}} </option>
                                    @endforeach
                                </select>
                            </div>
                        
                        </div>
        
                        <div class="form-group">
                            <label class="col-l-2 control-label">ทำสัญญาเพิ่มเติม</label>
                            <div class="col-l-4">
                                <input type="radio" name="add_contract" value="สามารถซื้อสัญญาเพิ่มเติมได้"> ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="add_contract" value="ไม่สามารถซื้อสัญญาเพิ่มเติมได้"> ไม่ต้องการ
                            </div>
                        </div>
        
                        <div class="form-group" style="background-color: ;" align="center">
                            <div class="col-l-4" align="center">
                                <input type="submit" class="btn btn-primary" name="" value="ยืนยัน">
                                <input type="reset" class="btn btn-secondary" name="" value="รีเซต">
                            </div>
                        </div>
        
                    {!! Form::close() !!}
                </div>

              </div>

            </div>
          </section>
@endsection