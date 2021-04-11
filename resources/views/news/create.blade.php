@extends('layouts.app')
@section('content')
<br><br><br><br>

<center><h2>เพิ่มข้อมูลข่าวสาร</h2></center>

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

        <!-- {!! Form::open(['url' => 'foo/bar']) !!} -->
        {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST']) !!}
            <div class="col-md-6">

                <div class="form-group">
                    <label>ชื่อเรื่อง</label>
                    {!! Form::text('article_name', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>ข้อมูลโดยย่อ</label>
                    {!! Form::text('abstract', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>แหล่งที่มา (url)</label>
                    {!! Form::text('content', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    <label>ผู้เขียน</label>
                    {!! Form::text('author', NULL, ["class" => "form-control"]) !!}
                </div>

                <input type="submit" value="เพิ่ม" class="btn btn-primary">
                <a href="/news" class='btn btn-dark'>ย้อนกลับ</a>

            </div>
        {!! Form::close() !!}
    </div>
    

@endsection