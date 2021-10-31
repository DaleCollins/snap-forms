<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('business.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body class="w-full h-screen flex justify-center items-center" >
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="flex justify-center">
            <img class="w-50" src="{{ url('images/logo.png') }}" alt="Snap Forms Logo">
        </div>
        <div class="flex justify-center mt-16">
            <h1 class="text-xl"><span class="font-weight-bold">Thank you</span>,<br>Your data has been securely transferred to {{ config('business.name') }}</h1>
        </div>
    </div>
</div>
