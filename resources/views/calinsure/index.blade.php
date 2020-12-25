@extends('layouts.app')
@section('content')

<DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <title>คำนวนเบี้้ยประกัน</title>

    </head>


    <body>
        <h2 align="center">คำนวนเบี้ยประกัน</h2>
        <br>
        @csrf

        <div class="container" align="center">

            <form action="" method="post" >
                <div class="col-md-6">

                    <div class="form-group" align="left">ทุนประกันที่ต้องการ
                        {!! Form::label('') !!}
                        {!! Form::text('insurance_fund', NULL, ["class" => "form-control insf"]) !!}
                    </div>

                    <div class="form-group" align="left">อัตราเบี้ยประกัน
                        {!! Form::label('') !!}
                        {!! Form::text('premium_rate', NULL, ["class" => "form-control prer"]) !!}
                    </div>

                    <input type="submit" value="คำนวน" class="btn btn-primary CalculatePopup">
                    <a href="{{ url('/') }}" class='btn btn-dark'>ย้อนกลับ</a>

                    <br><br>
                    
                </div>
            </form>

        </div>

    </body>
</html>

@endsection