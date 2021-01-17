@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 align="center">ข้อมูลแผนประกันและเงื่อนไข</h2>
        <a href="/fdplan/create" class="btn btn-primary my-2">เพิ่มแผนประกัน</a>
        <br><br>

        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="ค้นหาแผนประกัน"> <span class="input-group-btn">
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
                <th scope="col">รหัส</th>
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
            @foreach($data as $row)
                <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->p_image}}</td>
                <td>{{$row->p_brand}}</td>
                <td>{{$row->p_name}}</td>
                <td>{{$row->p_descript}}</td>
                <td>{{$row->pay_ins_pre}}</td>
                <td>{{$row->protection}}</td>
                <!--
                <td>{{$row->details}}</td>
                <td>{{$row->age}}</td>
                <td>{{$row->net_income}}</td>
                <td>{{$row->saving_goal}}</td>
                <td>{{$row->pay_ip_type}}</td>
                <td>{{$row->divident}}</td>
                <td>{{$row->health_ck}}</td>
                <td>{{$row->add_contract}}</td>
                -->
                <td>
                    <a href="{{route('fdplan.edit', $row->id)}}" class="btn btn-secondary">แก้ไข</a>
                </td>
                <td>
                <form action="{{route('fdplan.destroy', $row->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" data-fdplanname="{{$row->p_name}}" class="btn btn-secondary deleteFormFdplan">
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div align="center">
            <a href="/administrator" class='btn btn-dark'>ย้อนกลับ</a>
        </div>

    </div>
    
@endsection