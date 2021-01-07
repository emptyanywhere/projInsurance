@extends('layouts.app')
@section('content')

<center><h2>กรุณาเลือกเงื่อนไข</h2></center>

    <div class="container">

        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['action' => 'InsplanController@store', 'method' => 'POST']) !!}
            <div class="col-md-6">

                <div class="radiotext">เพศ</div>
                <input type="radio" value="aaa" class="radio" id="dvdY" name="divident">  ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="aaa" class="radio" id="dvdN" name="divident">  ไม่ต้องการ<br><br>

                <div class = "form-group">อายุ
                    {!! Form::label('') !!} <br>
                    {!! Form::number('age', NULL, ["class" => "form-control"]) !!}
                </div>


                <div class = "form-group">รายได้/เดือน
                    {!! Form::label('') !!} <br>
                    {!! Form::text('income', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">เป้าหมายระยะเวลาในการออมเงิน
                    {!! Form::label('') !!}<br>
                    {!! Form::select('goal', ['L' => 'ระยะยาว', 'S' => 'ระยะสั้น'], null, ['placeholder' => 'เลือกแผน']) !!}
                </div>


                <div class="radiotext">เงินปันผล</div>
                <input type="radio" value="aaa" class="radio" id="dvdY" name="divident">  ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="aaa" class="radio" id="dvdN" name="divident">  ไม่ต้องการ<br><br>

                <div class="radiotext">รูปแบบการชำระเบี้ยประกัน</div>
                <input type="radio" value="aaa" class="radio" id="payY" name="paytype">  ชำระแบบรายปี&nbsp;&nbsp;
                <input type="radio" value="aaa" class="radio" id="payM" name="paytype">  ชำระแบบรายเดือน<br><br>

                <div class="radiotext">ตรวจสุขภาพ</div>
                <input type="radio" value="aaa" class="radio" id="heaY" name="health">  ตรวจ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="aaa" class="radio" id="heaN" name="health">  ไม่ตรวจ<br><br>

                <div class="radiotext">สัญญาเพิ่มเติม</div>
                <input type="radio" value="aaa" class="radio" id="conY" name="contract">  ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="aaa" class="radio" id="conN" name="contract">  ไม่ต้องการ<br><br>

                <input type="submit" value="ยืนยัน" class="btn btn-success">&nbsp;
                <a href="{{url('/')}}" class='btn btn-dark'>ย้อนกลับ</a>&nbsp;
                <input type="reset" value="รีเซต" class="btn btn-danger">

            </div>
        {!! Form::close() !!}
    </div>


@endsection
