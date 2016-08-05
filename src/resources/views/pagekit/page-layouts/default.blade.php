<!DOCTYPE html>
<html>
<head>

    <title>{{ config('pagekit.title', 'Page Title - PageKit.') }} </title>

    <link rel="stylesheet" href="/css/pagekit/app.css">
     <link rel="stylesheet" href="/css/pagekit/page.css">

     @if(config('pagekit.branding'))
    <style>
      body {
        background-color: {!! config('pagekit.brand.background-color') !!};
        color: {!! config('pagekit.brand.text-color')!!};
        font-family: {!! config('pagekit.brand.font-family' ) !!};
    }
    header {
        background-color: {!! config('pagekit.brand.header-background-color') !!};
        color: {{ config('pagekit.brand.header-font-color')}};

        @if(config('pagekit.brand.header-background-image'))
        background-image: url("{{ config('pagekit.brand.header-background-image') }}");
        background-repeat: no-repeat ;
        background-size: cover ;
        background-position: center center ;
        @endif

    }

    header h1 {
        color: {!! config('pagekit.brand.header-font-color') !!};
        font-size: {!! config('pagekit.brand.font-size') !!};
    }
    footer {
        background-color: {!! config('pagekit.brand.footer-background-color') !!};
        color: {!! config('pagekit.brand.footer-color') !!};
    }
    </style>
    @endif

    @stack('styles')
</head>


<body>
@yield('page')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stack('scripts')

</html>
