@extends('layouts.app')
@section('content')


{{-- BLOC BLEU SOMBRE : TITRE + TEXTE + BOUTON --}}
<div style="width:100%; background:#1f3b57; padding:60px 0; text-align:center;">

    {{-- TITRE EN BLANC (GROS) --}}
    <h2 style="color:white; font-size:40px; font-weight:700; margin-bottom:25px;">
        Un accompagnement bienveillant vers l’autonomie
    </h2>

    {{-- TEXTE EN BLANC (PLUS PETIT) --}}
    <p style="
        color:white;
        font-size:20px;
        line-height:1.7;
        max-width:900px;
        margin:auto;
        margin-bottom:35px;
    ">
        Chez Thomaservice au Cannet, j'accompagne les personnes en situation de handicap invisible ou rencontrant des troubles
        de santé mentale. Par une aide concrète aux gestes du quotidien et une écoute attentive nourrie de mon propre vécu,
        avançons pas à pas vers un réel mieux-être, à votre rythme.
    </p>

    {{-- BOUTON BLANC TEXTE NOIR --}}
    <a href="{{ route('tarifs') }}"
       style="
            background:white;
            color:black;
            padding:14px 28px;
            border-radius:10px;
            text-decoration:none;
            font-size:18px;
            font-weight:600;
       ">
        Découvrir nos tarifs
    </a>

</div>

{{-- BLOC DOMAINES D'INTERVENTION --}}
<div style="width:100%; background:white; padding:60px 0;">

 {{-- TITRE BLEU (ALIGNÉ À GAUCHE, HAUTEUR RÉDUITE) --}}
<h2 style="color:#1f3b57; font-size:32px; text-align:left; margin-bottom:20px; padding-left:40px;">
    Mes domaines d'intervention
</h2>


{{-- TEXTE INTRODUCTIF (ALIGNÉ À GAUCHE, PLUS COMPACT) --}}
<p style="
    color:#333;
    font-size:18px;
    line-height:1.6;
    max-width:1000px;
    margin-left:40px;
    margin-bottom:30px;
">
    Je propose une aide personnalisée adaptée aux besoins des personnes vivant avec un handicap invisible ou psychique,
    sans condition de durée minimale et payable en chèques CESU au tarif accessible de 15 € de l'heure.
</p>


    {{-- 3 CARTES ALIGNÉES --}}
    <div style="
        width:100%;
        max-width:1400px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        gap:30px;
        padding:0 40px;
        box-sizing:border-box;
    ">

        {{-- CARTE 1 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/1459102.webp') }}"
                 style="width:100%; height:260px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:20px;">
                Aide aux courses
            </h3>

            <p style="color:#333; font-size:17px; line-height:1.6; margin-top:10px;">
                Je vous assiste ou réalise vos courses alimentaires et de première nécessité pour alléger la charge mentale
                et faciliter votre vie à domicile en toute sérénité.
            </p>
        </div>

        {{-- CARTE 2 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/6195120.webp') }}"
                 style="width:100%; height:260px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:20px;">
                Ménage et entretien
            </h3>

            <p style="color:#333; font-size:17px; line-height:1.6; margin-top:10px;">
                Un soutien actif pour garder un espace de vie propre et agréable. Prendre soin de son intérieur est une première
                étape essentielle pour retrouver apaisement et clarté.
            </p>
        </div>

        {{-- CARTE 3 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/17047405.webp') }}"
                 style="width:100%; height:260px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:20px;">
                Sorties et promenades
            </h3>

            <p style="color:#333; font-size:17px; line-height:1.6; margin-top:10px;">
                Sortir de chez soi, prendre l'air ou accomplir un trajet extérieur en se sentant soutenu et en sécurité,
                pour renouer progressivement avec le monde extérieur.
            </p>
        </div>

    </div>

    {{-- BOUTON BLEU EN BAS --}}
    <div style="text-align:center; margin-top:50px;">
        <a href="{{ route('methode') }}"
   style="
        background:#1f3b57;
        color:white;
        padding:14px 28px;
        border-radius:10px;
        text-decoration:none;
        font-size:18px;
        font-weight:600;
   ">
    En savoir plus sur ma méthode
</a>

    </div>

</div>

{{-- BLOC FOND GRIS CLAIR --}}
<div style="width:100%; background:#f2f2f2; padding:50px 0; text-align:center;">

    {{-- TITRE BLEU --}}
    <h2 style="color:#66aaff; font-size:36px; font-weight:700; margin-bottom:25px;">
        Une démarche fondée sur la douceur et la confiance
    </h2>

    {{-- TEXTE NOIR (LES DEUX PHRASES ENSEMBLE) --}}
    <p style="
        color:#333;
        font-size:18px;
        line-height:1.6;
        max-width:900px;
        margin:auto;
    ">
        L'accompagnement commence toujours par une brève présentation et une aide matérielle directe.
        Cette présence simple permet de créer un lien de confiance naturel avant d'ouvrir un espace de parole pour exprimer
        les difficultés intérieures et chercher ensemble des solutions concrètes.
    </p>

</div>



{{-- BLOC FOND BLANC : TEXTE GAUCHE + PHOTO DROITE --}}
<div style="width:100%; background:white; padding:60px 0;">

    <div style="
        width:100%;
        max-width:1400px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:40px;
        padding:0 40px;
        box-sizing:border-box;
    ">

        {{-- TEXTE À GAUCHE --}}
        <div style="width:50%;">

            <h2 style="color:#66aaff; font-size:36px; font-weight:700; margin-bottom:20px;">
                Écoute et soulagement des souffrances
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7;">
                Lorsque le lien de confiance est installé, nous prenons le temps d'échanger. Ayant moi-même surmonté la maladie
                et écrit sur ce chemin, je comprends la lourdeur des handicaps invisibles et des souffrances psychologiques.
                Mon rôle est de vous écouter sans jugement et de chercher ensemble comment alléger votre fardeau quotidien.
            </p>

        </div>

        {{-- PHOTO À DROITE --}}
        <div style="width:50%; text-align:right;">
            <img src="{{ asset('Documents/8560009.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

    </div>

</div>

{{-- BLOC FOND BLANC : PHOTO GAUCHE + TEXTE DROITE --}}
<div style="width:100%; background:white; padding:60px 0;">

    <div style="
        width:100%;
        max-width:1400px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:40px;
        padding:0 40px;
        box-sizing:border-box;
    ">

        {{-- PHOTO À GAUCHE --}}
        <div style="width:50%;">
            <img src="{{ asset('Documents/14465804.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

        {{-- TEXTE À DROITE --}}
        <div style="width:50%;">

            <h2 style="color:#66aaff; font-size:36px; font-weight:700; margin-bottom:20px;">
                Modalités simples et transparentes
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7;">
                Mes interventions sont facturées au tarif unique de 15 € par heure, sans aucun nombre minimal d'heures imposé.
                Vous pouvez régler facilement par chèque CESU, ouvrant droit aux avantages fiscaux pour les services à la
                personne au Cannet et dans ses environs.
            </p>

        </div>

    </div>

</div>
{{-- BLOC CONTACT BLANC --}}
<div style="width:100%; background:white; padding:60px 0;">

    <div style="
        width:100%;
        max-width:1400px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:40px;
        padding:0 40px;
        box-sizing:border-box;
    ">

        {{-- FORMULAIRE À GAUCHE --}}
        <div style="width:55%;">

            <h2 style="color:#1f3b57; font-size:34px; margin-bottom:25px;">
    Demander un premier rendez-vous
</h2>


            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <label style="color:black; font-size:18px; font-weight:bold;">Nom</label>
                <input type="text" name="name" required
                       style="width:100%; padding:12px; margin:10px 0 20px 0; border-radius:10px; border:2px solid #66aaff; font-size:16px;">

                <label style="color:black; font-size:18px; font-weight:bold;">Adresse email</label>
                <input type="email" name="email" required
                       style="width:100%; padding:12px; margin:10px 0 20px 0; border-radius:10px; border:2px solid #66aaff; font-size:16px;">

                {{-- CHAMP TÉLÉPHONE --}}
                <label style="color:black; font-size:18px; font-weight:bold;">Téléphone</label>
                <input type="text" name="phone" required
                       style="width:100%; padding:12px; margin:10px 0 20px 0; border-radius:10px; border:2px solid #66aaff; font-size:16px;">

                <label style="color:black; font-size:18px; font-weight:bold;">Message</label>
                <textarea name="message" required
                          style="width:100%; padding:12px; margin:10px 0 20px 0; border-radius:10px; border:2px solid #66aaff; font-size:16px; height:140px;"></textarea>

                <button style="
                    background:#66aaff;
                    color:white;
                    padding:12px 25px;
                    border:none;
                    border-radius:10px;
                    font-size:18px;
                    font-weight:bold;
                    cursor:pointer;
                ">
                    Envoyer le formulaire
                </button>
            </form>

        </div>

        {{-- INFORMATIONS À DROITE --}}
        <div style="width:40%; text-align:left;">

            <h3 style="color:#66aaff; font-size:28px; margin-bottom:15px;">
                Localisation
            </h3>

            <p style="color:black; font-size:20px; font-weight:bold; margin-bottom:10px;">
                THOMASERVICE
            </p>

            <p style="color:black; font-size:18px; margin-bottom:8px;">
                Tel : 07 43 33 44 24
            </p>

            <p style="color:black; font-size:18px; margin-bottom:20px;">
                Mail : contact@thomaservice.fr
            </p>

            {{-- ICÔNES FACEBOOK & INSTAGRAM --}}
            <div style="display:flex; gap:20px; margin-top:10px;">

                <a href="https://facebook.com" target="_blank" style="display:inline-block;">
                    <img src="{{ asset('Documents/logo_facebook.png') }}"
                         alt="Facebook"
                         style="width:40px; height:40px;">
                </a>

                <a href="https://instagram.com" target="_blank" style="display:inline-block;">
                    <img src="{{ asset('Documents/logo_instagram.png') }}"
                         alt="Instagram"
                         style="width:40px; height:40px;">
                </a>

            </div>

        </div>

    </div>

</div>

{{-- FOOTER --}}
<div style="width:100%; background:white; padding:20px 0; text-align:center;">
    <p style="color:#66aaff; font-size:16px; font-weight:bold; margin:0;">
        © 2026 Thomaservice
    </p>
</div>

@endsection
            
        
