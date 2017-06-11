<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    @yield('styles');
    <style type="text/css">
      body {
        background-color: #00564E;
      }
      hr.style2 {
  border-top: 3px double #8c8b8b;
}

    </style>
  </head>
  <body style="padding-top: 90px">
      @include('partials._navbar')
    
      <div class="container">

        @include('partials._messages')

        @yield('content')

      </div>

      @include('partials._footer')

      @include('partials._scripts')
  </body>
</html>