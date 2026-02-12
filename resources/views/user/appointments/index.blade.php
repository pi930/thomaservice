<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Mes rendez-vous
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto px-4 space-y-8">

        {{-- Formulaire de prise de rendez-vous --}}
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold mb-4">Prendre un rendez-vous</h3>

            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <label class="block mb-3">
                    <span class="text-gray-700">Service</span>
                    <select name="service_id" class="mt-1 w-full border rounded p-2" required>
                        <option value="">Choisir un service</option>
                        @foreach ($services as $service)
                            <<option value="{{ $service->id }}">
    {{ $service->name }} — {{ $service->price }} € — {{ $service->duration }} min
    ({{ $service->description }})
</option>

                        @endforeach
                    </select>
                </label>

                <label class="block mb-3">
                    <span class="text-gray-700">Date</span>
                    <input type="date" name="date" class="mt-1 w-full border rounded p-2" required>
                </label>

                <label class="block mb-3">
                    <span class="text-gray-700">Heure</span>
                    <input type="time" name="time" class="mt-1 w-full border rounded p-2" required>
                </label>

                <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                    Réserver
                </button>
            </form>
        </div>

        {{-- Liste des rendez-vous --}}
<div class="bg-white shadow rounded">
    <table class="w-full text-left">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">Service</th>
                <th class="p-3">Rendez-vous</th>
                <th class="p-3">Statut</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($appointments as $app)

                {{-- Ne pas afficher les rendez-vous déclinés --}}
                @if ($app->status === 'declined')
                    @continue
                @endif

                <tr class="border-b">

                    {{-- Informations du service --}}
                    <td class="p-3">
                        <strong>{{ $app->service->name }}</strong><br>
                        {{ $app->service->price }} € — {{ $app->service->duration }} min<br>
                        <span class="text-gray-600 text-sm">{{ $app->service->description }}</span>
                    </td>

                    {{-- Date + heure dans une seule cellule --}}
                    <td class="p-3">
                        {{ $app->date }} à {{ $app->time }}
                    </td>

                    {{-- Statut --}}
                    <td class="p-3 capitalize">
                        @if ($app->status === 'pending')
                            <span class="text-yellow-600 font-semibold">En attente</span>
                        @elseif ($app->status === 'confirmed')
                            <span class="text-green-600 font-semibold">Confirmé</span>
                        @endif
                    </td>

                    {{-- Boutons Accepter / Décliner --}}
                    <td class="p-3">
                        @if ($app->status === 'pending')

                            <form action="{{ route('appointments.updateStatus', [$app, 'confirmed']) }}"
                                  method="POST" class="inline">
                                @csrf
                                <button class="bg-green-600 text-white px-3 py-1 rounded">
                                    Accepter
                                </button>
                            </form>

                            <form action="{{ route('appointments.updateStatus', [$app, 'declined']) }}"
                                  method="POST" class="inline">
                                @csrf
                                <button class="bg-red-600 text-white px-3 py-1 rounded">
                                    Décliner
                                </button>
                            </form>

                        @else
                            —
                        @endif
                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>
</div>



    </div>
</x-app-layout>

