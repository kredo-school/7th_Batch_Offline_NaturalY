<style>

</style>
@extends('layouts.app')
    
@section('content')

<div class="container">

    <div class="card shadow-sm px-5 pb-5">

            {{-- Farm Title --}}
            <div class="row mt-4">
                <div class="col-auto">
                    <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="img-thumbnail rounded-circle" style="width: 160px; height: 160px; object-fit: cover;">
                </div>
                <div class="col d-flex flex-column justify-content-center ms-4">
                    <h5 class="card-title mb-0 title">SASAKI NATURAL FARM</h5>
                    <div class="row mb-2 d-flex">
                        <div class="col-8 flex-column">
                            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">Cucumber</a>
                            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">Rambutan</a>
                        </div>
                        <div class="col-4">
                            <h6 class="text-end">831 Followers</h6>   
                        </div>
                    </div>
                </div>
            </div>

            {{-- Farm Description --}}
            <h5 class="mt-5">Farm Description</h5>
            <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex velit pariatur officiis rem non quasi atque, voluptatum ipsum, ut voluptates incidunt facilis vitae ab recusandae perferendis impedit reiciendis fugiat quibusdam, harum obcaecati possimus neque! Magni consectetur itaque consequatur. Repellendus, perspiciatis dolor eligendi eius vero cum corporis deserunt ipsam a delectus.
            </p>

            {{-- Farm Adress--}}
            <h5 class="mt-4">Farm Adress</h5>
            <p>123 Sakura Street, Kyoto, Japan 605-0001</p>

            {{-- Farm Products --}}
            <h5 class="mt-4">Products</h5>
            <div class="row g-3">
                <div class="col-4">
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
                            <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                Cucumber
                            </a>
                            <p class="card-text">
                                Contents:{{"#"}} <br>
                                Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                            <h5 class="card-text text-end">$3.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
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
                            <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                Cucumber
                            </a>
                            <p class="card-text">
                                Contents:{{"#"}} <br>
                                Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                            <h5 class="card-text text-end">$3.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
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
                            <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                Cucumber
                            </a>
                            <p class="card-text">
                                Contents:{{"#"}} <br>
                                Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                            <h5 class="card-text text-end">$3.00</h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <button class="btn btn-success btn-shadow fixed-follow-button">
        <i class="fa-solid fa-user-plus fs-4"></i>
        <span class="text-sm">Follow</span>
    </button>

</div>


@endsection

