<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Conversation avec {{ $firstSender->name ?? 'Utilisateur inconnu' }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto px-4 space-y-6">

        {{-- Messages --}}
        <div class="bg-white p-4 rounded shadow max-h-[500px] overflow-y-auto">

            @foreach ($messages as $msg)
                <div class="mb-4">
                    <div class="font-semibold {{ $msg->sender_id == auth()->id() ? 'text-indigo-600' : 'text-gray-700' }}">
                        {{ $msg->sender->name }}
                    </div>

                    <div class="text-gray-800">
                        {{ $msg->content }}
                    </div>

                    <div class="text-xs text-gray-500">
                        {{ $msg->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Formulaire de réponse --}}
        <form action="{{ route('admin.messages.store', $conversation) }}" method="POST" class="bg-white p-4 rounded shadow">
            @csrf
            <textarea name="content" class="w-full border rounded p-2" rows="3" placeholder="Votre réponse..."></textarea>

            <button class="mt-3 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                Envoyer
            </button>
        </form>

    </div>
</x-app-layout>


