<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แอดมิน</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/images/Surf.jpg");
                background-size: 160%;
                background-color: #fff;
                color: #202527;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 88px;
                font-family: Courier;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: rgb(54, 178, 235);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{-- <a href="{{ url('/') }}">หน้าผู้ใช้</a> --}}
                        <a href="{{ url('/home') }}">ระบบแอดมิน</a>
                    @else
                        <a href="{{ route('login') }}">เข้าสู่ระบบ</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">ลงทะเบียน</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Admin System
                </div>

                <div class="links">
                    {{-- <a href="/insplan">แก้ไขข้อมูลแผนประกันแบบย่อ</a> --}}
                    <a href="/fdplan">จัดการข้อมูลแผนประกันและเงื่อนไข</a>
                    <a href="/news">จัดการข้อมูลข่าวสาร</a>
                    <a href="/contact">จัดการข้อมูลผู้ดูแลระบบ</a>
                </div>
            </div>
        </div>
    </body>
</html>


@extends('layouts.app')
@section('content')


@endsection