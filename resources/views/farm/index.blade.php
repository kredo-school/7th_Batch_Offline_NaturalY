<style>

</style>
@extends('layouts.farm.app')


@section('content')
@include('partials.farm.farm-profile')

<div class="container">
    
    <a href="{{route('farm.createItem')}}" class="w-100 btn btn-success mt-5 py-5 fs-2 rounded-pill text-shadow">
        <i class="fa-solid fa-apple-whole"></i>
        List More Organics
    </a>

    <div class="row mt-3">
        <div class="col">
            <a href="{{route('farm.orderMng')}}" class="w-100 btn btn-warning text-white py-5 fs-2 rounded-pill">
                <i class="fa-solid fa-truck-fast"></i>
                Order Management
            </a>
        </div>
        <div class="col">
            <a href="#" class="w-100 btn btn-primary py-5 fs-2 rounded-pill">
                <i class="fa-solid fa-chart-line"></i>
                Product Analysis
            </a>
        </div>
    </div>
    
    <a href="#" class="w-100 btn btn-outline-secondary mt-5 py-1 fs-5 rounded-pill">
        Why don't you Use The Boost Yield Service?
    </a>

        {{-- Fixed Button --}}
        <a href="{{route('editProfile')}}" class="fixed-button bg-warning text-decoration-none fs-3">
            <i class="fa-solid fa-pen-nib"></i>
        </a>
        
</div>


@endsection

