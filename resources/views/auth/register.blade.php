<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name*')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('Nachname')" required/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Vorname -->
        <div class="mt-4">
            <x-input-label for="vorname" :value="__('Vorname*')" />
            <x-text-input id="vorname" class="block mt-1 w-full" type="text" name="vorname" :value="old('vorname')" required/>
            <x-input-error :messages="$errors->get('vorname')" class="mt-2" />
        </div>

        <!-- Züchter
        https://stackoverflow.com/questions/10698636/css-two-divs-width-50-in-one-line-with-line-break-in-file
        https://www.w3schools.com/tags/att_input_type_radio.asp
        https://stackoverflow.com/questions/5592345/how-to-select-a-radio-button-by-default
        https://stackoverflow.com/questions/62545618/laravel-7-adding-radio-in-register-form -->
        <div class="mt-4">
            <x-input-label for="breeder" :value="__('Ich bin Züchter')"/>
            <input type="radio" name="breeder" value="1" id="breederyes"onclick="getvalue()"> Ja <br>
            <input type="radio" name="breeder" value="0" id="breederno" checked="checked" onclick="getvalue()"> Nein <br>
            <x-input-error :messages="$errors->get('breeder')" class="mt-2" />

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-Mail*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password*')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Bestätigen Sie Ihr Passwort')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address" :value="__('Adresse')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"/>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="plz" :value="__('Postleitzahl')" />
            <x-text-input id="plz" class="block mt-1 w-full" type="integer" name="plz" :value="old('Postleitzahl')"/>
            <x-input-error :messages="$errors->get('plz')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="ort" :value="__('Ort')" />
            <x-text-input id="ort" class="block mt-1 w-full" type="text" name="ort" :value="old('ort')"/>
            <x-input-error :messages="$errors->get('ort')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="kontakt" :value="__('Dürfen wir Sie kontaktieren')"/>
            <input type="radio" name="kontakt" value="nein" id="keinkontakt" checked="checked" onclick="getvalueK()"> Nein ich wünsche keine Kontaktaufnahme <br>
            <input type="radio" name="kontakt" value="jatelefon" id="jatelefon"  onclick="getvalueK()"> Ja, telefonisch <br>
            <input type="radio" name="kontakt" value="jamail" id="jamail"  onclick="getvalueK()"> Ja, per E-Mail <br>
            <input type="radio" name="kontakt" value="jabeides" id="jabeides"  onclick="getvalueK()"> Ja, telefonisch und/oder per E-Mail<br>
            <x-input-error :messages="$errors->get('kontakt')" class="mt-2" />
        </div>

        <!-- Datenschutz -->
        <div class="mt-4">
              <x-input-label for="datenschutz"/>
              <input type="checkbox" name="datenschutz" value="ja" id="datenschutz_checked" required>
               <a class ="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="http://bit.ly/2TBFHu2">
                   {{__('Ich habe die Datenschutzerklärung und den Disclaimer zur Kenntnis genommen. ')}} </a>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Bereits registriert?') }}
            </a>

            <x-primary-button class="flex items-center justify-end ml-4">
                {{ __('Account erstellen') }}
            </x-primary-button>
        </div>
    </form>

    <!-- https://www.geeksforgeeks.org/how-to-get-value-of-selected-radio-button-using-javascript/ -->
    <script>
        function getvalue() {
            if (document.getElementById('breederyes').checked) {
                alert('Züchter');
            } else if (document.getElementById('breederno').checked) {
                alert('Kein Züchter');
            }
        }
        function getvalueK(){
            if(document.getElementById('keinkontakt').checked){
                alert('Kein Kontakt');
            }
            else if(document.getElementById('jatelefon').checked){
                alert('Telefonisch');
            }
            else if(document.getElementById('jamail').checked){
                alert('per Mail');
            }
            else if(document.getElementById('jabeides').checked){
                alert('Beides');
            }
        }
    </script>
</x-guest-layout>
