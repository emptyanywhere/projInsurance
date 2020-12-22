@extends('layouts.app')
@section('content')

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
                    {!! Form::label('Title') !!}
                    {!! Form::text('article_name', $data->article_name, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Abstract') !!}
                    {!! Form::text('abstract', $data->abstract, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Content') !!}
                    {!! Form::text('content', $data->content, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Author') !!}
                    {!! Form::text('author', $data->author, ["class" => "form-control"]) !!}
                </div>

                <input type="submit" value="อัพเดท" class="btn btn-primary">
                <a href="/news" class='btn btn-dark'>ย้อนกลับ</a>

            </div>
        {!! Form::close() !!}
    </div>

@endsection