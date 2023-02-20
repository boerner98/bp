<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'vorname',
        'email',
        'password',
        'breeder',
        'address',
        'plz',
        'ort',
        'kontakt',
        'phonenumber',
        'mobilenumber',
        'grund_teckel',
        'homepage',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /** https://stackoverflow.com/questions/62545618/laravel-7-adding-radio-in-register-form  */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'breeder' => 'boolean',
        'plz' => 'integer',
        'kontakt' => 'string',
        'phonenumber' => 'string',
        'mobilenumber' => 'string',
        'grund_teckel' => 'string',
    ];
}
