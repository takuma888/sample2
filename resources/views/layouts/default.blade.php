<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', 'Sample2 App') - 第二遍</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
        </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>