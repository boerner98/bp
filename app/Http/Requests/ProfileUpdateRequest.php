<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'vorname' => ['string', 'max:255'],
            'breeder' => ['boolean'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'address' => ['string', 'nullable'],
            'plz' => ['integer','nullable', 'digits:5'],
            'ort' => ['string', 'nullable'],
            'kontakt' =>['string'],
            'homepage' => ['url', 'nullable'], //https://www.itsolutionstuff.com/post/laravel-url-validation-rule-exampleexample.html
            'grund_teckel' => ['string','nullable'],
            'mobilenumber' => ['numeric', 'nullable', 'regex:/^[0][0-9]{10,15}/','digits_between:10,15'],
            'phonenumber' => ['numeric', 'nullable', 'regex:/^[0][0-9]{10,15}/', 'digits_between:10,15']
        ];
    }
}
