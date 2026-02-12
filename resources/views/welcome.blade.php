@extends('layouts.home')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-200 px-6 py-12">

    <div class="max-w-3xl bg-white shadow-xl rounded-2xl p-10 mx-auto border border-gray-100">

        <img src="{{ asset('images/IMG-20250914-WA0000.jpg') }}" 
             alt="Photo"
             class="rounded-full mx-auto mb-6 shadow-lg ring-4 ring-gray-200"
             style="width: 110px; height: 110px; object-fit: cover;">

        <h1 class="text-4xl font-extrabold text-gray-900 mb-6 text-center tracking-tight">
            Aide à la personne – Services du quotidien
        </h1>

        <p class="text-lg text-gray-600 leading-relaxed mb-6 text-center">
            Accompagnement personnalisé pour faciliter votre quotidien :  
            courses, sorties, aide administrative, conseils pour utiliser vos ordinateurs et smartphones.
        </p>

        <p class="text-md text-gray-700 font-semibold mb-8 text-center">
            Les clients peuvent également me régler en CESU.
        </p>

        <div class="text-center mb-4">
            @auth 
                <span class="text-green-600 font-bold">CONNECTÉ</span>
            @endauth

            @guest 
                <span class="text-red-600 font-bold">NON CONNECTÉ</span>
            @endguest
        </div>

    </div>

    <!-- BOUTONS -->
    <div class="flex justify-center gap-4 mt-8">

        @guest
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                Connexion
            </a>

            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300 transition">
                Inscription
            </a>
        @endguest

        @auth
            <a href="{{ route('dashboard') }}"
               class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                Accéder au tableau de bord
            </a>
        @endauth

    </div>

</div>
@endsection
