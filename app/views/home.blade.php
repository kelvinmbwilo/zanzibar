@extends('master')

@section('contents')
<div class="wrap">
    <div class="content-top">
        <div class="col-md-4">
            <div class="span">
                <div class="banner-wrap ">
                    <div class="banner-top">
                        <div><figure class="thumbnail1">
                                <a href="#" title="gallery"><img src="{{ asset('images/icon5.png') }}" title="gallery" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="banner-text"><h5>
                            Welcome</h5>
                        <p>
                            Zanzibar is one of the most beautiful islands in the world. Join ZW on a private tour and let us show you the unique natural beauty of our beaches, the reality history and culture of Stone Town, and the wonderful people that make Zanzibar to become also Friendly Island
                        </p>
                        <a href="#"><span class="italic">Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="span">
                <div class="banner-wrap ">
                    <div class="banner-top">
                        <div><figure class="thumbnail1">
                                <a href="#" title="gallery"><img src="{{ asset('images/icon4.png') }}" title="weather" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="banner-text"><h5>Reservations</h5>
                        <p>
                            We make reservations and bookings all over Zanzibar and Tanzania for;
                            City hotels, Safari lodges, beach hotels
                            For excursions, Diving, snorkeling, game fishing, local fishing, sightseeing, car hire and boat trips. Wildlife safaris in Tanzania ,Climbing Kilimanjaro
                        </p>

                        <a href="#"><span class="italic">Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="span">
                <div class="banner-wrap ">
                    <div class="banner-top">
                        <div><figure class="thumbnail1">
                                <a href="#" title="gallery"><img src="{{ asset('images/icon2.png') }}" title="gallery" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="banner-text"><h5>Private tours</h5>
                        <p>
                            A variety of private tours are available including visits to the Spice Plantations, Jozani Forest, Stone Town, North Coast, Prison Island and more. If you let us know what you're interested in, we can design a tour that meets your needs.
                        </p>
                        <a href="#"><span class="italic">Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@include('footer')

</div>
@stop