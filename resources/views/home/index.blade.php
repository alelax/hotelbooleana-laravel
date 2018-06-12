@extends('layouts.app')


@section('tab_title')
    Home
@endsection


@section('parallax')class="parallax home"@endsection

@section('page-title')
    Welcome <br> 
    <span class="bind">to</span> <br> 
    
    <span class="hotel-name"> 
         <span class="initial">B</span>OOLEANA
         <span class="initial">H</span>OTEL
    </span> <br>
   {{--  <span class="stars">
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
    </span> --}}
    
@endsection

@section('page-intro')
    A remote enclave to live your dreams. Our story begins in 1971, and to this day, we remain Ibiza’s most appreciated resort by making your stay & experience with us a delightfully surreal dream sequence.
@endsection

@section('page_content')

    {{-- Rooms section --}}
    <div class="section-preview col-10 mx-auto px-0">
        
        <div class="section-title col-12 text-center">
            <h1> <span class="initial">R</span>ooms</h1>
        </div>
        <a href=" {{ route('rooms') }}">
            <div class="section-img col-12 col-md-9 mx-auto d-flex align-items-center px-0" style="background-image:url('/images/room-preview-image.jpg'); background-repeat:repeat-y; ">
                <div class="section-desc col-12 mx-auto px-0 d-flex align-items-center">
                    <button class="show-btn col-80 d-md-none mx-auto">Show rooms</button>
                    <p class="desc col-10 d-none d-md-block mx-auto">Set the scene for the most romantic moments of your life. A fairy tale Palace surrounded by verdant parkland, a candle-lit dinner for two overlooking the glistening waters, your very own private ...
                    </p> 
                </div>
            </div> 
        </a>

    </div>

    {{-- Restaurant section --}}
    <div class="section-preview col-10 mx-auto px-0">
        
        <div class="section-title col-12 text-center">
            <h1> <span class="initial">R</span>estaurant</h1>
        </div>
        <a href=" {{ route('restaurant') }}">
            <div class="section-img col-12 col-md-9 mx-auto d-flex align-items-center px-0" style="background-image:url('/images/restaurant-preview-image.jpg'); background-repeat:repeat-y; ">
                <div class="section-desc col-12 mx-auto px-0 d-flex align-items-center">
                    <button class="show-btn col-80 d-md-none mx-auto">Show more..</button>
                    <p class="desc col-10 d-none d-md-block mx-auto">Italy is renowned for its exquisite food, and here at the Grand Hotel Tremezzo we’re proud to uphold this culinary tradition. Savor the authentic taste of Italian cuisine with a dinner designed by Gualtiero Marchesi, the ...
                    </p> 
                </div>
            </div> 
        </a>

    </div>

    {{-- Spa section --}}
    <div class="section-preview col-10 mx-auto px-0">
        
        <div class="section-title col-12 text-center">
            <h1> <span class="initial">S</span>pa & <span class="initial">W</span>ellness</h1>
        </div>
        <a href=" {{ route('spa') }}">
            <div class="section-img col-12 col-md-9 mx-auto d-flex align-items-center px-0" style="background-image:url('/images/spa-preview-image.jpg'); background-repeat:repeat-y; ">
                <div class="section-desc col-12 mx-auto px-0 d-flex align-items-center">
                    <button class="show-btn col-80 d-md-none mx-auto">Show more..</button>
                    <p class="desc col-10 d-none d-md-block mx-auto">Take time away from your hectic life and embark on a journey towards re-establishing your wellness. The multi-award winning facilities overlooking the lake and ESPA treatments at the T Spa await to gently envelop you ...
                    </p> 
                </div>
            </div> 
        </a>

    </div>

    

    
@endsection

