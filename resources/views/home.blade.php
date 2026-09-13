@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<style>
/* Images fluides */
img {
    max-width: 100%;
    height: auto;
}

/* Flex → colonne sur mobile */
@media(max-width: 900px) {

    /* Tous les conteneurs flex deviennent verticaux */
    div[style*="display:flex"] {
        flex-direction: column !important;
        gap: 25px !important;
    }

    /* Largeurs forcées → deviennent full width */
    div[style*="width:33%"],
    div[style*="width:40%"],
    div[style*="width:55%"],
    div[style*="width:66%"],
    div[style*="width:50%"] {
        width: 100% !important;
    }

    /* Titres */
    h1, h2, h3 {
        text-align: center !important;
        font-size: 26px !important;
    }

    /* Paragraphes */
    p {
        font-size: 18px !important;
        line-height: 1.6 !important;
        text-align: center;
    }

    /* Boutons */
    a, button {
        width: 100% !important;
        text-align: center !important;
        display: block !important;
        margin-top: 10px !important;
    }

    /* Formulaire */
    form label {
        font-size: 18px !important;
    }

    form input,
    form textarea {
        font-size: 18px !important;
        padding: 14px !important;
        width: 100% !important;
    }

    /* Photo bannière */
    img[style*="height:420px"] {
        height: 260px !important;
    }

    /* Colonnes 3 services → verticales */
    div[style*="flex-wrap:nowrap"] {
        flex-wrap: wrap !important;
    }

    /* Carrés témoignages */
    div[style*="width:33%"] {
        width: 100% !important;
    }

    /* Photo + texte (parcours) */
    div[style*="width:40%"],
    div[style*="width:55%"] {
        width: 100% !important;
    }

    /* Footer */
    footer p {
        text-align: center !important;
    }
}
</style>


{{-- BANNIÈRE PHOTO FULL WIDTH AVEC TEXTE À GAUCHE --}}
<div style="width:100%; position:relative;">

    {{-- PHOTO FULL WIDTH --}}
    <img src="{{ asset('Documents/Screenshot 2026-09-09 at 23-10-57 Accueil - Éditeur - Webador.png') }}"
         style="width:100%; height:420px; object-fit:cover; display:block;">

    {{-- TEXTE SUR LA PHOTO --}}
    <div style="
        position:absolute;
        top:30px;
        left:40px;
        width:50%; /* ⭐ moitié gauche seulement */
        color:white;
    ">

        {{-- TITRE BLANC GROS --}}
        <h1 style="font-size:42px; font-weight:700; margin:0 0 20px 0;">
            Accompagnement, autonomie et bien-être à Le Cannet
        </h1>

        {{-- TEXTE BLANC --}}
        <p style="font-size:20px; line-height:1.6; margin-bottom:25px;">
            Bienvenue chez Thomaservice. Fort de mon parcours personnel et d'un ouvrage publié sur mon expérience de la maladie,
            je vous propose un accompagnement bienveillant pour acquérir plus d'autonomie au quotidien et soulager vos difficultés.
        </p>

        {{-- BOUTONS BLEUTÉS --}}
        <div style="display:flex; gap:15px; flex-wrap:wrap;">

            <a href="{{ route('services') }}"
               style="background:#66aaff; color:white; padding:12px 22px; border-radius:10px; text-decoration:none; font-size:18px;">
                Découvrir mes services
            </a>

            <a href="{{ route('methode') }}"
               style="background:#88bbff; color:white; padding:12px 22px; border-radius:10px; text-decoration:none; font-size:18px;">
                En savoir plus
            </a>

        </div>

    </div>

</div>

{{-- BLOC BLANC : TEXTE 2/3 + ESPACE 1/3 (ESPACE RÉDUIT) --}}
<div style="width:100%; background:white; padding:40px 0; margin-bottom:20px;">

    <div style="
        width:100%;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:30px;
        padding:0 40px;
        box-sizing:border-box;
    ">

        {{-- TEXTE (2/3) --}}
        <div style="width:66%;">

            <h2 style="color:#66aaff; font-size:30px; margin-bottom:15px;">
                Un soutien adapté à chaque étape
            </h2>

            <p style="font-size:18px; color:#555; line-height:1.7;">
                Mon approche repose sur une relation de confiance. Nous commençons par l'aide aux tâches de la vie quotidienne pour
                construire des bases solides, puis nous avançons vers le soulagement des souffrances plus profondes.
            </p>

        </div>

        {{-- ESPACE À DROITE (1/3) --}}
        <div style="width:33%; min-height:120px;">
        </div>

    </div>

</div>

{{-- BLOC BLANC FULL WIDTH 3 COLONNES ALIGNÉES (ESPACE RÉDUIT) --}}
<div style="width:100%; background:white; padding:40px 0;">

    <div style="
        width:100%;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:20px;
        padding:0 40px;
        box-sizing:border-box;
        flex-wrap:nowrap; /* ⭐ FORCE LES 3 COLONNES SUR UNE SEULE LIGNE */
    ">

        {{-- COLONNE 1 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/Screenshot 2026-09-09 at 22-32-03 Accueil - Éditeur - Webador.png') }}"
                 style="width:100%; height:180px; object-fit:cover; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.15);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:15px;">
                Aide quotidienne
            </h3>

            <p style="font-size:17px; color:#555; line-height:1.6;">
                Assistance pratique pour la réalisation des tâches courantes et le maintien de l'autonomie au domicile.
            </p>

            <a href="{{ route('methode') }}"
               style="display:inline-block; margin-top:12px; background:#66aaff; color:white; padding:10px 20px; border-radius:10px; text-decoration:none;">
                Voir la méthode
            </a>
        </div>

        {{-- COLONNE 2 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/Screenshot 2026-09-09 at 22-38-42 Accueil - Éditeur - Webador.png') }}"
                 style="width:100%; height:180px; object-fit:cover; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.15);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:15px;">
                Une écoute bienveillante
            </h3>

            <p style="font-size:17px; color:#555; line-height:1.6;">
                Une prise en charge globale combinant écoute et un accompagnement basé sur du vécu.
            </p>

            <a href="{{ route('services') }}"
               style="display:inline-block; margin-top:12px; background:#66aaff; color:white; padding:10px 20px; border-radius:10px; text-decoration:none;">
                Nos services
            </a>
        </div>

        {{-- COLONNE 3 --}}
        <div style="width:33%; text-align:center;">
            <img src="{{ asset('Documents/Screenshot 2026-09-09 at 22-44-00 Accueil - Éditeur - Webador.png') }}"
                 style="width:100%; height:180px; object-fit:cover; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.15);">

            <h3 style="color:#66aaff; font-size:26px; margin-top:15px;">
                Tarifs & CESU
            </h3>

            <p style="font-size:17px; color:#555; line-height:1.6;">
                Un tarif accessible de 15 € de l'heure avec la possibilité de régler directement par chèques CESU.
            </p>

            <a href="{{ route('tarifs') }}"
               style="display:inline-block; margin-top:12px; background:#66aaff; color:white; padding:10px 20px; border-radius:10px; text-decoration:none;">
                Consulter les tarifs
            </a>
        </div>

    </div>

</div>


{{-- BLOC BLANC : PHOTO GAUCHE + TEXTE DROITE (ESPACE RÉDUIT) --}}
<div style="width:100%; background:white; padding:30px 0;">

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
        <div style="width:40%;">
            <img src="{{ asset('Documents/Screenshot 2026-09-09 at 23-20-15 Accueil - Éditeur - Webador.png') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
        </div>

        {{-- TEXTE À DROITE (ESPACE RÉDUIT) --}}
        <div style="width:55%;">

            <h2 style="color:#66aaff; font-size:30px; margin-bottom:20px;">
                Mon histoire et mon engagement
            </h2>

            <p style="font-size:18px; color:#333; line-height:1.7; margin-bottom:25px;">
                Ayant écrit un livre édité sur ma propre expérience de la maladie, repris ultérieurement dans le cadre d'études,
                j'ai consacré une grande partie de ma vie à comprendre les mécanismes de la santé mentale. Inspiré par des ouvrages
                fondateurs comme <i>Je suis né un jour bleu</i>, <i>Dialogue avec moi-même</i> ou <i>Veronika décide de mourir</i>,
                je mets mon vécu au service de ceux qui traversent de grandes souffrances.
            </p>

            <a href="{{ route('parcours') }}"
               style="background:#66aaff; color:white; padding:12px 20px; border-radius:10px; text-decoration:none; font-size:18px;">
                Découvrir mon parcours
            </a>

        </div>

    </div>

</div>


{{-- BLOC FULL WIDTH : TITRE BLEUTÉ + TEXTE NOIR CENTRÉ (ESPACE RÉDUIT) --}}
<div style="width:100%; background:white; padding:30px 0; text-align:center;">

    <h2 style="color:#66aaff; font-size:34px; margin-bottom:15px;">
        Transformer le vécu en soutien concret
    </h2>

    <p style="font-size:20px; color:#333; line-height:1.7; max-width:900px; margin:auto;">
        Mon objectif est de libérer les pensées, d'accompagner pas à pas les personnes en situation de handicap
        et de favoriser leur autonomie avec douceur et bienveillance.
    </p>

</div>
{{-- PHOTO FULL WIDTH ENTRE LES BLOCS --}}
<div style="width:100%; margin:20px 0;">
    <img src="{{ asset('Documents/Screenshot 2026-09-09 at 23-35-46 Accueil - Éditeur - Webador.png') }}"
         style="width:100%; height:350px; object-fit:cover; display:block;">
</div>
{{-- BLOC 3 CARRÉS BLANCS AVEC ROND BLEU ET GUILLEMETS --}}
<div style="width:100%; background:white; padding:40px 0;">

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

        {{-- CARRE 1 --}}
        <div style="
            width:33%;
            background:white;
            border-radius:16px;
            padding:30px;
            box-shadow:0 4px 12px rgba(0,0,0,0.12);
            text-align:center;
        ">

            {{-- ROND BLEU --}}
            <div style="
                width:70px;
                height:70px;
                background:#66aaff;
                border-radius:50%;
                margin:auto;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:40px;
                color:white;
                font-weight:bold;
            ">
                “
            </div>

            {{-- TEXTE --}}
            <p style="color:#333; font-size:18px; line-height:1.6; margin-top:20px;">
                L'accompagnement au quotidien m'a permis de retrouver une vraie autonomie et une écoute sans aucun jugement.
            </p>

        </div>

        {{-- CARRE 2 --}}
        <div style="
            width:33%;
            background:white;
            border-radius:16px;
            padding:30px;
            box-shadow:0 4px 12px rgba(0,0,0,0.12);
            text-align:center;
        ">

            {{-- ROND BLEU --}}
            <div style="
                width:70px;
                height:70px;
                background:#66aaff;
                border-radius:50%;
                margin:auto;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:40px;
                color:white;
                font-weight:bold;
            ">
                “
            </div>

            {{-- TEXTE --}}
            <p style="color:#333; font-size:18px; line-height:1.6; margin-top:20px;">
                Une approche très humaine qui soulage les moments difficiles. Le paiement par CESU simplifie grandement les démarches.
            </p>

        </div>

        {{-- CARRE 3 --}}
        <div style="
            width:33%;
            background:white;
            border-radius:16px;
            padding:30px;
            box-shadow:0 4px 12px rgba(0,0,0,0.12);
            text-align:center;
        ">

            {{-- ROND BLEU --}}
            <div style="
                width:70px;
                height:70px;
                background:#66aaff;
                border-radius:50%;
                margin:auto;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:40px;
                color:white;
                font-weight:bold;
            ">
                “
            </div>

            {{-- TEXTE --}}
            <p style="color:#333; font-size:18px; line-height:1.6; margin-top:20px;">
                Une aide précieuse pour faire sortir les pensées et avancer sereinement chaque jour.
            </p>

        </div>

    </div>

</div>

{{-- BLOC BLEU SOMBRE : TITRE + TEXTE + BOUTON EN BLANC --}}
<div style="width:100%; background:#1f3b57; padding:50px 0; text-align:center;">

    {{-- TITRE EN BLANC --}}
    <h2 style="color:white; font-size:34px; margin-bottom:20px;">
        Un tarif transparent et abordable
    </h2>

    {{-- TEXTE EN BLANC --}}
    <p style="font-size:20px; color:white; line-height:1.7; max-width:900px; margin:auto; margin-bottom:25px;">
        Mes prestations sont proposées au tarif unique de 15 € de l'heure. J'accepte les paiements par chèques CESU pour vous
        faciliter l'accès à un accompagnement de qualité à Le Cannet et ses environs.
    </p>

    {{-- BOUTON EN BLANC --}}
    <a href="{{ route('tarifs') }}"
       style="background:white; color:#1f3b57; padding:12px 24px; border-radius:10px; text-decoration:none; font-size:18px; font-weight:600;">
        En savoir plus sur les tarifs
    </a>

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
    Contactez-moi
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

            {{-- ICÔNES FACEBOOK & INSTAGRAM (TES FICHIERS) --}}
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


</div>

@endsection
