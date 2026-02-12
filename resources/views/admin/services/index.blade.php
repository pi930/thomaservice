<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Services
        </h2>
    </x-slot>

    <div class="py-8 max-w-5xl mx-auto px-4">

        <a href="{{ route('admin.services.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded">
            Ajouter un service
        </a>

        <div class="mt-6 bg-white shadow rounded">
            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Nom</th>
                        <th class="p-3">Durée</th>
                        <th class="p-3">Prix</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($services as $service)
                        <tr class="border-b">
                            <td class="p-3">{{ $service->name }}</td>
                            <td class="p-3">{{ $service->duration }} min</td>
                            <td class="p-3">{{ $service->price }} €</td>
                            <td class="p-3 flex gap-2">
                                <a href="{{ route('admin.services.edit', $service) }}"
                                   class="text-blue-600">Modifier</a>

                                <form action="{{ route('admin.services.destroy', $service) }}"
                                      method="POST"
                                      onsubmit="return confirm('Supprimer ce service')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-app-layout>
