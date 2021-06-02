<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    html, body{
        height: 100%;
    }
               body{
        background: url("../media/background.png") no-repeat center center fixed;
        background-size: cover;
        padding: 0;
        margin: 0;
    }
    </style>
    <title>Document</title>
</head>
<body>
@extends('footer_1')
@section('sign-listener')
@include('components')
@stop
@extends('sign/signListener/sign_listener')
@extends('base')
</body>
</html>
