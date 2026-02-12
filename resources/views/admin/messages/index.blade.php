<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Messagerie — Conversations
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto px-4">

        <div class="bg-white shadow rounded">
            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Utilisateur</th>
                        <th class="p-3">Dernier message</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($conversations as $conv)
                        <tr class="border-b">
                           <td>{{ $conv->messages->first()?->sender->name ?? 'Utilisateur inconnu' }}</td>
                            <td class="p-3">
                                {{ $conv->last_message_at ? $conv->last_message_at->diffForHumans() : '—' }}
                            </td>
                            <td class="p-3">
                                <a href="{{ route('admin.messages.show', $conv) }}"
                                   class="text-indigo-600">
                                    Ouvrir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-app-layout>

