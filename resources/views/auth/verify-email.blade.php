<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Vielen Dank für die Anmeldung! Bevor Sie beginnen, könnten Sie Ihre E-Mail-Adresse verifizieren, indem Sie auf den Link klicken, den wir Ihnen soeben per E-Mail geschickt haben. Wenn Sie die E-Mail nicht erhalten haben, schicken wir Ihnen gerne eine neue zu.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Ein neuer Verifizierungslink wurde an die E-Mail-Adresse geschickt, die Sie bei der Registrierung angegeben haben.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Verifizierungs-E-Mail erneut senden') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Abmelden') }}
            </button>
        </form>
    </div>
</x-guest-layout>
