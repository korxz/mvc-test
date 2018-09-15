@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h1>Currencies by countries</h1>
                @if ($country !== false && $currency !== false)
                    <p>
                        Based on your IP we suggest you to use following options:
                        <span style="color: #3d70b7">{{ $country }}</span> and <span style="color: #3d70b7">{{ $currency }}</span>
                    </p>
                @elseif ($country === false && $currency === false)
                    <p>
                        We were not able to auto determine your location and your local currency.
                    </p>
                @endif
                <div id="app">
                    <location-component></location-component>
                </div>
            </div>
        </div>
    </div>
@endsection