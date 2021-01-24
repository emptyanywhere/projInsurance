@extends('layouts.app')
@section('content')
<br><br><br><br>

<center><h2>เพิ่มข้อมูลแผนประกัน</h2></center>

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

        {!! Form::open(['action' => 'InsplanController@store', 'method' => 'POST']) !!}
            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('Brand') !!}
                    {!! Form::text('brand', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Plan name') !!}
                    {!! Form::text('insplanname', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::text('description', NULL, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Detail') !!}
                    {!! Form::text('detail', NULL, ["class" => "form-control"]) !!}
                </div>

                <input type="submit" value="เพิ่ม" class="btn btn-primary">
                <a href="/insplan" class='btn btn-dark'>ย้อนกลับ</a>

            </div>
        {!! Form::close() !!}
    </div>
    

@endsection