<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ประกันชีวิตเพื่อสะสมทรัพย์</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/welcome.css')?>">
        <!-- Styles -->
        <!-- <style>
            html, body {
                /*background-color: #fff;*/
                background: #F5F5F5;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                width: 100%;
            }

            .full-height {
                height: 40vh;
                /*height: 50vh;*/
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background: #F5F5F5;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 120px;
                top: 75px;
            }

            .topic {
                padding-top: 30px;
                font-weight: bold;
                font-size: 25px;
                position: relative;
                left: 140px;
            }

            .content {
                text-align: center;
                /*background-color: #ADD8E6;*/
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header {
                padding: 70px;
                background: white;
                color: black;
            }

            .container {
                padding-top: 50px;
                background: silver;
                height: 430px;
            }

            .top-h {
                font-size: 20px;
                background: dimgray;
                color: dimgray;
                width: 100%;
            }

            .top-rf {
                font-size: 100px;
                background: dimgray;
                color: dimgray;
            }

            .top-f {
                font-size: 40px;
                background-color: dimgray;
                color: write;
                height: 175px;
            }

            .footer-contact {
                position: absolute;
                right: 150px;
                bottom: 0px;
                color: white;
                font-weight: bold;
                font-size: 21px;
                margin: 0;
                background-color: gray;
            }

        </style> -->
    </head>
    <body>
        
        <!-- <div class="top-h">top</div> -->

        <div class="header">
            @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">ระบบแอดมิน</a>
                        @else
                            <a href="{{ route('login') }}">เข้าสู่ระบบ</a>

                            <!--@if (Route::has('register'))
                                <a href="{{ route('register') }}">ลงทะเบียน</a>
                            @endif-->
                        @endauth
                    </div>
            @endif
        </div>
        
        <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        Life Insurance
                    </div>

                    <div class="links">
                        <a href="http://127.0.0.1:8000/search">ค้นหาแผนประกัน</a>
                        <a href="/page/nlist">ข้อมูลข่าวสาร</a>
                        <a href="/calinsure/">คำนวณเบี้ยประกัน</a>
                        <a href="">ช่องทางติดต่อ</a>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- footer -->

        <div class="top-f">
            <div class="footer-contact">
                
            </div>
        </div>

    </body>
</html>
