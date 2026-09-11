@extends('layouts.app')

@section('content')

<style>
    /* CONTENEUR GLOBAL */
    .contact-wrapper {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
        background: #e6f0ff;
        border-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 40px;
        flex-wrap: wrap; /* IMPORTANT pour smartphone */
    }

    /* COLONNE GAUCHE */
    .contact-left {
        width: 55%;
        min-width: 300px;
    }

    /* COLONNE DROITE (PHOTO) */
    .contact-right {
        width: 40%;
        min-width: 280px;
        position: relative;
    }

    .contact-right img {
        width: 100%;
        border-radius: 18px;
        box-shadow: 0 6px 14px rgba(0,0,0,0.25);
        filter: brightness(0.9) saturate(1.2);
    }

    /* BOUTONS SUR LA PHOTO */
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

    /* FORMULAIRE */
    .contact-form {
        background: white;
        padding: 25px;
        border-radius: 18px;
        box-shadow: 0 6px 14px rgba(0,0,0,0.15);
    }

    /* RESPONSIVE SMARTPHONE */
    @media(max-width: 900px) {
        .contact-left, .contact-right {
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

<div class="contact-wrapper">

    <!-- COLONNE GAUCHE -->
    <div class="contact-left">

        <h2 style="font-size:32px; margin-bottom:30px;">
            Contact – Parlez avec Thomas
        </h2>

        <p style="font-size:18px; color:#444; line-height:1.6; margin-bottom:25px;">
            Une question, un besoin d’accompagnement, une demande d’information ?
            Je vous réponds directement, sans intermédiaire.
        </p>

        <!-- FORMULAIRE -->
        <div class="contact-form">

            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <label style="font-size:15px; font-weight:bold; color:black;">Prénom et nom*</label>
                <input type="text" name="name" required
                    style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px;">

                <label style="font-size:15px; font-weight:bold; color:black;">Adresse email*</label>
                <input type="email" name="email" required
                    style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px;">

                <label style="font-size:15px; font-weight:bold; color:black;">Téléphone*</label>
                <input type="text" name="phone" required
                    style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px;">

                <label style="font-size:15px; font-weight:bold; color:black;">Votre demande*</label>
                <textarea name="content" required
                    style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px; height:120px;"></textarea>

                <button style="
                    background:#0033cc;
                    color:white;
                    padding:12px 25px;
                    border:none;
                    border-radius:50px;
                    font-size:16px;
                    font-weight:bold;
                    cursor:pointer;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                ">
                    Envoyer ma demande
                </button>
            </form>

        </div>

        <p style="font-size:18px; color:#444; margin-top:25px;">
            <strong>Téléphone :</strong> 07 43 33 44 24 — Disponible 7/7  
        </p>

        <p style="font-size:18px; color:#444;">
            <strong>Zone :</strong> Cannes – Grasse – Mougins & Alentours (06)
        </p>

    </div>

    <!-- COLONNE DROITE -->
    <div class="contact-right">
        <img src="/Documents/IMG-20250914-WA0000.jpg" alt="Thomas Pierrard">

        <div class="photo-buttons">
            <a href="/services">Mes services</a>
            <a href="/methode">Ma méthode</a>
        </div>
    </div>

</div>

@endsection
