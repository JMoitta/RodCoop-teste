<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('welcome') }}">Rodízio de Cooperadores</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Regiões Administrativas <span class="caret"></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('administrative-regions.index') }}">Lista das Regiões Administrativas</a></li>
              <li><a href="{{ route('administrative-regions.create') }}">Nova Região Administrativa</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Igrejas <span class="caret"></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('praying-houses.index') }}">Lista das Igrejas</a></li>
              <li><a href="{{ route('praying-houses.create') }}">Nova Igreja</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cooperadores <span class="caret"></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('cooperators.index') }}">Lista dos Cooperadores</a></li>
              <li><a href="{{ route('cooperators.create') }}">Nova Cooperador</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Route::has('login'))
            @auth
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"a>{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="{{ route('logout') }}">Sair</a></li>
                </ul>
              </li>
            @else
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="row">
    <div class="container">
      @yield('content')
    </div>
  </div>
  <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>

