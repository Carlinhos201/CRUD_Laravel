<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PJLaravel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>

    <div class="container">
        <div class="navbar">
        <nav class="navbar fixed-top navbar-dark bg-dark" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/">LagoaSystem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Página Inicial<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/authors">Autores</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contatos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/Contacts">Contatos Cadastrados</a>
          <a class="dropdown-item" href="/Contacts/create">Cadastrar Contatos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="conteudo">@yield('content')</div>
    </div>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>