@extends('layouts.app')
@section('content')
<br><br><br><br>

<center><h2>เพิ่มข้อมูลผู้ดูแลระบบ</h2></center>

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
        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('NAME') !!}
                    {!! Form::text('name', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('EMAIL') !!}
                    {!! Form::text('email', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('PHONE') !!}
                    {!! Form::text('phone', NULL, ["class" => "form-control"]) !!}
                </div>

                <input type="submit" value="เพิ่ม" class="btn btn-primary">
                <a href="/contact" class='btn btn-dark'>ย้อนกลับ</a>

            </div>
        {!! Form::close() !!}
    </div>
    

@endsection