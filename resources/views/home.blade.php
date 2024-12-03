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
        <div class="col-3">
            <div class="card h-100 shadow-lg border-1">
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
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
                                    <img src="/storage/images/banana.jpg" 
                        class="card-img-top" 
                        alt="Item Image" 
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                        10 Favorites
                    </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
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
                <div class="card-footer py-1>
                    <a href="#" class="text-decoration-none text-dark">
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
    
    <a href="{{route('allitems')}}" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Organic Item</a>

    {{-- Farm Card --}}
    <p class="title mb-3 mt-5">SPOTLIGHT FARMS</p>
    <div class="row">
        <div class="col-md-6 mb-4">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
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
                                    <div class="col-4">
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

        <div class="col-md-6 mb-4">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
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
                                    <div class="col-4">
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
        
        <div class="col-md-6 mb-4">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
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
                                    <div class="col-4">
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
        <div class="col-md-6 mb-4">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
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
                                    <div class="col-4">
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

    <a href="#" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More farm</a>

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
