@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="container v" 
    style="
        background-color: rgba(238, 238, 238, 0.952);
        height: 400px;
    ">
    <div class="link" align="center">
        <br><br>
        <a href="/administrator"><h4> --> ไปที่หน้าแรกของระบบแอดมิน </h2></a>
    </div>
</div>


@endsection