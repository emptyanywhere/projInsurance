@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 align="center">ข้อมูลแผนประกัน</h2>
        <a href="/insplan/create" class="btn btn-primary my-2">เพิ่มแผนประกัน</a>
        <br><br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">รหัส</th>
                <th scope="col">บริษัท</th>
                <th scope="col">ชื่อแผนประกัน</th>
                <th scope="col">คำอธิบาย</th>
                <th scope="col">รายละเอียด</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->brand}}</td>
                <td>{{$row->insplanname}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->detail}}</td>
                <td>
                    <a href="{{route('insplan.edit', $row->id)}}" class="btn btn-secondary">แก้ไข</a>
                </td>
                <td>
                    <form action="{{route('insplan.destroy', $row->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" data-planname="{{$row->insplanname}}" class="btn btn-secondary deleteFormInsplan">
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