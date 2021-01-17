@extends('layouts.app')
@section('content')

    <div class="container" style="background-color: ;">
        <h2 align="center">กรอกข้อมูลเงื่อนไขของท่าน</h2>
        <div class="row" style="background-color: ;">

            {!! Form::open(['action' => 'SearchController@index', 'method' => 'GET']) !!}
                <div class="form-group">
                    <label class="col-l-2 control-label">อายุ</label>
                    <div class="col-l-4">
                        <input type="interger" class="form-control" name="age" placeholder="เริ่มที่ 0 ปี">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-l-2 control-label">รายได้สุทธิ/ปี</label>
                    <div class="col-l-4">
                        <input type="interger" class="form-control" name="net_income" placeholder="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-l-2 control-label">เงินปันผล</label>
                    <div class="col-l-4">
                        <input type="radio" name="divident" value="มี"> จำเป็น&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="divident" value="ไม่มี"> ไม่จำเป็น
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-l-2 control-label">ตรวจสุขภาพ</label>
                    <div class="col-l-4">
                        <input type="radio" name="health_ck" value="ต้อง"> สะดวก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="health_ck" value="ไม่ต้อง"> ไม่สะดวก
                    </div>
                </div>
                
                <div class="form-group">
                    
                    <label class="col-l-2 control-label">เป้าหมายการออมเงิน</label>
                    <div class="col-l-4">
                        <select class="form-control input-lg dynamic" name="saving_goal" data-dependent="state">
                            <option value="">เลือก</option>
                            @foreach($saving_goals = DB::table('fdplans')->select('saving_goal')->distinct()->get()->pluck('saving_goal')->sort(); as $saving_goal)
                                <option value="{{$saving_goal}}"> {{$saving_goal}} </option>
                            @endforeach
                        </select>
                    </div><br>

                    <label class="col-l-2 control-label">รูปแบบการชำระเบี้ยประกัน</label>
                    <div class="col-l-4">
                        <select class="form-control input-lg dynamic" name="pay_ip_type" data-dependent="state">
                            <option value="">เลือก</option>
                            @foreach($pay_ip_types = DB::table('fdplans')->select('pay_ip_type')->distinct()->get()->pluck('pay_ip_type')->sort(); as $pay_ip_type)
                                <option value="{{$pay_ip_type}}"> {{$pay_ip_type}} </option>
                            @endforeach
                        </select>
                    </div>
                
                </div>

                <div class="form-group">
                    <label class="col-l-2 control-label">ทำสัญญาเพิ่มเติม</label>
                    <div class="col-l-4">
                        <input type="radio" name="add_contract" value="ได้"> ต้องการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="add_contract" value="ไม่ได้"> ไม่ต้องการ
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

    <?php use App\Fdplan; ?>
    @forelse($fdplans as $fdplan)
        <div class="container" align="center">
            <h1><a href="/fdplan/{{$fdplan->id}}">{{$fdplan->p_name}}</a></h1>
        </div>

        @empty
            <div class="" align="center">
                No search results found
            </div>

    @endforelse


@endsection