<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec Zona Leste</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      
    </style>
</head>
<body>
 <!-- Cabeçalho superior -->
<div class="top-header">
    <!-- Logo -->
    <a href="{{ route('home') }}">
        <img src="{{ asset('imgs/eteclogo.png') }}" alt="Logo">
    </a>

    <!-- Barra de busca centralizada -->
    <form class="d-flex search-bar">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
    </form>

    <!-- Botões de Login/Register -->
    @if (Route::has('login'))
        <div class="d-flex align-items-center">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark me-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">Registrar</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu central -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sobrenos') }}">Sobre Nós</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li> 
                <li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('departamentos') }}">Departamentos</a></li>
            </ul>

            <!-- Redes sociais à direita -->
            <div class="social-icons d-flex">
                <a href="https://www.facebook.com" target="_blank" class="nav-link text-white"><i class="fab fa-facebook me-2"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="nav-link text-white"><i class="fab fa-instagram me-2"></i></a>
                <a href="https://twitter.com" target="_blank" class="nav-link text-white"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</nav>


    
    <!-- Conteúdo das páginas -->
    @yield('content')

    
 <!-- API DE TRADUÇÃO DO GOOGLE -->
<div class="gtranslate_wrapper"></div>

<!-- Incluindo o script do Google Translate -->
<script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script>



    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Etec Zona Leste, desenvolvido por Gabriel Santos. Todos os direitos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   


</body>
</html>
