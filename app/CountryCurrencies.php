<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryCurrencies extends Model
{
    protected $fillable = [
        'iso_code', 'country', 'currency'
    ];
}
