@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 align="center">ข้อมูลผู้ติดต่อ</h2>
        <a href="/contact/create" class="btn btn-primary my-2">เพิ่มผู้ติดต่อ</a>
        <br><br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">รหัส</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">อีเมล</th>
                <th scope="col">โทรศัพท์</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td>
                    <a href="{{route('contact.edit', $row->id)}}" class="btn btn-secondary">แก้ไข</a>
                </td>
                <td>
                <!--
                    <form action="{{route('contact.destroy', $row->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" class="btn btn-dark" 
                        onclick="return confirm('คุณต้องการลบข้อมูล {{$row->name}} ?')">
                    </form>
                -->
                    <form action="{{route('contact.destroy', $row->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" data-contactname="{{$row->name}}" class="btn btn-secondary deleteFormContact">
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