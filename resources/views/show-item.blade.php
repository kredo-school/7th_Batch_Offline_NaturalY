@extends('layouts.app')
    
@section('content')

<div class="container">

    {{-- Item Card --}}
    <div class="card shadow-sm px-5 pb-3">

            {{-- Farm Title --}}
            <div class="row mt-4">
                <div class="col">
                    <h5 class="card-title mb-0 title">WATERFUL CUCUMBER</h5>
                </div>
                <div class="col-auto d-flex flex-column justify-content-center ms-4">
                    <p class="fs-2 mb-0">☆4.5</p>
                </div>
            </div>
            
            {{-- Category Tag --}}
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>

            {{-- Item Carousel --}}
            <div id="carouselExampleIndicators" class="carousel slide mt-3">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/storage/images/banana.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/storage/images/topbanner.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/storage/images/banana.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/storage/images/topbanner.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- Farm Info --}}
            <strong class="mt-4">Farm</strong>
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                SASAKI NATURAL FARM
            </a>
            
            {{-- Production Area--}}
            <strong class="mt-4">Production Area</strong>
            <p>Hokkaido</p>

            {{-- Containts --}}
            <strong class="mt-3">Containts</strong>
            <p>10 cucumbers</p>

            {{-- Item Description --}}
            <strong class="mt-3">Item Description</strong>
            <p>We primarily supply our cucumbers to direct-to-consumer marketplaces, organic specialty stores, Japanese kaiseki restaurants, and inns in the Greater Tokyo, Chubu, and Kansai regions. Recently, we began offering our cucumbers at Takashimaya starting in 2022, and since 2023, we have been delivering them to COOP members.</p>

            {{-- Expected Delivery Date --}}
            <strong class="mt-3">Expected Delivery Date</strong>
            <p>4~7 days</p>

            {{-- Price --}}
            <div class="row">
                <div class="col-8"></div>
                <div class="col-2">
                    <strong class="h2">Price</strong>
                </div>
                <div class="col-2">
                    <p class="h2">$ 3.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-8"></div>
                <div class="col-2">
                    <strong>+Shipping Fee</strong>
                </div>
                <div class="col-2">
                    <p>$ 3.00</p>
                </div>
            </div>


    </div>

    {{-- Reviews --}}
    <div class="card shadow-sm px-5 pb-3 mt-5">
        <h5 class="card-title mb-0 fs-2 text-center mt-4 mb-5">Review</h5>
    
        @foreach ($reviews as $review)
            @for ($i = 0; $i < 4; $i++)
                @include('partials.review', ['review' => $review])
            @endfor
        @endforeach
    
        <a href="#" class="btn btn-outline-secondary w-100 mt-3">Let's See More Reviews</a>
    </div>
    

</div>

{{-- Buying Button --}}
<a href="{{route('consumer.cart')}}" class="fixed-button bg-warning text-decoration-none">
    <i class="fa-solid fa-cart-shopping fs-4">+</i>
</a>

@endsection