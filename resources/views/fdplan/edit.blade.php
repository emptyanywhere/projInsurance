@extends('layouts.app')
@section('content')

<center><h2>แก้ไขข้อมูลแผนประกันและเงื่อนไข</h2></center>

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

        {!! Form::open(['action' => ['FdplanController@update', $data->id], 'method' => 'PUT']) !!}
            <div class="col-md-6">

                <div class="form-group">
                <label class="">บริษัทประกัน</label>
                    {!! Form::text('p_brand', $data->p_brand, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">ชื่อแผนประกัน</label>
                    {!! Form::text('p_name', $data->p_name, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">คำอธิบายแผนประกัน</label>
                    {!! Form::text('p_descript', $data->p_descript, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">รายละเอียด</label>
                    {!! Form::text('details', $data->details, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">จ่ายเบี้ยประกัน(ปี)</label>
                    {!! Form::text('pay_ins_pre', $data->pay_ins_pre, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">ความคุ้มครอง(ปี)</label>
                    {!! Form::text('protection', $data->protection, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">อายุ</label>
                    {!! Form::text('age', $data->age, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                <label class="">รายได้สุทธิ/ปี</label>
                    {!! Form::text('net_income', $data->net_income, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label class="">เป้าหมายการออมเงิน</label>
                    {!! Form::text('saving_goal', $data->saving_goal, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label class="">รูปแบบการชำระเบี้ยประกัน</label>
                    {!! Form::text('pay_ip_type', $data->pay_ip_type, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label class="">เงินปันผล</label>
                    {!! Form::text('divident', $data->divident, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label class="">ตรวจสุขภาพ</label>
                    {!! Form::text('health_ck', $data->health_ck, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label class="">สามารถต่อสัญญาเพิ่มเติม</label>
                    {!! Form::text('add_contract', $data->add_contract, ["class" => "form-control"]) !!}
                </div>

                <label>เพิ่มรูปภาพ</label><br>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="p_image">
                        <label class="custom-file-label">เลือกรูปภาพ</label>
                    </div>   
                </div><br>

                <input type="submit" value="อัพเดท" class="btn btn-primary">
                <a href="/fdplan" class='btn btn-dark'>ยกเลิก</a>

            </div>
        {!! Form::close() !!}
    </div>

@endsection