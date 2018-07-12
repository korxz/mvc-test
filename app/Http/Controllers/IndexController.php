<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryCurrencies;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $allCountries = DB::table('country_currencies')->select('country')->get();
        $allCurrencies = DB::table('country_currencies')->select('currency')->get();
        
        if (isset($request['client_ip']) && $request['client_ip'] !== "")
        {
            $result = $this->retriveData($request['client_ip']);
            if ($result !== false && $result->status == 1)
            {
                $data = DB::table('country_currencies')
                            ->where('iso_code', '=', $result->result->country->iso_code)
                            ->first();

                $country = $data->country;
                $currency = $data->currency;
            }
            elseif ($result === false)
            {
                $country = false;
                $currency = false;
            }
        }
        elseif (!isset($request['client_ip']) && $request['client_ip'] == NULL)
        {
            $result = $this->retriveData($request->ip());
            if ($result !== false && $result->status == 1)
            {
                $data = DB::table('country_currencies')
                            ->where('iso_code', '=', $result->result->country->iso_code)
                            ->first();

                $country = $data->country;
                $currency = $data->currency;
            }
            elseif ($result === false)
            {
                $country = false;
                $currency = false;
            }
        }
        return view('index', compact("allCountries", "allCurrencies", "country", "currency"));
    }

    public function retriveData(string $ip)
    {
        $url = "http://geo.igpte.ch/" . $ip;
        $result = @file_get_contents($url, true);
        
        if ($result === false)
        {
            return $result;
        }        

        return json_decode($result);
    }
}
