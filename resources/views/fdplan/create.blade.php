@extends('layouts.app')
@section('content')
<br><br><br><br>

<DOCTYPE html>
    <head>

        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/opstyle.css')?>">
        <script src="{{ asset('js/customize.js') }}"></script>

    </head>

    <body>

        <center><h2>เพิ่มข้อมูลแผนประกันและเงื่อนไข</h2></center>

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

            {!! Form::open(['action' => 'FdplanController@store', 'method' => 'POST']) !!}
            
                {{-- <div class="col-md-6">

                    <div class="form-group">
                    <label class="">บริษัทประกัน</label>
                        {!! Form::text('p_brand', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                    <label class="">ชื่อแผนประกัน</label>
                        {!! Form::text('p_name', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                    <label class="">คำอธิบายแผนประกัน</label>
                        {!! Form::text('p_descript', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                    <label class="">รายละเอียด</label>
                        {!! Form::text('details', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">จ่ายเบี้ยประกัน(ปี)</label>
                            {!! Form::text('pay_ins_pre', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">ความคุ้มครอง(ปี)</label>
                            {!! Form::text('protection', NULL, ["class" => "form-control"]) !!}
                    </div>

                    
                    

                    <!-- more info -->
                    
                    <br><center><h2>section 2</h2></center>

                    <div class="form-group">
                        <label class="">อายุรับประกัน</label>
                            {!! Form::text('insurer_age', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">รับเงินคืน(%)</label>
                            {!! Form::text('annuity', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">เงินปันผล+เงื่อนไข</label>
                            {!! Form::text('bonus', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">จำนวนเงินประกันภัยขั้นต่ำ</label>
                            {!! Form::text('min_amount', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">สิทธิลดหย่อนภาษี</label>
                            {!! Form::text('tax_break', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">การชำระเบี้ยประกัน</label>
                            {!! Form::text('pay_method', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <label>เพิ่มรูปภาพรายละเอียดกรมธรรม์</label><br>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="policy_ben_pic">
                            <label class="custom-file-label">เลือกรูปภาพ</label>
                        </div>   
                    </div><br>

                    <div class="form-group">
                        <label class="">หมายเหตุ</label>
                            {!! Form::text('note', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">ข้อยกเว้นความคุ้มครอง</label>
                            {!! Form::textarea('exclusion_cov', NULL, ["class" => "form-control"]) !!}
                    </div>



                    
                    <!-- Condition -->

                    <br><center><h2>section 3</h2></center>

                    <div class="form-group">
                    <label class="">อายุ</label>
                        {!! Form::text('age', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                    <label class="">รายได้สุทธิ/ปี</label>
                        {!! Form::text('net_income', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">เป้าหมายการออมเงิน</label>
                        {!! Form::text('saving_goal', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">รูปแบบการชำระเบี้ยประกัน</label>
                        {!! Form::text('pay_ip_type', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">เงินปันผล</label>
                        {!! Form::text('divident', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">ตรวจสุขภาพ</label>
                        {!! Form::text('health_ck', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <div class="form-group">
                        <label class="">สามารถต่อสัญญาเพิ่มเติม</label>
                        {!! Form::text('add_contract', NULL, ["class" => "form-control"]) !!}
                    </div>

                    <label>เพิ่มรูปภาพ</label><br>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="p_image">
                            <label class="custom-file-label">เลือกรูปภาพ</label>
                        </div>   
                    </div><br>

                    <input type="submit" value="เพิ่ม" class="btn btn-primary">
                    <a href="/fdplan" class='btn btn-dark'>ย้อนกลับ</a>

                </div> --}}

                <br><h2 style="padding-left:80px;">section 1</h2>
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">บริษัทประกัน</label>
                                {!! Form::text('p_brand', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">ชื่อแผนประกัน</label>
                                {!! Form::text('p_name', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">คำอธิบายแผนประกัน</label>
                                {!! Form::text('p_descript', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">รายละเอียด</label>
                                {!! Form::text('details', NULL, ["class" => "form-control"]) !!}
                            </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">จ่ายเบี้ยประกัน(ปี)</label>
                                {!! Form::text('pay_ins_pre', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">ความคุ้มครอง(ปี)</label>
                                {!! Form::text('protection', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
                
        
                <br><h2 style="padding-left:80px;">section 2</h2>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">อายุรับประกัน</label>
                                {!! Form::text('insurer_age', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">รับเงินคืน(%)</label>
                                {!! Form::text('annuity', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">เงินปันผล+เงื่อนไข</label>
                                {!! Form::text('bonus', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">จำนวนเงินประกันภัยขั้นต่ำ</label>
                                {!! Form::text('min_amount', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">สิทธิลดหย่อนภาษี</label>
                                {!! Form::text('tax_break', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">การชำระเบี้ยประกัน</label>
                                {!! Form::text('pay_method', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <label>เพิ่มรูปภาพรายละเอียดกรมธรรม์</label><br>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="policy_ben_pic">
                                <label class="custom-file-label">เลือกรูปภาพ</label>
                            </div>   
                        </div><br>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">หมายเหตุ</label>
                                {!! Form::text('note', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">ข้อยกเว้นความคุ้มครอง</label>
                                {!! Form::textarea('exclusion_cov', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
        
                <br><h2 style="padding-left:80px;">section 3</h2>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">อายุ</label>
                                {!! Form::text('age', NULL, ["class" => "form-control"]) !!}
                            </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">รายได้สุทธิ/ปี</label>
                                {!! Form::text('net_income', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">เป้าหมายการออมเงิน</label>
                            {!! Form::text('saving_goal', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">รูปแบบการชำระเบี้ยประกัน</label>
                            {!! Form::text('pay_ip_type', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">เงินปันผล</label>
                            {!! Form::text('divident', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">ตรวจสุขภาพ</label>
                            {!! Form::text('health_ck', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label class="">สามารถต่อสัญญาเพิ่มเติม</label>
                            {!! Form::text('add_contract', NULL, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-5">
                        <label>เพิ่มรูปภาพ</label><br>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="p_image">
                                <label class="custom-file-label">เลือกรูปภาพ</label>
                            </div>   
                        </div>
                    </div>
                </div>

                {{-- <div class="container mt-5">
                    <div class="col-sm-12 col-lg-4 mr-auto ml-auto border p-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label><strong>เลือกรูปภาพบริษัทประกัน</strong></label>
                        <div class="custom-file">
                            <input type="file" name="p_image" multiple class="custom-file-input form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br> --}}


                <div class="col-5">
                    <input type="submit" value="เพิ่ม" class="btn btn-primary">
                    <a href="/fdplan" class='btn btn-dark'>ย้อนกลับ</a>
                </div>

            {!! Form::close() !!}
        </div>

        <script src="{{ asset('js/customize.js') }}"></script>

    </body>
</DOCTYPE>



@endsection