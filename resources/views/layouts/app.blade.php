<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Thomaservice')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            background: #f5f7fb;
        }

        .main-nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .main-nav a {
            padding: 10px 18px;
            border-radius: 999px;
            font-size: 15px;
            text-decoration: none;
            border: 1px solid #d0d7e5;
            background: #f3f6fc;
            color: #555;
            font-weight: 600;
        }

       .main-nav a.active {
    background: #1f3b57;
    color: white;
    border-color: #1f3b57;
}


        @media(max-width: 768px){
            .main-nav a {
                flex: 1 1 calc(50% - 10px);
                text-align: center;
            }
        }

        .page-content {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px 40px;
        }
    </style>
</head>
<body>

{{-- PHOTO FULL WIDTH MAIS PLUS PETITE --}}
<div style="width:100%; overflow:hidden;">
    <img src="{{ asset('Documents/Screenshot 2026-09-09 at 22-20-58 Accueil - Éditeur - Webador.png') }}"
         alt="Header Thomaservice"
         style="width:100%; height:260px; object-fit:cover; display:block;">
</div>

{{-- MENU EN DESSOUS DE LA PHOTO --}}
<nav class="main-nav">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
        Accueil
    </a>
    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">
        Mes Services
    </a>
    <a href="{{ route('parcours') }}" class="{{ request()->routeIs('parcours') ? 'active' : '' }}">
        Mon Parcours
    </a>
    <a href="{{ route('methode') }}" class="{{ request()->routeIs('methode') ? 'active' : '' }}">
        Ma Méthode
    </a>
    <a href="{{ route('tarifs') }}" class="{{ request()->routeIs('tarifs') ? 'active' : '' }}">
        Tarifs et CESU
    </a>
</nav>

{{-- ⭐⭐ C’EST ÇA QUI MANQUAIT ⭐⭐ --}}
<main class="page-content">
    @yield('content')
</main>

</body>
</html>
