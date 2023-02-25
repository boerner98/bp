<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich dem :date sein.',
    'alpha' => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Array sein.',
    'ascii' => 'Das :attribute darf nur alphanumerische Einzelbyte-Zeichen und Symbole enthalten.',
    'before' => 'Das :attribute muss ein Datum vor :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'array' => 'Das :attribute muss zwischen :min und :max Elemente haben.',
        'file' => 'Das :attribute muss zwischen :min und :max kilobytes liegen.',
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen liegen.',
    ],
    'boolean' => 'Das Feld :attribute muss true oder false sein.',
    'confirmed' => 'Das :attribute confirmation stimmt nicht überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum sein, das gleich dem :date ist.',
    'date_format' => 'Das :attribute entspricht nicht dem Format :format.',
    'declined' => 'Das :attribute muss abgelehnt werden.',
    'declined_if' => 'Das :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das :attribute muss :digits Ziffern sein.',
    'digits_between' => 'Die Eingabe muss zwischen :min und :max Ziffern liegen.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute hat einen doppelten Wert.',
    'doesnt_end_with' => 'Das :attribute darf nicht mit einem der folgenden enden: :values.',
    'doesnt_start_with' => 'Das :attribute darf nicht mit einem der folgenden beginnen: :values.',
    'email' => 'Das :attribute muss eine gültige Email-Adresse sein.',
    'ends_with' => 'Das :attribute muss mit einem der folgenden enden: :values.',
    'enum' => 'Das ausgewählte :attribute ist ungültig.',
    'exists' => 'Das gewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute muss einen Wert haben.',
    'gt' => [
        'array' => 'Das :attribute muss mehr als :value Elemente haben.',
        'file' => 'Das :attribute muss größer sein als :value kilobytes.',
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'string' => 'Das :attribute muss größer als :Wert Zeichen sein.',
    ],
    'gte' => [
        'array' => 'Das :attribute muss :value Elemente oder mehr haben.',
        'file' => 'Das :attribute muss größer oder gleich dem :value kilobytes sein.',
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'string' => 'Das :attribute muss größer oder gleich :value Zeichen sein.',
    ],
    'image' => 'Das : attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte : attribute ist ungültig.',
    'in_array' => 'Das Feld :attribute existiert nicht in :other.',
    'integer' => 'Das : attribute muss eine ganze Zahl sein.',
    'ip' => 'Das : attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das : attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das : attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das : attribute muss ein gültiger JSON-String sein.',
    'lowercase' => 'Das : attribute muss klein geschrieben sein.',
    'lt' => [
        'array' => 'Das :attribute muss weniger als :value Elemente haben.',
        'file' => 'Das :attribute muss kleiner sein als :value kilobytes.',
        'numeric' => 'Das :attribute muss kleiner sein als :value.',
        'string' => 'Das : attribute muss kürzer sein als das :value Zeichen.',
    ],
    'lte' => [
        'array' => 'Das :attribute darf nicht mehr als :value Elemente haben.',
        'file' => 'Das :attribute muss kleiner oder gleich :value kilobytes sein.',
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'string' => 'Das :attribute muss kleiner oder gleich :Wert Zeichen sein.',
    ],
    'mac_address' => 'Das :attribute muss eine gültige MAC-Adresse sein.',
    'max' => [
        'array' => 'Das :attribute darf nicht mehr als :max Elemente haben.',
        'file' => 'Das :attribute darf nicht größer als :max kilobytes sein.',
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'string' => 'Das :attribute darf nicht größer als :max Zeichen sein.',
    ],
    'max_digits' => 'Das :attribute darf nicht mehr als :max Ziffern haben.',
    'mimes' => 'Das :attribute muss eine Datei vom Typ: :values sein.',
    'mimetypes' => 'Das :attribute muss eine Datei des Typs :values sein.',
    'min' => [
        'array' => 'Das :attribute muss mindestens :min Elemente haben.',
        'file' => 'Das :attribute muss mindestens :min Kilobytes groß sein.',
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'string' => 'Das :attribute muss mindestens :min Zeichen lang sein.',
    ],
    'min_digits' => 'Das :attribute muss mindestens :min Ziffern haben.',
    'multiple_of' => 'Das :attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das :attribute Format ist ungültig.',
    'numeric' => 'Die Eingabe muss eine Zahl sein.',
    'passwort' => [
    'letters' => 'Das Passwort muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das Passwort muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das Passwort muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das Passwort muss mindestens ein Symbol enthalten.',
        'uncompromised' => 'Das angegebene Passwort ist in einem Datenleck aufgetaucht. Bitte wählen Sie ein anderes Passwort.',
    ],
    'present' => 'Das :attribute Feld muss vorhanden sein.',
    'prohibited' => 'Das :attribute feld ist verboten.',
    'prohibited_if' => 'Das :attribute Feld ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das Feld :attribute ist verboten, wenn :other nicht in :values steht.',
    'prohibits' => 'Das :attribute-Feld verbietet das Vorhandensein von :other.',
    'regex' => 'Das :attribute Format ist ungültig.',
    'required' => 'Das :attribute feld ist erforderlich.',
    'required_array_keys' => 'Das :attribute Feld muss Einträge enthalten für: :values.',
    'required_if' => 'Das :attribute Feld ist erforderlich, wenn :other :value ist.',
    'required_if_accepted' => 'Das :attribute Feld ist erforderlich, wenn :other akzeptiert wird.',
    'required_unless' => 'Das :attribute Feld ist erforderlich, wenn :other nicht in :values steht.',
    'required_with' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das :attribute Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_without' => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das :attribute Feld ist erforderlich, wenn keines der :values vorhanden ist.',
    'same' => 'Das :attribute und :other müssen übereinstimmen.',
    'size' => [
        'array' => 'Das :attribute muss :size Elemente enthalten.',
        'file' => 'Das :attribute muss :size kilobytes sein.',
        'numeric' => 'Das :attribute muss :size sein.',
        'string' => 'Das :attribute muss :size Zeichen sein.',
    ],
    'starts_with' => 'Das :attribute muss mit einem der folgenden beginnen: :values.',
    'string' => 'Das :attribute muss eine Zeichenkette sein.',
    'timezone' => 'Das :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Das :attribute wurde bereits vergeben.',
    'uploaded' => 'Das :attribute konnte nicht hochgeladen werden.',
    'uppercase' => 'Das :attribute muss in Großbuchstaben geschrieben sein.',
    'url' => 'Das :attribute muss eine gültige URL sein.',
    'ulid' => 'Das :attribute muss eine gültige ULID sein.',
    'uuid' => 'Das :attribute muss eine gültige UUID sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    //Felix https://laravel.com/docs/10.x/validation#specifying-custom-messages-in-language-files
    'custom' => [
        'mobilenumber' => [
            'regex' => 'Die Handynummer muss mit einer 0 beginnen',
            'digits_between:' => 'Die Handynummer muss zwischen 10 und 15 digits liegen.',
        ],
        'phonenumber' => [
            'regex' => 'Die Telefonnummer muss mit einer 0 beginnen',
        ],
        'homepage' => [
            'url' => 'Die Eingabe muss eine gültige URL sein',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
