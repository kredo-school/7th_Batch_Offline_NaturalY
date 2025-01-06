@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">FARM MANAGEMENT</h1>
    </div>
    <div class="mx-5 mb-3">
        <form action="{{ route('admin.farm.search') }}">
                @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="search">Search User</span>

                <input type="text" name="search" class="form-control" value="{{ old('search', $search) }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        @error('search')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mx-5 mb-3">
        <p class="h5 text-muted mb-4">Search results for "<span class="fw-bold">{{ $search }}</span>"</p>
    </div>
    <div class="mx-5 mb-3">
        @forelse ($farms as $farm)
            <a href="{{ route('admin.farm.profile') }}" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col-7 border-end border-secondary">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">{{ $farm->name }}</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>{{ $farm->farm_description }}</p>
                            </div>
                        </div>
                        @if ($farm->trashed())
                            <div class="col-2 fs-3 text-danger d-flex align-items-center">
                                <i class="fa-solid fa-user-xmark"></i> Inactive
                            </div>
                        @else
                            <div class="col-2 fs-3 text-danger d-flex align-items-center">
                                <i class="fa-solid fa-user-check"></i> Active
                            </div>
                        @endif
                    </div>
                </div>
            </a>
        @empty
            <h2 class="text-center">No Farms Yet.</h2>
        @endforelse

        <div class="justify-content-center d-flex">
            {{ $farms->links() }}
        </div>
    </div>
@endsection