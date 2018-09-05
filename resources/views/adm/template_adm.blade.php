<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @include('adm.partials.styles')

  <title>
    @section('title-page')
    Adm
    @show
  </title>
</head>
<body>
  @include('adm.partials.navbar')

  @yield('content')

  @include('adm.partials.scripts')
</body>
</html>