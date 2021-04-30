<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" >

<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

    </head>
    <body class="antialiased">
        @include('components.nav')
        @include('components.message')
        <div class="content">
        @yield('post')
        @yield('form')
            @yield('index')
            @yield('content')
        {{-- <script src={{ asset('ckeditor/ckeditor.js')}}></script>  --}}
        <script>CKEDITOR.replace( 'editor',{height: 100});</script>
        {{-- <script> CKEDITOR.replace('your textarea name'); </script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>