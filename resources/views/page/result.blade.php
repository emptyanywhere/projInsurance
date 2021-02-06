<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/favicon.png" rel="icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/result.css')?>"> 
</head>

</html>

@extends('layouts.app')
@section('content')
<br><br><br><br>

    @forelse($fdplans as $fdplan)
        <div class="container" align="float-left" style="background-color: ;">
            <div class="form-group">

                
                <div class="form-group-text">
                    <h1><a href="/fdplan/{{$fdplan->id}}">{{$fdplan->p_name}}</a></h1><br>

                    <div class="brand">
                        <h4>{{$fdplan->p_brand}}</h4>
                    </div>

                    <div class="descript">
                        <p>{{$fdplan->p_descript}}</p>
                    </div>
                </div>

                <div class="logo">
                    <!-- <img src="{{$fdplan->p_image}}" height=150 width=150> -->
                    <img src="<?php echo asset("images/logo/{$fdplan->p_image}")?>" height=150 width=150>
                </div>

                <div class="sb sb-5">
                    <hr class="section-break-5" />
                </div>
            
            <br><br><br><br>
            </div>

            
        </div>

       

        @empty
            <div class="" align="center">
                <div class="section-title">
                    <br><br><br><br>
                    <h2 align="center">No search results found</h2>
                    <br><br><br><br><br>
                </div>
            </div>

    @endforelse

@endsection