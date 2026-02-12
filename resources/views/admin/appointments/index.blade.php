<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Rendez-vous
        </h2>
    </x-slot>

    <div class="py-8 max-w-5xl mx-auto px-4">

        {{-- FORMULAIRE : créer un rendez-vous pour un client --}}
        <div class="bg-white p-6 rounded shadow mb-8">
            <h3 class="text-lg font-semibold mb-4">Créer un rendez-vous pour un client</h3>

            <form action="{{ route('admin.appointments.store') }}" method="POST">
                @csrf

                <label class="block mb-3">
                    <span class="text-gray-700">Nom du client</span>
                    <input type="text" name="client_name" class="mt-1 w-full border rounded p-2" required>
                </label>

                <label class="block mb-3">
                    <span class="text-gray-700">Service</span>
                    <select name="service_id" class="mt-1 w-full border rounded p-2" required>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }} — {{ $service->price }} €
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
                    Enregistrer
                </button>
            </form>
        </div>

        {{-- TABLEAU DES RENDEZ-VOUS --}}
        <div class="bg-white shadow rounded">
            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Client</th>
                        <th class="p-3">Service</th>
                        <th class="p-3">Date</th>
                        <th class="p-3">Heure</th>
                        <th class="p-3">Statut</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($appointments as $app)
                        <tr class="border-b">
                            <td class="p-3">
                                {{ $app->client->name ?? 'Client inconnu' }}
                            </td>

                            <td class="p-3">{{ $app->service->name }}</td>
                            <td class="p-3">{{ $app->date }}</td>
                            <td class="p-3">{{ $app->time }}</td>
                            <td class="p-3 capitalize">{{ $app->status }}</td>

                            <td class="p-3">
                                <a href="{{ route('admin.appointments.show', $app) }}"
                                   class="text-indigo-600">
                                    Voir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-app-layout>
