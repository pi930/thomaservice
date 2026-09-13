@extends('layouts.app')

@section('content')
<style>
/* Images fluides */
img {
    max-width: 100%;
    height: auto;
}

/* Responsive global */
@media(max-width: 900px) {

    /* Tous les conteneurs flex deviennent verticaux */
    div[style*="display:flex"] {
        flex-direction: column !important;
        gap: 30px !important;
        text-align: center !important;
    }

    /* Largeurs forcées → full width */
    div[style*="width:50%"],
    div[style*="width:40%"],
    div[style*="width:55%"],
    div[style*="width:33%"],
    div[style*="width:66%"] {
        width: 100% !important;
    }

    /* Titres */
    h1, h2, h3 {
        font-size: 26px !important;
        text-align: center !important;
    }

    /* Paragraphes */
    p {
        font-size: 18px !important;
        line-height: 1.6 !important;
        text-align: center !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    /* Boutons */
    a, button {
        width: 100% !important;
        display: block !important;
        text-align: center !important;
        margin-top: 10px !important;
    }

    /* Photos fixes → hauteur réduite */
    img[style*="height:350px"],
    img[style*="height:420px"] {
        height: 240px !important;
        object-fit: cover !important;
    }

    /* Footer */
    div[style*="text-align:center"] p {
        text-align: center !important;
    }
}
</style>


{{-- BLOC FOND BLANC : TEXTE GAUCHE + PHOTO DROITE --}}
<div style="width:100%; background:white; padding:60px 0;">
    <div style="width:100%; max-width:1400px; margin:auto; display:flex; justify-content:space-between; align-items:center; gap:40px; padding:0 40px; box-sizing:border-box;">

        {{-- TEXTE À GAUCHE --}}
        <div style="width:50%;">
            <h2 style="color:#66aaff; font-size:42px; font-weight:800; font-family:'Arial', sans-serif; letter-spacing:1px; margin-bottom:20px;">
                De l'épreuve à la création : mon livre publié
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7; margin-bottom:25px;">
                À travers mon parcours marqué par la maladie et les défis de la santé mentale, j’ai choisi de transformer
                ces épreuves en une œuvre écrite. Ce livre témoigne de mon cheminement, de la résilience et de la volonté
                d’apporter un soutien authentique à ceux qui traversent des souffrances invisibles.
            </p>

            {{-- BOUTON BLEU SOMBRE --}}
            <a href="{{ route('methode') }}"
               style="background:#1f3b57; color:white; padding:12px 25px; border-radius:10px; text-decoration:none; font-size:18px; font-weight:600;">
                Découvrir ma méthode
            </a>
        </div>

        {{-- PHOTO À DROITE --}}
        <div style="width:50%; text-align:right;">
            <img src="{{ asset('Documents/Screenshot 2026-09-09 at 23-20-15 Accueil - Éditeur - Webador.png') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

    </div>
</div>


{{-- BLOC FOND BLANC : PHOTO GAUCHE + TEXTE DROITE --}}
<div style="width:100%; background:white; padding:60px 0;">
    <div style="width:100%; max-width:1400px; margin:auto; display:flex; justify-content:space-between; align-items:center; gap:40px; padding:0 40px; box-sizing:border-box;">

        {{-- PHOTO À GAUCHE --}}
        <div style="width:50%;">
            <img src="{{ asset('Documents/7583935.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

        {{-- TEXTE À DROITE --}}
        <div style="width:50%;">
            <h2 style="color:#66aaff; font-size:42px; font-weight:800; font-family:'Arial', sans-serif; letter-spacing:1px; margin-bottom:20px;">
                La reprise d'études et mes lectures inspirantes
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7; margin-bottom:25px;">
                Lorsque mon état s'est amélioré, reprendre des études en informatique m'a permis de remobiliser ma pensée
                logique et rationnelle tout en stimulant mon imaginaire. En parallèle, de nombreuses lectures sur la santé
                mentale (« Je suis né un jour bleu », « Dialogue avec moi-même », « Veronika décide de mourir ») ainsi que
                des recherches documentaires m'ont enseigné que nul n'est seul dans la souffrance : chacun surmonte ses
                troubles à sa manière, sans jugement et avec un immense courage.
            </p>

            {{-- BOUTON BLEU SOMBRE --}}
            <a href="{{ route('home') }}"
               style="background:#1f3b57; color:white; padding:12px 25px; border-radius:10px; text-decoration:none; font-size:18px; font-weight:600;">
                Lire mes réflexions
            </a>
        </div>

    </div>
</div>


{{-- BLOC FOND BLANC : TEXTE GAUCHE + PHOTO DROITE --}}
<div style="width:100%; background:white; padding:60px 0;">
    <div style="width:100%; max-width:1400px; margin:auto; display:flex; justify-content:space-between; align-items:center; gap:40px; padding:0 40px; box-sizing:border-box;">

        {{-- TEXTE À GAUCHE --}}
        <div style="width:50%;">
            <h2 style="color:#66aaff; font-size:42px; font-weight:800; font-family:'Arial', sans-serif; letter-spacing:1px; margin-bottom:20px;">
                Une écoute authentique au service de votre autonomie
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7; margin-bottom:25px;">
                Ayant moi-même traversé ces épreuves, je comprends intimement la réalité et l'intensité des difficultés que peut
                vivre une personne en situation de handicap psychique ou mental. Je sais que ces obstacles ne sont pas
                insurmontables. En commençant par les gestes simples de la vie quotidienne au Cannet et dans ses environs,
                à un tarif accessible de 15 euros par heure payable en chèques CESU, nous avançons pas à pas vers un réel
                apaisement.
            </p>

            {{-- BOUTON BLEU SOMBRE --}}
            <a href="{{ route('services') }}"
               style="background:#1f3b57; color:white; padding:12px 25px; border-radius:10px; text-decoration:none; font-size:18px; font-weight:600;">
                Voir mes services
            </a>
        </div>

        {{-- PHOTO À DROITE --}}
        <div style="width:50%; text-align:right;">
            <img src="{{ asset('Documents/6953832.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

    </div>
</div>


{{-- BLOC BLEU SOMBRE : CITATION + SIGNATURE --}}
<div style="width:100%; background:#1f3b57; padding:60px 0; text-align:center;">
    <h2 style="color:white; font-size:40px; font-weight:800; font-family:'Arial', sans-serif; letter-spacing:1px; max-width:1000px; margin:auto; line-height:1.4; margin-bottom:25px;">
        "Vous n'êtes pas seul : des choses que l'on pensait impossibles peuvent s'accomplir dès lors que l'on se place
        à un niveau de sensibilité partagé et que l'on reste humble avec soi-même."
    </h2>

    <p style="color:white; font-size:20px; font-weight:600; margin-top:10px;">
        Thomaservice — Le Cannet
    </p>
</div>

@endsection
