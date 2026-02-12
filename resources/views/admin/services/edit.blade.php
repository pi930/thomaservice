<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Modifier le service
        </h2>
    </x-slot>

    <div class="py-8 max-w-xl mx-auto px-4">

        <form action="{{ route('admin.services.update', $service) }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            @method('PUT')

            <label class="block mb-3">
                <span class="text-gray-700">Nom</span>
                <input type="text" name="name" value="{{ $service->name }}" class="mt-1 w-full border rounded p-2" required>
            </label>

            <label class="block mb-3">
                <span class="text-gray-700">Description</span>
                <textarea name="description" class="mt-1 w-full border rounded p-2">{{ $service->description }}</textarea>
            </label>

            <label class="block mb-3">
                <span class="text-gray-700">Durée (minutes)</span>
                <input type="number" name="duration" value="{{ $service->duration }}" class="mt-1 w-full border rounded p-2" required>
            </label>

            <label class="block mb-3">
                <span class="text-gray-700">Prix (€)</span>
                <input type="number" step="0.01" name="price" value="{{ $service->price }}" class="mt-1 w-full border rounded p-2" required>
            </label>

            <button class="bg-indigo-600 text-white px-4 py-2 rounded">
                Mettre à jour
            </button>
        </form>

    </div>
</x-app-layout>

