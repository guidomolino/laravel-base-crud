<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>laravel-base-crud</title>
  </head>
  <body>
    @include('partials.header')
    <main class="container">
      @yield('config')
    </main>
    @include('partials.footer')
  </body>
</html>
