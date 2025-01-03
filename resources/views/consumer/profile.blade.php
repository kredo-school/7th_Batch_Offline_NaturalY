@extends('layouts.app')
    
@section('content')

<div class="container">
    
    <div class="card shadow-sm px-5 pb-4 w-75 mx-auto">
        <div class="mt-4 d-flex align-items-center justify-content-center">
            @if ($user->avatar)
            <img src="{{$user->avatar}}" alt="{{$user->id}}" class="rounded-circle avatar-md">
            @else
            <i class="fa-solid fa-circle-user text-secondary icon-md"></i>
            @endif
            <span class="card-title mb-0  ms-3 title text-uppercase">{{$user->name}}</span>
        </div>        
        <div class="row">
            <div class="col">
                <h5 class="mt-4">Address</h5>
                <p class="my-0">〒{{$user->zip_code}}</p>
                <p class="card-text">{{$user->prefecture}}, {{$user->address}},JAPAN</p>
                <h5 class="mt-4">Phone Number</h5>
                <p class="card-text">{{$user->phone_number}}</p>
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

    <a href="{{route('editProfile')}}" class="btn fixed-button text-decoration-none text-orange">
        <i class="fa-solid fa-pen-nib fs-2 text-white mb-0 position-relative top-25"></i>
    </a>
    
    
    

</div>


@endsection


