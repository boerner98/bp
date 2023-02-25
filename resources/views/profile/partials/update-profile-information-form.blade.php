<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profil Informationen') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Aktualisieren Sie die Profilinformationen und die E-Mail-Adresse Ihres Kontos.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="vorname" :value="__('Vorname')" />
            <x-text-input id="vorname" name="vorname" type="text" class="mt-1 block w-full" :value="old('vorname', $user->vorname)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('vorname')" />
        </div>

        <div class="mt-4">
            <x-input-label for="breeder" :value="__('Ich bin Züchter')"/>
            <input type="radio" name="breeder" value="1" id="breederyes" {{ ($user->breeder=="1")? "checked" : "" }}> Ja <br> <!--https://stackoverflow.com/questions/43346458/laravel-set-radio-button-is-checked-based-on-database-value -->
            <input type="radio" name="breeder" value="0" id="breederno" {{ ($user->breeder=="0")? "checked" : "" }}> Nein <br>
            <x-input-error :messages="$errors->get('breeder')" class="mt-2" />

        </div>

        <div>
            <x-input-label for="email" :value="__('E-Mail')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Ihre E-Mail-Adresse ist nicht verifiziert.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Klicken Sie hier, um die Bestätigungs-E-Mail erneut zu senden.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Es wurde ein neuer Verifizierungslink an Ihre E-Mail-Adresse gesendet.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="address" :value="__('Adresse')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="plz" :value="__('Postleitzahl')" />
            <x-text-input id="plz" name="plz" type="integer" class="mt-1 block w-full" :value="old('plz', $user->plz)"/>
            <x-input-error class="mt-2" :messages="$errors->get('plz')" />
        </div>

        <div>
            <x-input-label for="ort" :value="__('Ort')" />
            <x-text-input id="ort" name="ort" type="text" class="mt-1 block w-full" :value="old('ort', $user->ort)"/>
            <x-input-error class="mt-2" :messages="$errors->get('ort')" />
        </div>

        <div class="mt-4">
            <x-input-label for="kontakt" :value="__('Dürfen wir Sie kontaktieren')"/>
            <input type="radio" name="kontakt" value="nein" id="keinkontakt" {{ ($user->kontakt=="nein")? "checked" : "" }}> Nein ich wünsche keine Kontaktaufnahme <br>
            <input type="radio" name="kontakt" value="jatelefon" id="jatelefon" {{ ($user->kontakt=="jatelefon")? "checked" : "" }}> Ja, telefonisch <br>
            <input type="radio" name="kontakt" value="jamail" id="jamail" {{ ($user->kontakt=="jamail")? "checked" : "" }}> Ja, per E-Mail <br>
            <input type="radio" name="kontakt" value="jabeides" id="jabeides" {{ ($user->kontakt=="jabeides")? "checked" : "" }}> Ja, telefonisch und/oder per E-Mail<br>
            <x-input-error :messages="$errors->get('kontakt')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="mobilenumber" :value="__('Handynummer')" />
            <x-text-input id="mobilenumber" name="mobilenumber" type="integer" class="mt-1 block w-full" value="__('+49')" :value="old('mobilenumber', $user->mobilenumber)"/>
            <x-input-error class="mt-2" :messages="$errors->get('mobilenumber')" />
        </div>

        <div>
            <x-input-label for="phonenumber" :value="__('Festnetznummer')" />
            <x-text-input id="phonenumber" name="phonenumber" type="integer" class="mt-1 block w-full" :value="old('phonenumber', $user->phonenumber)"/>
            <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
        </div>

        <div>
            <x-input-label for="homepage" :value="__('Homepage')" />
            <x-text-input id="homepage" name="homepage" type="text" class="mt-1 block w-full" :value="old('homepage', $user->homepage)"/>
            <x-input-error class="mt-2" :messages="$errors->get('homepage')" />
        </div>

        <div>
            <x-input-label for="grund_teckel" :value='__("Wie sind Sie \"auf den Teckel\" gekommen?")'/>
            <input type="radio" name="grund_teckel" value="kindheit" id="grund_teckel_kindheit" {{ ($user->grund_teckel=="kindheit")? "checked" : "" }}> Teil meiner Kindheit <br>
            <input type="radio" name="grund_teckel" value="freunde" id="grund_teckel_freunde" {{ ($user->grund_teckel=="freunde")? "checked" : "" }}> Über Freunde / Bekannte <br>
            <input type="radio" name="grund_teckel" value="veranstaltung" id="grund_teckel_veranstaltung" {{ ($user->grund_teckel=="veranstaltung")? "checked" : "" }}> Über Veranstaltungen des DTK (Zuchtschauen, Ausstellungen oder Ähnliches) <br>
            <input type="radio" name="grund_teckel" value="jagd" id="grund_teckel_jagd" {{ ($user->grund_teckel=="jagd")? "checked" : "" }}> Durch die Jagd<br>
            <input type="radio" name="grund_teckel" value="internet" id="grund_teckel_internet" {{ ($user->grund_teckel=="internet")? "checked" : "" }}> Internet<br>
            <input type="radio" name="grund_teckel" value="literatur" id="grund_teckel_literatur" {{ ($user->grund_teckel=="literatur")? "checked" : "" }}> Literatur / Medien<br>
            <input type="radio" name="grund_teckel" value="sonstiges" id="grund_teckel_sonstiges" {{ ($user->grund_teckel=="sonstiges")? "checked" : "" }}> Sonstiges<br>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Speichern') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Gespeichert.') }}</p>
            @endif
        </div>
    </form>
</section>
