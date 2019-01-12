<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>

  <body>
    <h1>@yield('title')</h1>

    @include('components.menubar')

    <hr size="1">

    <div class="content">
      @yield('content')
    </div>

    <div class="footer">
    @include('components.footer')
    </div>

  </body>
  <script src="/js/app.js"></script>
</html>