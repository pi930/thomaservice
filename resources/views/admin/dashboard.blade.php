@extends('layouts.app')

@section('content')

<style>
    .admin-wrapper {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
    }

    /* Boutons admin */
    .admin-links {
        margin-bottom: 25px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .admin-links a,
    .admin-links button {
        padding: 12px 20px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        border: none;
        cursor: pointer;
        display: inline-block;
    }

    /* Table */
    table {
        width: 100%;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        overflow: hidden;
    }

    th, td {
        padding: 15px;
        font-size: 15px;
        border-bottom: 1px solid #eee;
    }

    th {
        background: #0033cc;
        color: white;
        text-align: left;
    }

    /* Responsive smartphone */
    @media(max-width: 800px){

        .admin-wrapper {
            padding: 20px 10px;
        }

        /* Liens admin → full width */
        .admin-links a,
        .admin-links button {
            width: 100%;
            text-align: center;
            font-size: 17px;
            padding: 14px;
        }

        /* Tableau en mode carte */
        table, thead, tbody, th, td, tr {
            display: block;
            width: 100%;
        }

        thead {
            display: none;
        }

        tr {
            margin-bottom: 20px;
            background: #f9f9f9;
            border-radius: 12px;
            padding: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        td {
            border-bottom: none;
            padding: 12px 8px;
            font-size: 16px;
        }

        /* Champs formulaire dans tableau */
        input[type="datetime-local"] {
            font-size: 16px;
            padding: 12px;
            width: 100%;
        }

        label {
            font-size: 16px;
            display: block;
            margin-top: 10px;
        }

        /* Bouton Mettre à jour */
        td button {
            width: 100%;
            font-size: 17px !important;
            padding: 14px !important;
            margin-top: 12px;
        }

        /* Lien contacter */
        td a {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 17px;
            margin-top: 10px;
        }
    }
</style>

<div class="admin-wrapper">

    <!-- Liens admin -->
    <div class="admin-links">

        <a href="{{ route('admin.dashboard') }}"
           style="background:#0033cc; color:white;">
            Tableau de bord
        </a>

        <a href="{{ route('admin.calendar') }}"
           style="background:#0055ff; color:white;">
            Calendrier des rendez-vous
        </a>

        <a href="/"
           style="background:#0099ff; color:white;">
            Retour au site
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button style="background:#cc0000; color:white;">
                Déconnexion
            </button>
        </form>

    </div>

    <h2 style="margin-bottom:25px;">Tableau de bord administrateur</h2>

    @if(session('success'))
        <div style="background:#d4ffd4; padding:10px; border-radius:8px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Message</th>
                <th>Rendez-vous</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->content }}</td>

                <td>
                    <form method="POST" action="{{ route('admin.rendezvous.update', $contact->id) }}">
                        @csrf

                        <input type="datetime-local" name="rendezvous_date"
                               value="{{ $contact->rendezvous_date }}"
                               style="padding:8px; margin-bottom:10px; width:100%;">

                        <label>
                            <input type="checkbox" name="rendezvous_confirme"
                                   {{ $contact->rendezvous_confirme ? 'checked' : '' }}>
                            Rendez-vous confirmé
                        </label>

                        <button style="
                            margin-top:10px;
                            background:#0033cc;
                            color:white;
                            padding:10px 15px;
                            border:none;
                            border-radius:8px;
                            cursor:pointer;
                        ">
                            Mettre à jour
                        </button>
                    </form>
                </td>

                <td>
                    <a href="mailto:{{ $contact->email }}"
                       style="color:#0033cc; font-weight:bold;">
                       Contacter
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
