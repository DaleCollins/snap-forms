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
<body>
<p>New patient registration details at {{ config('business.name') }}.</p>
<table style="width: 50%">
    <tr>
        <td>First name</td>
        <td>{{ $data['first_name'] }}</td>
    </tr>
    <tr>
        <td>Last name</td>
        <td>{{ $data['last_name'] }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $data['address'] }}</td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td>{{ $data['suburb'] }}</td>
    </tr>
    <tr>
        <td>State</td>
        <td>{{ $data['state'] }}</td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td>{{ $data['postcode'] }}</td>
    </tr>
</table>
</body>
</html>
