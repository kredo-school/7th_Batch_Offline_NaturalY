@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">ITEM MANAGEMENT</h1>
    </div>
    <div class="mx-5">
        <div class="input-group mb-2">
            <span class="input-group-text" id="search">Search Farm</span>
            <input type="text" name="search" class="form-control" >
        </div>
    </div>
    <div class="mx-5 mb-2">
        <button type="button" class="btn btn-success rounded-5 px-2">Cucumber</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Rambutan</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Apple</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Mango</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Tomato</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Milk</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Grape</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Calamansi</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Ube</button>
        <button type="button" class="btn btn-success rounded-5 px-2">Lanzones</button>
    </div>
    <div class="mx-5 mb-3">
        <button type="button" class="btn btn-danger rounded-5 px-4">Active</button>
        <button type="button" class="btn btn-primary rounded-5 px-4">Inactive</button>
    </div>
    <div class="mx-5 mb-3">
        <a href="{{ route('admin.item.show') }}" class="text-decoration-none mb-2">
            <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">Water Cucumber</h5>
                                <span class="badge rounded-pill bg-success">Cucumber</span>
                            </div>
                            <div class="col text-end">
                                <h5 class="fs-4"><i class="fa-regular fa-star"></i> 4.9</h5>
                                <span>Total Sales Quantity: 831 units</span>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-danger d-flex align-items-center">
                        <i class="fa-solid fa-circle-check"></i> Active
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none mb-2">
            <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">Water Cucumber</h5>
                                <span class="badge rounded-pill bg-success">Cucumber</span>
                            </div>
                            <div class="col text-end">
                                <h5 class="fs-4"><i class="fa-regular fa-star"></i> 4.9</h5>
                                <span>Total Sales Quantity: 831 units</span>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-secondary d-flex align-items-center">
                        <i class="fa-solid fa-ban"></i> Inactive
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none mb-2">
            <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">Water Cucumber</h5>
                                <span class="badge rounded-pill bg-success">Cucumber</span>
                            </div>
                            <div class="col text-end">
                                <h5 class="fs-4"><i class="fa-regular fa-star"></i> 4.9</h5>
                                <span>Total Sales Quantity: 831 units</span>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-danger d-flex align-items-center">
                        <i class="fa-solid fa-circle-check"></i> Active
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none mb-2">
            <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">Water Cucumber</h5>
                                <span class="badge rounded-pill bg-success">Cucumber</span>
                            </div>
                            <div class="col text-end">
                                <h5 class="fs-4"><i class="fa-regular fa-star"></i> 4.9</h5>
                                <span>Total Sales Quantity: 831 units</span>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-secondary d-flex align-items-center">
                        <i class="fa-solid fa-ban"></i> Inactive
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection