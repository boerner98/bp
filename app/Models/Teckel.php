<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//https://dev.to/sanajitjana/form-example-in-laravel-8-45oc

class Teckel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'zuchtbuch',
        'zuchtbuchnr',
    ];
}
