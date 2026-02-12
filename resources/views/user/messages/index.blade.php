<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Messagerie avec l’administrateur
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
                    <div class="p-3 bg-gray-100 rounded mt-1">
                        {{ $msg->content }}
                    </div>
                    <div class="text-xs text-gray-500 mt-1">
                        {{ $msg->created_at->diffForHumans() }}
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Formulaire d’envoi --}}
        <form action="{{ route('user-messages.store') }}" method="POST">
            @csrf

            <textarea name="content" class="w-full border rounded p-2" rows="3" required></textarea>

            <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                Envoyer
            </button>
        </form>

    </div>
</x-app-layout>

