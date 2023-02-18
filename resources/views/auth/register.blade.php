<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('Nachname')" required/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Züchter
        https://stackoverflow.com/questions/10698636/css-two-divs-width-50-in-one-line-with-line-break-in-file -->
        <div class="mt-4">
            <x-input-label for="breeder" :value="__('Ich bin Züchter')"/>
            <input type="radio" name="breeder" value="1" id="breederyes"onclick="getvalue()"> Ja
            <input type="radio" name="breeder" value="0" id="breederno" checked="checked" onclick="getvalue()"> Nein
            <x-input-error :messages="$errors->get('breeder')" class="mt-2" />

        </div>

        <!-- Vorname -->
        <div class="mt-4">
            <x-input-label for="vorname" :value="__('Vorname')" />
            <x-text-input id="vorname" class="block mt-1 w-full" type="text" name="vorname" :value="old('vorname')" required/>
            <x-input-error :messages="$errors->get('vorname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Datenschutz -->
        <div class="mt-4">
              <x-input-label for="datenschutz"/>
               <a class ="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="http://bit.ly/2TBFHu2">
                   {{__('Ich habe die Datenschutzerklärung und den Disclaimer zur Kenntnis genommen.')}} </a>
              <input type="checkbox" name="datenschutz" value="ja" id="datenschutz_checked" required>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="flex items-center justify-end ml-4" onclick="radiobutton()">
                {{ __('Account erstellen') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function getvalue(){
            if(document.getElementById('breederyes').checked){
                alert('Züchter');
            }
            else if(document.getElementById('breederno').checked){
                alert('Kein Züchter');
            }
        }
    </script>
</x-guest-layout>
