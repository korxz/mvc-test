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
            </div>

            <div class="col-sm-12 form-row">
                <div class="col-sm-6">
                    <label for="country">Country:</label>
                    <select id="country" class="form-control">
                        @foreach($allCountries as $index => $value)
                            @if ($country == $value->country)
                                <option value="" selected>{{ $value->country }}</option>
                            @else
                                <option value="" >{{ $value->country }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="currency">Currency: </label>
                    <select id="currency" class="form-control">
                        @foreach($allCurrencies as $index => $value)
                            @if ($currency == $value->currency)
                                <option value="<?php echo $value->currency ?>" selected>{{ $value->currency }}</option>
                            @else
                                <option value="<?php echo $value->currency ?>">{{ $value->currency }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
            </div>
        </div>
    </div>
@endsection