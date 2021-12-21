<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('page_title')</title>

  @include("partials.header_scripts")
</head>
<body>
  @include("partials.the_header")

  <main class="main">
    @yield('content')
  </main>

  @include("partials.the_footer")
</body>
</html>