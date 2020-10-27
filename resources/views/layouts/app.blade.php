<!doctype html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>

  <body>
    @include('includes.header')
        <div class="container">
            @yield('content')
        </div>
        <!-- Footer Starts -->
        @include('includes.footer')
        <!-- Footer Ends -->
    </body>
</html>