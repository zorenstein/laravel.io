<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Laravel.IO - The Official Laravel Framework Community Portal</title>

  @section('styles')
    <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">
  @show

  <script src="{{ asset('javascripts/vendor/custom.modernizr.js') }}"></script>
</head>
<body>

<div class="wrapper">
  <div class="top-header">
    @include('layouts._top_nav')
  </div>
@include('layouts._flash')

  <div class="holder">
     <div class="table">
        {{ $content }}
      </div>
  </div>
</div>

<div class="push"></div>
@include('layouts._footer')

  @section('scripts')
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://js.pusher.com/2.1/pusher.min.js"></script>
    @if(Auth::user())
      <script>
        var pusher = new Pusher('9d40e080af48b3a2afd4');
        var channel = pusher.subscribe('{{ Auth::user()->getPusherChannel() }}');

        channel.bind('message', function(data) {
          $('.top-header').after(data.message);
        });

      </script>
    @endif
  @show
</body>
</html>