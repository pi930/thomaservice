@extends('layouts.app')

@section('content')

<style>
    .blog-wrapper {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
        background: #e6f0ff;
        border-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 40px;
        flex-wrap: wrap; /* RESPONSIVE */
    }

    .blog-left {
        width: 55%;
        min-width: 300px;
    }

    .blog-right {
        width: 40%;
        min-width: 280px;
        position: relative;
    }

    .blog-right img {
        width: 100%;
        border-radius: 18px;
        box-shadow: 0 6px 14px rgba(0,0,0,0.25);
        filter: brightness(0.9) saturate(1.2);
    }

    .photo-buttons {
        position: absolute;
        bottom: 20px;
        left: 20px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .photo-buttons a {
        background: #0033cc;
        color: white;
        padding: 12px 22px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        white-space: nowrap;
    }

    .photo-buttons a:nth-child(2) {
        background: #0055ff;
    }

    /* RESPONSIVE */
    @media(max-width: 900px) {
        .blog-left, .blog-right {
            width: 100%;
        }

        .photo-buttons {
            position: static;
            margin-top: 20px;
            justify-content: center;
        }

        .photo-buttons a {
            width: 100%;
            text-align: center;
        }
    }

    @media(max-width: 600px) {
        h2 {
            font-size: 26px !important;
        }
    }
</style>

<div class="blog-wrapper">

    <!-- TEXTE À GAUCHE -->
    <div class="blog-left">

        <h2 style="font-size:32px; margin-bottom:30px;">
            Blog – Réflexions et Expérience
        </h2>

        <h3 style="font-size:22px; margin-bottom:10px; color:#0033cc;">
            Accompagner les pensées erronées
        </h3>
        <p style="font-size:18px; color:#444; line-height:1.6;">
            Beaucoup de personnes en souffrance mentale vivent avec des pensées déformées.
        </p>

        <h3 style="font-size:22px; margin-top:25px; margin-bottom:10px; color:#0033cc;">
            Être à côté, jamais devant
        </h3>
        <p style="font-size:18px; color:#444; line-height:1.6;">
            Je ne dirige pas, je n’impose pas. Je marche à côté.
        </p>

        <h3 style="font-size:22px; margin-top:25px; margin-bottom:10px; color:#0033cc;">
            Mettre en mots la maladie
        </h3>
        <p style="font-size:18px; color:#444; line-height:1.6;">
            Parler de sa maladie permet de transformer la souffrance en compréhension.
        </p>

    </div>

    <!-- PHOTO À DROITE -->
    <div class="blog-right">
        <img src="/Documents/IMG-20250914-WA0000.jpg" alt="Thomas Pierrard">

        <div class="photo-buttons">
            <a href="/services">Mes services</a>
            <a href="/methode">En savoir plus</a>
        </div>
    </div>

</div>

@endsection
