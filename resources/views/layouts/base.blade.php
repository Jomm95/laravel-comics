<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    {{-- collegamento tramite asset alla cartella public e al css compilato  --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    {{-- avrà sempre lo stesso header, link section e footer --}}
    @include('partials.header')

    {{-- @include('partials.jumbotron') --}}
    

    <main>
        {{-- Segnaposto dinamico dove verrà cambiata la pagina visualizzata--}}
        @yield('content')

    </main>

    @include('partials.footer')



</body>
</html>