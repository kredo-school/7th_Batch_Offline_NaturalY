<style>

</style>
@extends('layouts.app')
    
@section('content')

<div class="container">

    <div class="card shadow-sm px-5 pb-4 w-75 mx-auto">
        <div class="mt-4 d-flex align-items-center justify-content-center">
            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle me-3" style="width: 120px; height: 120px; object-fit: cover;">
            <span class="card-title mb-0 title text-uppercase">Sasaki Ryosuke</span>
        </div>        
        <div class="row">
            <div class="col">
                <h5 class="mt-4">Adress</h5>
                <p class="card-text">123 Sakura Street, Kyoto, Japan 100-0001</p>
    
                <h5 class="mt-4">Phone Number</h5>
                <p class="card-text">090-0831-0808</p>
            </div>
            <div class="col-auto align-self-end text-center text-success">
                <i class="fa-solid fa-seedling fs-1"></i>
                <p class="text-sm mb-0">
                    You are<br>
                    Good Enthusiasts!
                </p>
            </div>
        </div>
    </div>

    <a href="{{route('consumer.profileUpdate')}}" class="btn fixed-follow-button text-decoration-none" style="line-height: 1; background-color: #FF8B4A !important;">
        <i class="fa-solid fa-pen-nib fs-2 text-white mb-0" style="position: relative; top: 22%;"></i>
    </a>
    
    
    

</div>


@endsection


