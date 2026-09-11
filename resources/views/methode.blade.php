@extends('layouts.app')

@section('content')

{{-- BLOC GRIS CLAIR : APPROCHE HUMAINE --}}
<div style="width:100%; background:#f2f2f2; padding:60px 0; text-align:center;">

    {{-- TITRE BLEUTÉ (GROS) --}}
    <h2 style="
        color:#66aaff;
        font-size:40px;
        font-weight:800;
        font-family:'Arial', sans-serif;
        letter-spacing:1px;
        margin-bottom:25px;
    ">
        Une approche humaine fondée sur l'expérience et le partage
    </h2>

    {{-- TEXTE NOIR (PLUS PETIT) --}}
    <p style="
        color:#333;
        font-size:18px;
        line-height:1.7;
        max-width:900px;
        margin:auto;
    ">
        Chez Thomaservice au Cannet, ma méthode repose sur une compréhension authentique du handicap et des difficultés psychiques.
        Ayant moi-même surmonté la maladie, écrit un livre sur mon parcours et étudié de nombreux ouvrages sur la santé mentale,
        je propose un accompagnement progressif, bienveillant et concret à 15 € de l'heure, payable par chèques CESU.
    </p>

</div>

{{-- BLOC BLANC : TEXTE GAUCHE + PHOTO DROITE --}}
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

           <h2 style="
    color:#1f3b57;
    font-size:40px;
    font-weight:800;
    margin-bottom:20px;
">
    La première rencontre et le quotidien partagé
</h2>


            <p style="color:#333; font-size:18px; line-height:1.7;">
                Tout commence en douceur par les gestes simples de la vie de tous les jours. Je vous aide concrètement dans
                le ménage, l'entretien du logement et les courses. Puis, nous partageons un bon repas préparé ensemble.
                Dans ce moment simple et rassurant, nous échangeons sur vos musiques préférées et prenons le temps de nous
                découvrir : « Tu vois, on est mieux à deux ! ».  
                C'est cette complicité initiale qui permet de voir si le courant passe naturellement.
            </p>

        </div>

        {{-- PHOTO À DROITE --}}
        <div style="width:50%; text-align:right;">
            <img src="{{ asset('Documents/4058223.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px;
                        box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

    </div>

</div>
{{-- BLOC BLANC : PHOTO GAUCHE + TEXTE DROITE --}}
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
            <img src="{{ asset('Documents/5553117.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px;
                        box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

        {{-- TEXTE À DROITE --}}
        <div style="width:50%;">

           <h2 style="
    color:#1f3b57;
    font-size:40px;
    font-weight:800;
    margin-bottom:20px;
">
    L'écoute profonde et la prise de conscience
</h2>


            <p style="color:#333; font-size:18px; line-height:1.7;">
                Lorsque le lien de confiance est établi, nous franchissons une nouvelle étape. Je vous propose de vous
                accompagner dans un endroit calme pour vous offrir un espace d'expression libre et confidentiel.
                Sur le ton de l'humour ou avec une bienveillance stimulante, je cherche à vous piquer au vif pour vous faire
                réaliser votre immense valeur personnelle, faire émerger un sourire et soulager les lourdes souffrances
                intérieures qui vous pèsent.
            </p>

        </div>

    </div>

</div>
{{-- BLOC BLANC : TEXTE GAUCHE + PHOTO DROITE --}}
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

            <h2 style="
                color:#66aaff;
                font-size:40px;
                font-weight:800;
                margin-bottom:20px;
            ">
                Une compréhension unique de chaque sensibilité
            </h2>

            <p style="color:#333; font-size:18px; line-height:1.7;">
                Nourri par mes lectures spécialisées et mon propre vécu, je sais qu'un trouble bipolaire n'est pas l'autisme,
                qu'une femme n'est pas un homme, mais que chacun porte en lui un fardeau à exprimer.  
                Mon objectif est d'offrir un soutien moral, affectif, administratif et quotidien.  
                Devenir cet ami de confiance à qui se confier sans jugement, pour progresser ensemble vers une véritable autonomie.
            </p>

        </div>

        {{-- PHOTO À DROITE --}}
        <div style="width:50%; text-align:right;">
            <img src="{{ asset('Documents/7413995.webp') }}"
                 style="width:100%; height:350px; object-fit:cover; border-radius:12px;
                        box-shadow:0 4px 12px rgba(0,0,0,0.12);">
        </div>

    </div>

</div>
<div style="width:100%; background:white; padding:20px 0; text-align:center;">
  <p style="color:#1f3b57; font-size:16px; font-weight:bold; margin:0;">
    © 2026 Thomaservice
</p>

</div>



@endsection
