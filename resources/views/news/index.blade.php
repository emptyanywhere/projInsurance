@extends('layouts.app')
@section('content')
<br><br><br><br>

    <div class="container">
        <h2 align="center">ข้อมูลข่าวสาร/บทความ</h2>
        <a href="/news/create" class="btn btn-primary my-2">เพิ่มข่าวสาร/บทความ</a>
        <br><br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">รหัส</th>
                <th scope="col">หัวข้อ</th>
                <th scope="col">ส่วนนำ</th>
                <th scope="col">เนื้อหาข่าวสาร/บทความ</th>
                <th scope="col">ผู้เขียน</th>
                <th scope="col">สร้างเมื่อ</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->article_name}}</td>
                <td>{{$row->abstract}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->author}}</td>
                <td>{{$row->created_at}}</td>
                <td>
                    <a href="{{route('news.edit', $row->id)}}" class="btn btn-secondary">แก้ไข</a>
                </td>
                <td>
                    <form action="{{route('news.destroy', $row->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="ลบ" data-author="{{$row->author}}" 
                        data-article_name="{{$row->article_name}}" class="btn btn-secondary deleteFormNews">
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