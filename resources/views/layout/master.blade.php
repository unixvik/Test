<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webpage v.1</title>
    <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!! asset('css/font-awesome.css') !!}">
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.backstretch.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/custom.js') !!}"></script>

</head>

<body>
@include('header')

@yield('content')

<div class="footer">
@include('footer')
</div>
</body>

</html>