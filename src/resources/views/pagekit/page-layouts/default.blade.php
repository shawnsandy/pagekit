<!DOCTYPE html>
<html>
<head>

    <title>{{ config('pagekit.title', 'Page Title - PageKit.') }} </title>

    <link rel="stylesheet" href="/css/pagekit/app.css">
     <link rel="stylesheet" href="/css/pagekit/page.css">

     @if(config('config.branding'))
    <styles>
    body {
        background-color: "{{ config('brand.background-color')}}";
        color: "{{ config('brand.text-color')}}";
        font-family: "{{ config('brand.font-family' )}}";
    }
    header {
        background-color: "{{ config('brand.header-background-color', none )}}";
        background-image: "{{ config('brand.header-backgroung-image') }}";
    }

    header h1 {
        color: "{{ config('brand.header-font-color') }}";
        font-size: "{{ config('brand.font-size')}}";
    }
    footer {
        background-color: "{{ config('brand.footer-background-color')}}";
        color: "{{ config('brand.footer-color')}}";
    }
    </styles>
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
