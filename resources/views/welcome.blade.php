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
            <div class="text-center">
                <img src="{{ asset('/img/logo.png') }}" height="100px" alt="Flow Trax">
            </div>
            <div class="card">
                <div class="card-header">
                    Flow Trax - Track Submission
                </div>
                <div class="card-body">
                    <p class="text-muted">Before submitting a track you adhere to the guidelines below:</p>

                    <track-form></track-form>

                </div>
                <div class="card-footer">
                    &copy; {{ date("Y") }} Flow Trax
                </div>
            </div>

        </div>
    </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
