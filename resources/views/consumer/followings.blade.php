@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-3">
        <i class="fa-solid fa-tractor fs-1"></i>
        <span class="title mx-1">My Following Farmers</span>
        <i class="fa-solid fa-tractor fs-1"></i>
    </div>

    {{-- Item Card --}}
    <div class="row mt-3">
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
    </div>
    
    
        {{-- Pagination --}}
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-3">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
        </ul>
    </nav>
</div>
@endsection
