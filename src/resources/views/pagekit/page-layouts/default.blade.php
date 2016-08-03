<!DOCTYPE html>
<html>
<head>

    <title>{{ config('pagekit.title', 'Page Title - PageKit.') }} </title>  

    <link rel="stylesheet" href="/css/pagekit/app.css">
    @stack('styles')
</head>

<body>
page content
@yield('page')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stack('scripts')
</html>
