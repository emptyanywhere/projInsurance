@extends('layouts.app')
@section('content')
<br><br><br><br>

<center><h2>แก้ไขข้อมูลข่าวสาร</h2></center>

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

        {!! Form::open(['action' => ['NewsController@update', $data->id], 'method'=>'PUT']) !!}
            <div class="col-md-6">

                <div class="form-group">
                    <label>ชื่อเรื่อง</label>
                    {!! Form::text('article_name', $data->article_name, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>ข้อมูลโดยย่อ</label>
                    {!! Form::text('abstract', $data->abstract, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>แหล่งที่มา (url)</label>
                    {!! Form::text('content', $data->content, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>ผู้เขียน</label>
                    {!! Form::text('author', $data->author, ["class" => "form-control"]) !!}
                </div>

                <input type="submit" value="อัปเดต" class="btn btn-primary">
                <a href="/news" class='btn btn-dark'>ย้อนกลับ</a>

            </div>
        {!! Form::close() !!}
    </div>

@endsection