@extends('layouts.app')
@section('content')

<DOCTYPE html>

<html>

    <head>
        <title>คำนวณเบี้้ยประกัน</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <script src="{{ asset('js/calinsure.js') }}"></script>

    </head>


    <body>
        <h2 align="center">คำนวณเบี้ยประกัน</h2>
        <br>
        @csrf

        
        <div class="container" align="center" style="height: 450px;">
        <!--
            <form action="" method="post" >
                <div class="col-md-6">
                    
                    <div class="form-group-fund" align="left" id="fund">ทุนประกันที่ต้องการ
                        {!! Form::label('') !!}
                        {!! Form::text('insurance_fund', NULL, ["class" => "form-control insf"]) !!}
                    </div>
                    <br>

                    <div class="form-group-rate" align="left" id="rate">อัตราเบี้ยประกัน
                        {!! Form::label('') !!}
                        {!! Form::text('premium_rate', NULL, ["class" => "form-control prer"]) !!}
                    </div> 
                    
                    <br><br>
                    <input type="submit" value="คำนวณ" class="btn btn-primary CalculatePopup">
                    
                    <a href="{{ url('/') }}" class='btn btn-dark'>ย้อนกลับ</a>

                    <br><br>
                    
                </div>
            </form>
        -->

            <br><br>
            <div class="col-md-6">
                <div class="form-group-rate" align="left" id="rate">ทุนประกันที่ต้องการ
                    {!! Form::label('') !!}
                    {!! Form::text('insurance_fund', NULL, 
                        $attributes = array('class' => 'form-control insf',
                        'name' => 'insf',
                            'id' => 'n1'
                        )
                    ) !!}
                </div>
                
                <br>
                <div class="form-group-rate" align="left" id="rate">อัตราเบี้ยประกัน
                    {!! Form::label('') !!}
                    {!! Form::text('premium_rate', NULL, 
                        $attributes = array('class' => 'form-control prer',
                            'name' => 'prer',
                            'id' => 'n2'
                        )
                    ) !!}
                </div>

                <br><br>
                <button type="button" class="btn btn-primary" onclick="calc();">คำนวณ</button>
                <input type=="text" id="result" style="text-align: right;"/> เบี้ยประกันที่ต้องจ่ายต่อปี
            </div>
            
            <br><br><br><br>
            <a href="{{ url('/') }}" class='btn btn-dark'>ย้อนกลับ</a>

        </div>    

        <br>
        <div class="container">
            <p>
                &emsp;&emsp; หมายเหตุ <br>ทุนประกัน คือ จำนวนเงินที่ใช้เป็นความคุ้มครองให้แก่เรา <br>   
                         อัตราเบี้ยประกัน สามารถขอได้จากตัวแทน บริษัทเป็นผู้กำหนด(โดยคำนวนจากอัตรามรณะของประชากรไ่ทย)
            </p>
        </div>

    </body>
</html>

@endsection