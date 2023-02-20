<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Sie haben Ihr Passwort vergessen? Das ist kein Problem. Teilen Sie uns einfach Ihre E-Mail-Adresse mit und wir senden Ihnen einen Link zum Zurücksetzen des Passworts zu, mit dem Sie ein neues wählen können.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <a class="underline text-sm text-gray-600 hover:text-red-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 links mr-4" href="{{ route('login') }}">
                {{ __('Zurück zum Login') }}
            </a>
            <x-primary-button>
                {{ __('E-Mail mit Link zum Zurücksetzen des Passworts') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
