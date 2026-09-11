@extends('layouts.app')

@section('content')

{{-- BLOC GRIS CLAIR : TARIFS & CESU --}}
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
        Tarifs clairs et règlement par CESU
    </h2>

    {{-- TEXTE NOIR (PLUS PETIT) --}}
    <p style="
        color:#333;
        font-size:18px;
        line-height:1.7;
        max-width:900px;
        margin:auto;
    ">
        Chez Thomaservice au Cannet, la transparence et la simplicité sont essentielles.
        Je vous propose un accompagnement personnalisé pour le développement de votre autonomie
        et la gestion du quotidien, avec un tarif horaire unique et accessible grâce au dispositif
        CESU en ligne.
    </p>

</div>

{{-- BLOC BLANC : GRILLE TARIFAIRE --}}
<div style="width:100%; background:white; padding:60px 0; text-align:center;">

    <h2 style="
        color:#66aaff;
        font-size:40px;
        font-weight:800;
        margin-bottom:25px;
    ">
        Grille tarifaire et avantages fiscaux
    </h2>

    <p style="
        color:#333;
        font-size:18px;
        line-height:1.7;
        max-width:900px;
        margin:auto;
        margin-bottom:40px;
    ">
        Bénéficiez d'une tarification directe sans engagement forfaitaire, complétée par l'avantage du crédit d'impôt immédiat
        pour vos prestations à domicile.
    </p>
    {{-- TABLEAU TARIFAIRE --}}
   <table style="width:70%; max-width:800px; margin:auto; border-collapse:collapse;">


        {{-- LIGNE BLEUTÉE --}}
        <tr style="background:#66aaff; color:white;">
            <th style="padding:15px; font-size:20px; text-align:left;">Prestation d'accompagnement</th>
            <th style="padding:15px; font-size:20px; text-align:right;">Tarif</th>
        </tr>

        {{-- LIGNE 1 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Aide à l'autonomie et tâches quotidiennes (par heure)</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">15,00 €</td>
        </tr>

        {{-- LIGNE 2 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Frais de déplacement ou suppléments</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Aucun</td>
        </tr>

        {{-- LIGNE 3 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Engagement forfaitaire obligatoire</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Aucun</td>
        </tr>

        {{-- LIGNE 4 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Durée minimale d'intervention imposée</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Aucune</td>
        </tr>

        {{-- ESPACE --}}
        <tr><td colspan="2" style="padding:20px;"></td></tr>

        {{-- LIGNE BLEUTÉE 2 --}}
        <tr style="background:#66aaff; color:white;">
            <th style="padding:15px; font-size:20px; text-align:left;">Paiement par CESU en ligne</th>
            <th style="padding:15px; font-size:20px; text-align:right;">Détails</th>
        </tr>

        {{-- LIGNE CESU 1 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Mode de règlement accepté</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Déclaration CESU en ligne</td>
        </tr>

        {{-- LIGNE CESU 2 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Crédit ou déduction d'impôt</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">50 % de réduction fiscale</td>
        </tr>

        {{-- LIGNE CESU 3 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Coût réel effectif après avantage fiscal (par heure)</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">7,50 €</td>
        </tr>

        {{-- LIGNE CESU 4 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Gestion administrative</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Simple, dématérialisée et sécurisée</td>
        </tr>

    </table>

</div>
{{-- BLOC TABLEAU 2 --}}
<div style="width:100%; background:white; padding:60px 0; text-align:center;">

   <table style="width:70%; max-width:800px; margin:auto; border-collapse:collapse;">


        {{-- LIGNE BLEUTÉE --}}
        <tr style="background:#66aaff; color:white;">
            <th style="padding:15px; font-size:20px; text-align:left;">Premiers pas ensemble</th>
            <th style="padding:15px; font-size:20px; text-align:right;">Modalités</th>
        </tr>

        {{-- LIGNE 1 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Premier contact d'évaluation</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Gratuit</td>
        </tr>

        {{-- LIGNE 2 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Rencontre préalable sans engagement</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">0,00 €</td>
        </tr>

        {{-- LIGNE 3 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Zone d'intervention principale</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Cannes et environs</td>
        </tr>

        {{-- LIGNE 4 --}}
        <tr style="background:white; border:2px solid #000;">
            <td style="padding:15px; font-size:18px; color:#333;">Accompagnement personnalisé</td>
            <td style="padding:15px; font-size:18px; color:#333; text-align:right;">Inclus</td>
        </tr>

    </table>

</div>
<div style="width:100%; background:#1f3b57; padding:40px 0; text-align:center;">

    <h2 style="
        color:white;
        font-size:32px;
        font-weight:800;
        margin-bottom:20px;
    ">
        Faisons connaissance en toute simplicité
    </h2>

    <p style="
        color:white;
        font-size:18px;
        line-height:1.6;
        max-width:700px;
        margin:auto;
        margin-bottom:25px;
    ">
        Avant d'entamer tout accompagnement, je vous invite à convenir d'une première rencontre gratuite.
        Ce moment d'échange permet de voir si le courant passe naturellement, de cerner vos besoins au Cannet
        et de poser ensemble les bases d'un chemin vers une meilleure autonomie.
    </p>

    <p style="
        color:white;
        font-size:16px;
        font-weight:600;
        margin-top:10px;
    ">
        © 2026 Thomaservice
    </p>

</div>


@endsection

