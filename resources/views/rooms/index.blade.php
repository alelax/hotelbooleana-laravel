@extends('layouts.app')

@section('tab_title')
    Rooms
@endsection

@section('parallax')class="parallax rooms"@endsection


@section('page-title')
    <span>Booleana Hotel</span> <br> 
    <span class="bind">the</span> <br> 
    <span class="hotel-name">ROOMS</span> <br>
   {{--  <span class="stars">
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
    </span> --}}
    
@endsection


@section('page-intro')
    Set the scene for the most romantic moments of your life. A fairy tale Palace surrounded by verdant parkland, a candle-lit dinner for two overlooking the glistening waters, your very own private ...
@endsection


@section('page_content')

    {{-- Room 1 --}}
    <div class="room-cnt col-12 px-0 d-flex flex-wrap-reverse">


        <div class="square room-features col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-center text-center px-0">
            <p class="col-12">Jacuzzi / bath in the bedroom</p>
            <p class="col-12">Air-condition</p>
            <p class="col-12">Free Wi-Fi</p>
            <p class="col-12">Flat-screen satellite TV</p>
            <p class="col-12">Breath-taking sea and nature views from the terrace or balcony</p>
            <p class="col-12">Room surface: 30 square meters</p>
            <p class="col-12">Large double bed or two singles</p>
            <p class="col-12">Unlimited access to the three hotel pools</p>
            <p class="col-12">Free welcome card, water and local delicatessen</p>
        </div> 


        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-1-second-res.jpg" class="img-fluid" alt="">
        </div>
        
        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-1-res.jpg" class="img-fluid" alt="">
        </div>

        <div class="square text-cnt col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-around text-center px-0">
           <h2 class="room-name col-12"> <span class="initial">D</span>ouble <span class="initial">S</span>tandard</h2>
           <p class="room-description col-11 col-sm-9 col-md-11 mx-auto">A cosy room with Jacuzzi, terrace or balcony, and Mediterranean Sea and nature views – enjoy a relaxing experience.</p>
           <div class="btn-cnt col-12 d-flex justify-content-center align-items-center">
               <button class="room-btn ">Reserve it</button>
           </div>
        </div> 

       

    </div>  
    
    {{-- Room 2 --}}
    <div class="room-cnt col-12 px-0 d-flex flex-wrap-reverse">


        <div class="square room-features col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-center text-center px-0">
            <p class="col-12">Personal Mini-pool</p>
            <p class="col-12">Jacuzzi / bath in the bedroom</p>
            <p class="col-12">Air-condition</p>
            <p class="col-12">Free Wi-Fi</p>
            <p class="col-12">Flat-screen satellite TV</p>
            <p class="col-12">Magnificent sea and nature views from the garden terrace</p>
            <p class="col-12">Room surface: 40 square meters</p>
            <p class="col-12">Large double bed or two singles</p>
            <p class="col-12">Free welcome card, water and local delicatessen</p>
        </div> 


        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-2-second-res.jpg" class="img-fluid" alt="">
        </div>
        
        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-2-res.jpg" class="img-fluid" alt="">
        </div>

        <div class="square text-cnt col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-around text-center px-0">
           <h2 class="room-name col-12"> <span class="initial">E</span>den <span class="initial">R</span>oom</h2>
           <p class="room-description col-11 col-sm-9 col-md-11 mx-auto">Enjoy a unique and exclusive experience in the Eden room with its private Mini-pool in its personal garden terrace, a Jacuzzi, a large double bed, and relaxing ambience.</p>
           <div class="btn-cnt col-12 d-flex justify-content-center align-items-center">
               <button class="room-btn ">Reserve it</button>
           </div>
        </div> 

       

    </div>
    
    {{-- Room 3 --}}
    <div class="room-cnt col-12 px-0 d-flex flex-wrap-reverse">


        <div class="square room-features col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-center text-center px-0">
            <p class="col-12">Personal hammam (Turkish steam bath)</p>
            <p class="col-12">Jacuzzi / bath in the bedroom</p>
            <p class="col-12">Air-condition</p>
            <p class="col-12">Free Wi-Fi</p>
            <p class="col-12">Terrace with sunbeds</p>
            <p class="col-12">Magnificent sea and nature views from the garden terrace</p>
            <p class="col-12">Room surface: 45 square meters</p>
            <p class="col-12">Large double bed or two singles</p>
            <p class="col-12">Free welcome card, water and local delicatessen</p>
        </div> 


        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-3-second-res.jpg" class="img-fluid" alt="">
        </div>
        
        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-3-res.jpg" class="img-fluid" alt="">
        </div>

        <div class="square text-cnt col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-around text-center px-0">
           <h2 class="room-name col-12"> <span class="initial">S</span>uite <span class="initial">J</span>unior <span class="initial">E</span>den </h2>
           <p class="room-description col-11 col-sm-9 col-md-11 mx-auto">Besides having your own Jacuzzi, hammam and terrace with sunbeds, this very spacious suite proposes beautiful Mediterranean views from your own private mini-pool</p>
           <div class="btn-cnt col-12 d-flex justify-content-center align-items-center">
               <button class="room-btn ">Reserve it</button>
           </div>
        </div> 

       

    </div> 

    {{-- Room 4 --}}
    <div class="room-cnt last col-12 px-0 d-flex flex-wrap-reverse">


        <div class="square room-features col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-center text-center px-0">
            <p class="col-12">Personal hammam (Turkish steam bath)</p>
            <p class="col-12">Jacuzzi / bath in the bedroom</p>
            <p class="col-12">Air-condition</p>
            <p class="col-12">Free Wi-Fi & Flat-screen satellite TV & Apple TV</p>
            <p class="col-12">Terrace with sunbeds</p>
            <p class="col-12">Private terrace with sunbeds & mini-pool</p>
            <p class="col-12">Room surface: 80 square meters (two rooms; two bathrooms)</p>
            <p class="col-12">Two large double beds or four singles</p>
            <p class="col-12">Nespresso coffee machine & kettle</p>
        </div> 


        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-4-second-res.jpg" class="img-fluid" alt="">
        </div>
        
        <div class="square img-cnt col-12 col-md-6 d-flex justify-content-center px-0">
            <img src="/images/rooms/room-4-res.jpg" class="img-fluid" alt="">
        </div>

        <div class="square text-cnt col-12 col-md-6 d-flex flex-wrap justify-content-center align-content-around text-center px-0">
           <h2 class="room-name col-12"> <span class="initial">N</span>a <span class="initial">X</span>amena <span class="initial">S</span>uite </h2>
           <p class="room-description col-11 col-sm-9 col-md-11 mx-auto">The Na Xamena is our largest, most luxurious and privacy oriented Suite. It includes two bedrooms and two bathrooms, a Jacuzzi and hammam; and has its own personal terrace with sunbeds and mini-pool.</p>
           <div class="btn-cnt col-12 d-flex justify-content-center align-items-center">
               <button class="room-btn ">Reserve it</button>
           </div>
        </div> 

       

    </div> 
 @endsection       