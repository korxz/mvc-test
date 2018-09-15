<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\CountryCurrencies;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        return CountryCurrencies::all();
    }
}