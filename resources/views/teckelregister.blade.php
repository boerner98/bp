<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('teckel.datenbank', 'Teckeldatenbank') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-green">
    <div>
        <a href="/">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>

    <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mxwd-50">
        <form method="POST" action="{{ route('teckelregister') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name*')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Zuchtbuch -->
            <div class="mt-4">
                <x-input-label for="zuchtbuch" :value="__('Zuchtbuch*')" />
                <x-text-input id="zuchtbuch" class="block mt-1 w-full" type="text" name="zuchtbuch" :value="old('zuchtbuch')" required/>
                <x-input-error :messages="$errors->get('zuchtbuch')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="zuchtbuchnr" :value="__('Zuchtbuch-Nr*')" />
                <x-text-input id="zuchtbuchnr" class="block mt-1 w-full" type="text" name="zuchtbuchnr" :value="old('zuchtbuchnr')" required/>
                <x-input-error :messages="$errors->get('zuchtbuchnr')" class="mt-2" />
            </div>

            <!-- Birthday -->
            <div class="mt-4">
                <x-input-label for="birthday" :value="__('Geburtstag')"/>
                <input type="date" id="birthday" class="block mt-1 w-full" />
                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>

            <x-primary-button class="flex items-center justify-end ml-4">
                {{ __('Teckel erfassen') }}
            </x-primary-button>
        </form>
    </div>
</div>
</body>
</script>
</html>
