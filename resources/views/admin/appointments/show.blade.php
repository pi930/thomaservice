<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Rendez-vous #{{ $appointment->id }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-xl mx-auto px-4 space-y-6">

        {{-- Informations du rendez-vous --}}
        <div class="bg-white p-6 rounded shadow">
            <p><strong>Client :</strong> {{ $appointment->client->name }}</p>
            <p><strong>Service :</strong> {{ $appointment->service->name }}</p>
            <p><strong>Date :</strong> {{ $appointment->date }}</p>
            <p><strong>Heure :</strong> {{ $appointment->time }}</p>
            <p><strong>Statut :</strong> <span class="capitalize">{{ $appointment->status }}</span></p>
        </div>

        {{-- Actions --}}
        <div class="bg-white p-6 rounded shadow flex gap-4">

            <form action="{{ route('admin.appointments.status', [$appointment, 'confirmed']) }}"
                  method="POST">
                @csrf
                <button class="bg-green-600 text-white px-4 py-2 rounded">
                    Confirmer
                </button>
            </form>

            <form action="{{ route('admin.appointments.status', [$appointment, 'cancelled']) }}"
                  method="POST">
                @csrf
                <button class="bg-red-600 text-white px-4 py-2 rounded">
                    Annuler
                </button>
            </form>

        </div>

        {{-- Planning --}}
        <div class="bg-white p-6 rounded shadow mt-8">
            <h3 class="text-lg font-semibold mb-4">Planning de la semaine</h3>

            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border p-2">Heure</th>
                        @foreach ($days as $day)
                            <th class="border p-2">{{ $day }}</th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>
                    @foreach ($hours as $hour)
                        <tr>
                            <td class="border p-2 font-semibold">{{ $hour }}</td>

                            @foreach ($days as $index => $day)
                                @php
                                   $date = now()->startOfWeek()->addDays($index)->toDateString();
                                    $rdv = $appointments->where('date', $date)->where('time', $hour)->first();
                                @endphp

                                <td class="border p-2 text-center @if($rdv) bg-indigo-200 @endif">
                                    @if($rdv)
                                       {{ $rdv->client->name ?? 'Client inconnu' }}<br>
                                       {{ $rdv->service->name ?? 'Service supprimé' }}
                                    @else
                                        —
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
