<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Tableau de bord administrateur
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 space-y-10">

        {{-- Cartes statistiques --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-600 font-semibold">Utilisateurs</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">{{ $usersCount }}</p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-600 font-semibold">Rendez-vous en attente</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">{{ $pendingAppointments }}</p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-600 font-semibold">Messages non lus</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">{{ $unreadMessages }}</p>
            </div>

        </div>

        {{-- Navigation admin --}}
        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Navigation rapide</h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                <a href="{{ route('admin.services.index') }}"
                   class="block bg-indigo-600 text-white text-center py-3 rounded hover:bg-indigo-700 transition">
                    Services
                </a>

                <a href="{{ route('admin.appointments.index') }}"
                   class="block bg-indigo-600 text-white text-center py-3 rounded hover:bg-indigo-700 transition">
                    Rendez-vous
                </a>

                <a href="{{ route('admin.messages.index') }}"
                   class="block bg-indigo-600 text-white text-center py-3 rounded hover:bg-indigo-700 transition">
                    Messagerie
                </a>

                <a href="{{ route('admin.users.index') }}"
                   class="block bg-indigo-600 text-white text-center py-3 rounded hover:bg-indigo-700 transition">
                    Utilisateurs
                </a>

            </div>
        </div>

    </div>
</x-app-layout>


