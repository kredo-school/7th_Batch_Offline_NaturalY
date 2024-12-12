@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">LET'S BITE ORGANIC</p>
    <div class="row g-3">
    
    {{-- Search bar --}}
    <form action="#" class="w-100">
        <div class="input-group">
            <span class="input-group-text bg-secondary text-white px-4" id="search-label">
                <i class="fa-solid fa-search"></i>
            </span>
            <input 
                type="search" 
                name="search" 
                class="form-control form-control-sm" 
                placeholder="Search organic..." 
                aria-label="Search organic" 
                aria-describedby="search-label">
        </div>
        {{-- Category Tag --}}
        <div class="mt-0">
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
        </div>
    </form>

    {{-- Item Card --}}
    <div class="row g-3">
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
                <a href="{{route('showItem')}}" class=" text-decoration-none text-dark">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" 
                            class="card-img-top" 
                            alt="Item Image" 
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                            10 Favorites
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <p class="card-title mb-0 h5">Item Title</p>
                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <a href="#" class="badge text-bg-success text-decoration-none mb-2" 
                            style="display: inline-block; white-space: nowrap; max-width: fit-content;">
                            Cucumber
                        </a>
                        <p class="card-text">
                            Contents:{{"#"}} <br>
                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </a>
                <div class="card-footer py-1">
                    <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="ms-3">
                                <p class="mb-0">Farm Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>

    {{-- Pagination --}}
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
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
