<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
  </head>

  <body>
    <h1>@yield('title')</h1>

    @include('components.menubar')

    <hr size="1">

    <div class="content">
      @yield('content')
    </div>

    <div class="footer">
      @yield('footer')
    </div>

  </body>
</html>