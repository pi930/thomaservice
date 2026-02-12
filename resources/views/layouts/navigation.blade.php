<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left side -->
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    {{-- USER LINKS --}}
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            Dashboard
                        </x-nav-link>

     @if(!auth()->user()->is_admin)
    <x-nav-link :href="route('user-messages.index')" :active="request()->routeIs('user-messages.*')">
        Messagerie
    </x-nav-link>
@endif


                        <x-nav-link :href="route('appointments.index')" :active="request()->routeIs('appointments.*')">
                            Rendez-vous
                        </x-nav-link>
                    @endauth

                    {{-- ADMIN LINKS --}}
                    @auth
                        @if(auth()->user()->is_admin)
                            <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                Admin
                            </x-nav-link>

                            <x-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')">
                                Services
                            </x-nav-link>

                            <x-nav-link :href="route('admin.appointments.index')" :active="request()->routeIs('admin.appointments.*')">
                                Rendez-vous
                            </x-nav-link>

                            <x-nav-link :href="route('admin.messages.index')" :active="request()->routeIs('admin.messages.*')">
                                Messagerie
                            </x-nav-link>

                            <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')">
                                Utilisateurs
                            </x-nav-link>
                        @endif
                    @endauth

                </div>
            </div>

            <!-- Right side: User dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                Profil
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Déconnexion
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

            </div>

            <!-- Hamburger (mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none">
                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                              class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{'hidden': ! open, 'inline-flex': open }"
                              class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        {{-- USER LINKS --}}
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Dashboard
            </x-responsive-nav-link>

{{-- Lien messagerie pour utilisateur --}}
@if(!auth()->user()->is_admin)
    <x-nav-link :href="route('user-messages.index')" :active="request()->routeIs('user-messages.*')">
        Messagerie
    </x-nav-link>
@endif






            <x-responsive-nav-link :href="route('appointments.index')" :active="request()->routeIs('appointments.*')">
                Rendez-vous
            </x-responsive-nav-link>
        </div>

        {{-- ADMIN LINKS --}}
        @auth
            @if(auth()->user()->is_admin)
                <div class="pt-2 pb-3 space-y-1 border-t border-gray-200">

                    <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        Admin
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')">
                        Services
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('admin.appointments.index')" :active="request()->routeIs('admin.appointments.*')">
                        Rendez-vous
                    </x-responsive-nav-link>

                    {{-- Lien messagerie pour admin --}}

                    <x-nav-link :href="route('admin.messages.index')" :active="request()->routeIs('admin.messages.*')">
                        Messagerie
                   </x-nav-link>


                    <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')">
                        Utilisateurs
                    </x-responsive-nav-link>

                </div>
            @endif
        @endauth
{{-- Responsive User Menu --}}
<div class="pt-4 pb-1 border-t border-gray-200">

    @auth
        <div class="px-4">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">
                Profil
            </x-responsive-nav-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                    Déconnexion
                </x-responsive-nav-link>
            </form>
        </div>
    @endauth

    @guest
        <div class="px-4">
            <div class="font-medium text-base text-gray-800">Invité</div>
            <div class="font-medium text-sm text-gray-500">Veuillez vous connecter</div>
        </div>

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('login')">
                Connexion
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('register')">
                Inscription
            </x-responsive-nav-link>
        </div>
    @endguest

</div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    Profil
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Déconnexion
                    </x-responsive-nav-link>
                </form>
            </div>

        </div>
    </div>

</nav>
