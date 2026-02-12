<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 text-gray-900 leading-relaxed">
                    Jeune diplômé en informatique et tourné vers les autres, je vous propose des services de :
                    réalisation de courses, sortie en ma compagnie, aide à l'utilisation des ordinateurs et smartphones,
                    tâches administratives, et plus si désiré…<br><br>

                    Je me ferai payer en chèque emploi service (déductible des impôts).  
                    Si vous êtes intéressé, n'hésitez pas à m'envoyer un message avec la date et les heures désirées.  
                    Je me ferai un plaisir de vous envoyer un service que vous pourrez accepter ou décliner.
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
