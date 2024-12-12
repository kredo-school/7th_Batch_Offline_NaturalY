@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <span class="title mx-1 text-uppercase">Review</span>
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
                            <div class="col-9">
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
                            <div class="col-3 d-flex align-items-center">
                                <p class="fs-2"><i class="fa-regular fa-star"></i>5.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="#" method="GET">
        @csrf 
        
        <!-- Rating -->
        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1-5) <span class="text-danger">*</span></label>
            <select class="form-select" id="rating" name="rating" required>
                <option value="">Select a rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
            <p class="text-muted text-sm">1 star means poor, while 5 stars represent excellent.</p>
        </div>

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title for your review" required>
        </div>

        <!-- Review -->
        <div class="mb-3">
            <label for="review" class="form-label">Review <span class="text-danger">*</span></label>
            <textarea class="form-control" id="review" name="review" rows="4" placeholder="Write your review here" required></textarea>
        </div>

        <!-- Submit Button -->
        <a href="{{route('showItem')}}" class="btn btn-outline-dark w-100 mt-4 fs-5 py-2">
            Submit Review
        </a>
    </form>
</div>
@endsection
