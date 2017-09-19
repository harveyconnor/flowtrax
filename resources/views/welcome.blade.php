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
                    <p class="text-muted">
                        Before submitting a track you adhere to the guidelines below:
                    </p>
                    <ul class="text-muted">
                        <li>Only submit tracks that relate to the channel's current content.</li>
                        <li>Do NOT submit any track that doesn't belong to you.</li>
                        <li>Make sure the track does NOT include any copyrighted content.</li>
                        <li>Make sure the track is less than 10 minutes long.</li>
                    </ul>
                    <p class="text-muted">
                        By submitting a track to Flow Trax, you hereby grant Flow Trax to upload the track to the YouTube channel
                        <a href="https://www.youtube.com/FlowTrax" target="_blank">Flow Trax</a>.
                    </p>
                    <track-form></track-form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; {{ date("Y") }} Flow Trax
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="https://www.youtube.com/FlowTrax" target="_blank">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x yt-icon"></i>
                                        <i class="fa fa-youtube fa-stack-1x text-white"></i>
                                    </span>
                                </a>
                                <a href="https://www.twitter.com/FlowTrax" target="_blank">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x tw-icon"></i>
                                        <i class="fa fa-twitter fa-stack-1x text-white"></i>
                                    </span>
                                </a>
                                <a href="https://www.soundcloud.com/flowtrax" target="_blank">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x sc-icon"></i>
                                        <i class="fa fa-soundcloud fa-stack-1x text-white"></i>
                                    </span>
                                </a>
                                <a href="https://www.facebook.com/flowtrax" target="_blank">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x fb-icon"></i>
                                        <i class="fa fa-facebook fa-stack-1x text-white"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
