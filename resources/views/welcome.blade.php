<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <p class="text-center"><a href="{{ url('/') }}"><img src="{{ asset('img/ussd.png') }}" alt=""
                                                                 style="height: 100px;width: 300px;"></a></p>
            <div class="row">
                <div class="col-md-4">
                    <hr>
                    <p><img src="{{ asset('img/saf.png') }}" alt="" style="height: 110px;width: 300px;"></p>
                    <p><img src="{{ asset('img/airtel.jpg') }}" alt="" style="height: 110px;width: 300px;"></p>
                    <p><img src="{{ asset('img/tksah.jpg') }}" alt="" style="height: 110px;width: 300px;"></p>
                    <hr>
                </div>
                <div class="col-md-8">
                    <h3 class="text-uppercase text-center">
                        <hr>
                        <b>USSD SIMULATION</b>
                        <hr>
                    </h3>
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="ussdString">Enter Your Name</label>
                            <input type="text" name="ussdString" id="ussdString" class="form-control @error('ussdString') is-invalid @enderror" placeholder="i.e Coding Zone">
                            @error('ussdString')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="msisdn">Enter Phone Number</label>
                            <input type="text" name="msisdn" id="msisdn" class="form-control @error('msisdn') is-invalid @enderror" placeholder="i.e 07xxxxxxxx">
                            @error('msisdn')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="serviceCode">Enter Service Code</label>
                            <input type="text" name="serviceCode" id="serviceCode" class="form-control @error('serviceCode') is-invalid @enderror" placeholder="i.e *144#">
                            @error('serviceCode')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary float-right">START SIMULATION</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
