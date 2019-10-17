<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Post VUE</title>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

  </head>
  <body>

    <header>
      <h1>Header</h1>
    </header>

    @yield('content')

    <footer>
      <h3>Footer</h3>
    </footer>

  </body>
</html>
