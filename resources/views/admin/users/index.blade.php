<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Gestion des utilisateurs
        </h2>
    </x-slot>

    <div class="p-6">
        <table class="w-full bg-white shadow rounded">
            <thead>
                <tr class="border-b">
                    <th class="p-3 text-left">Nom</th>
                    <th class="p-3 text-left">Email</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b">
                        <td class="p-3">{{ $user->name }}</td>
                        <td class="p-3">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

