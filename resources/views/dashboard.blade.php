<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Hier sollten Ihre Teckel zu sehen sein") }}
                </div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('teckelregister') }}">
                    {{ __('Teckel registrieren') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
