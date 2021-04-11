@extends('layouts.app')
@section('content')
<br><br><br><br>

    <div class="container">
        <h2 align="center">ข้อมูลแผนประกันและเงื่อนไข</h2>
        <a href="/fdplan/create" class="btn btn-primary my-2">เพิ่มแผนประกัน</a>
        <br><br>

        <form action="{{ url('/searchdata')}}" method="get" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="search" class="form-control" name="search"
                    placeholder="ค้นหาจากชื่อแผนประกัน"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">
                        <!-- <span class="glyphicon glyphicon-search"></span> -->
                        ค้นหา
                    </button>
                </span>
            </div>
        </form>
        <br><br>

        <table class="table">
            <thead class="thead-light">
                <tr>
                {{-- <th scope="col">รหัส</th> --}}
                <th scope="col">รูป</th>
                <th scope="col">บริษัท</th>
                <th scope="col">ชื่อแผน</th>
                <th scope="col">คำอธิบาย</th>
                <th scope="col">จ่ายเบี้ยประกัน(ปี)</th>
                <th scope="col">ความคุ้มครอง(ปี)</th>
                <!--
                <th scope="col">รายละเอียด</th>
                <th scope="col">อายุ</th>
                <th scope="col">รายได้สุทธิ/ปี</th>
                <th scope="col">เป้าหมายการออมเงิน</th>
                <th scope="col">รูปแบบการชำระเบี้ยประกัน</th>
                <th scope="col">เงินปันผล</th>
                <th scope="col">ตรวจสุขภาพ</th>
                <th scope="col">สัญญาเพิ่มเติม</th>
                -->
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fdplans as $data)
                <tr>
                {{-- <th scope="row">{{$data->id}}</th> --}}
                <td>{{$data->p_image}}</td>
                <td>{{$data->p_brand}}</td>
                <td>{{$data->p_name}}</td>
                <td>{{$data->p_descript}}</td>
                <td>{{$data->pay_ins_pre}}</td>
                <td>{{$data->protection}}</td>
                <!--
                <td>{{$data->details}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->net_income}}</td>
                <td>{{$data->saving_goal}}</td>
                <td>{{$data->pay_ip_type}}</td>
                <td>{{$data->divident}}</td>
                <td>{{$data->health_ck}}</td>
                <td>{{$data->add_contract}}</td>
                -->
                <td>
                    <a href="{{route('fdplan.edit', $data->id)}}" class="btn btn-secondary">แก้ไข</a>
                </td>
                <td>
                <form action="{{route('fdplan.destroy', $data->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" data-fdplanname="{{$data->p_name}}" class="btn btn-secondary deleteFormFdplan">
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        
        <div align="center">
           {{$fdplans->links()}}
        </div> 

        <div align="center">
            <a href="/administrator" class='btn btn-dark'>ย้อนกลับ</a>
        </div>

    </div>
    
@endsection