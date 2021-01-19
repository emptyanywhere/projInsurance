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

                <div class="condition">
                    <p>{{$fdplan->p_descript}}</p>
                </div>
            </div>

            <div class="logo">
                <!-- <img src="{{$fdplan->p_image}}" height=150 width=150> -->
                <img src="<?php echo asset("images/{$fdplan->p_image}")?>" height=150 width=150>
            </div>
        </div>
    </div>

@endsection