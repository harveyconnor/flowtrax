<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - Track Submission</title>

    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container" id="app">
    <div class="row justify-content-center align-self-center mt-2 mb-2">
        <div class="col-lg-8">
            <div class="text-center mt-5">
                <h1>404</h1>
                <h2>The page you were looking for could not be found.</h2>
                <p><a href="{{ route('welcome') }}">Click here</a> to go back to home.</p>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
