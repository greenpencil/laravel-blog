<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/metro-bootstrap.min.css">
    <link rel="stylesheet" href="css/iconFont.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>

<body class="metro">
@include('templates.navbar')

<div class="container">
    <h1>
        @yield('title')
    </h1>
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<script type='text/javascript' src="http://metroui.org.ua/js/jquery/jquery.widget.min.js"></script>

<script type='text/javascript' src="http://metroui.org.ua/js/metro.min.js"></script>

</body>
</html>