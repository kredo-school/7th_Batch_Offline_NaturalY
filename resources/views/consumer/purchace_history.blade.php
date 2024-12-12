@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-receipt fs-1"></i>
        <span class="title mx-1 text-uppercase">My History</span>
        <i class="fa-solid fa-receipt fs-1"></i>
    </div>

    {{-- Item Card --}}
    <div class="row mb-4">
        <div class="card shadow-sm p-0">
            <div class="card-header py-1">
                <div class="row">
                    <div class="col-3">
                        <span class="text-muted">
                            Date of Purchace<br>2024/12/31
                        </span>
                    </div>
                    <div class="col-3">
                        <span class="text-muted">
                            Quantity<br>3
                        </span>
                    </div>
                    <div class="col-auto">
                        <span class="text-muted">
                            Total<br>$12.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="/storage/images/banana.jpg" class="img-fluid rounded-start" alt="Farm Image" style="width: 100%; height:100%; object-fit: cover;">
                </div>
                <div class="col-md-9">
                    <div class="card-body mx-4">
                        <div class="row">
                            <div class="col-10">
                                <div class="d-flex align-items-center">
                                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                                        <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                        <span class="mb-0 ms-1 fw-bold">SASAKI NATURAL FARM</span>
                                    </a>            
                                </div>
                                <a href="{{route('showItem')}}" class="text-decoration-none text-dark">
                                    <h2 class="card-title mt-2">Good Banana</h2>
                                    <p class="text-muted">10 bananas</p>
                                </a>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <a href="{{route('consumer.review')}}" class="text-decoration-none h5 text-center text-secondary">
                                    <i class="fa-solid fa-user fs-2"></i>
                                    <i class="fa-regular fa-comment-dots fs-3 align-top"></i><br>
                                    Review
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="card shadow-sm p-0">
            <div class="card-header py-1">
                <div class="row">
                    <div class="col-3">
                        <span class="text-muted">
                            Date of Purchace<br>2024/12/31
                        </span>
                    </div>
                    <div class="col-3">
                        <span class="text-muted">
                            Quantity<br>3
                        </span>
                    </div>
                    <div class="col-auto">
                        <span class="text-muted">
                            Total<br>$12.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="/storage/images/banana.jpg" class="img-fluid rounded-start" alt="Farm Image" style="width: 100%; height:100%; object-fit: cover;">
                </div>
                <div class="col-md-9">
                    <div class="card-body mx-4">
                        <div class="row">
                            <div class="col-10">
                                <div class="d-flex align-items-center">
                                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                                        <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                        <span class="mb-0 ms-1 fw-bold">SASAKI NATURAL FARM</span>
                                    </a>            
                                </div>
                                <a href="{{route('showItem')}}" class="text-decoration-none text-dark">
                                    <h2 class="card-title mt-2">Good Banana</h2>
                                    <p class="text-muted">10 bananas</p>
                                </a>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <a href="{{route('consumer.review')}}" class="text-decoration-none h5 text-center text-secondary">
                                    <i class="fa-solid fa-user fs-2"></i>
                                    <i class="fa-regular fa-comment-dots fs-3 align-top"></i><br>
                                    Review
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
