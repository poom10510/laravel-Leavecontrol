<!Doctype html>
<html>
<head>
<title>Laravel 5 – @yield('page_title')</title>
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
{!! Html::style('css/app.css') !!}
<!-- {!! HTML::script('js/app.js') !!} -->

</head>
<body>
<div class='container'>
@yield('content')

<div class="row">
    <div class="col-md-4">
p
    </div>
    <div class="col-md-4">
p
    </div> 
</div>
</div>

</body>
</html>