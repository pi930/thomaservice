@extends('layouts.app')

@section('content')

<style>
    .login-wrapper {
        max-width: 450px;
        margin: 60px auto;
        background: #e6f0ff;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 6px 14px rgba(0,0,0,0.15);
    }

    /* Responsive smartphone */
    @media(max-width: 600px){

        .login-wrapper {
            margin: 20px;
            padding: 25px;
            border-radius: 14px;
        }

        .login-wrapper h2 {
            font-size: 24px !important;
            text-align: center !important;
        }

        .login-wrapper label {
            font-size: 18px !important;
        }

        .login-wrapper input {
            font-size: 18px !important;
            padding: 14px !important;
            width: 100% !important;
        }

        .login-wrapper button {
            font-size: 18px !important;
            padding: 14px !important;
            width: 100% !important;
            text-align: center !important;
        }

        /* Message d’erreur */
        .login-wrapper p {
            font-size: 16px !important;
            text-align: center !important;
        }
    }
</style>

<div class="login-wrapper">

    <h2 style="font-size:28px; margin-bottom:25px; text-align:center;">
        Connexion Administrateur
    </h2>

    @if($errors->any())
        <div style="background:#ffdddd; padding:10px; border-radius:8px; margin-bottom:20px;">
            <p style="color:#a00; font-size:14px;">{{ $errors->first() }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <label style="font-size:15px; font-weight:bold;">Email</label>
        <input type="email" name="email" required
            style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px;">

        <label style="font-size:15px; font-weight:bold;">Mot de passe</label>
        <input type="password" name="password" required
            style="width:100%; padding:12px; margin:10px 0 20px 0; border:2px solid #0033cc; border-radius:10px; font-size:15px;">

        <button style="
            width:100%;
            background:#0033cc;
            color:white;
            padding:12px;
            border:none;
            border-radius:50px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            box-shadow:0 6px 14px rgba(0,0,0,0.25);
        ">
            Se connecter
        </button>
    </form>

</div>

@endsection

