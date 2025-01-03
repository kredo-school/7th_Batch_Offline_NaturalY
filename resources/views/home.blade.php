<style>
/* Hero Section */
body, html {
margin: 0;
padding: 0;
box-sizing: border-box;
}

.top-banner {
position: relative;
height: 60vh;
background: url('/storage/images/topbanner.jpg') no-repeat center center;
background-size: cover;
}

.top-banner .content {
position: absolute;
top: 55%;
left: 50%;
transform: translate(-50%, -50%); 
color: white;
text-align: center;
}

.top-banner h2 {
font-size: 3.5rem;
margin: 0;
text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.62); 
}

.top-banner p {
font-size: 1.5rem;
margin: 10px 0 20px;
text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

.top-banner a {
display: inline-block;
padding: 0.4rem 2rem;
}
</style>
@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<div class="top-banner mb-5">
    <div class="content">
        <h2>Welcome to </h2>
        <h2>The Natural Yield Market</h2>
        <a href="#learn-more" class="btn btn-outline-light">Learn More</a>
    </div>
</div>

{{-- Content Section --}}
<div class="container">

    {{-- Item Card --}}
    <p class="title mb-3">LET'S BITE ORGANIC</p>

    <div class="row g-3">
        @forelse ($items->take(8) as $item)
            @include('partials.item-card', ['item' => $item])
        @empty
            <div class="col-12">
                <p class="text-center">No items to display at the moment.</p>
            </div>
        @endforelse
    </div>

    
    <a href="{{route('allItems')}}" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Organic Item</a>

    {{-- Farm Card --}}
    <p class="title mb-3 mt-5">SPOTLIGHT FARMS</p>
    <div class="row g-3">
        @forelse ($farms->take(4) as $farm)
            @include('partials.farm-card', ['farm' => $farm])
        @empty
            <div class="col-12">
            <p class="text-center">No Farms to display at the moment.</p>
            </div>
        @endforelse
    </div>
    <a href="{{route('allFarms')}}" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Farm</a>

    {{-- CSA Card --}}
    <p class="title mb-3 mt-5">LET'S SUBSCRIBE CSA</p>
    We'll work on this usecase if We have time.

    {{-- EventT Info --}}
    <p class="title mb-3 mt-5">EVENT INFORMATION</p>
    We'll work on this usecase if We have time.

    {{-- Partners --}}
    <p class="title mb-3 mt-5">OUR PARTNERS</p>
    We'll work on this usecase if We have time.

</div>

@endsection
