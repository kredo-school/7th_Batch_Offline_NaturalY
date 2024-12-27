@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">CONSUMER MANAGEMENT</h1>
    </div>
    <div class="mx-5 mb-3">
        <form action="{{ route('admin.consumer.search') }}">
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
        @forelse ($consumers as $consumer)
            <a href="{{ route('admin.consumer.profile', $consumer->id) }}" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-2 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col-7 border-end border-secondary">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">{{ $consumer->name }}</h5>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">Total purchase: $831</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <span>Start Date: {{ date('M d, Y', strtotime($consumer->created_at)) }}</span><br>
                                <span>Zip Code: {{ $consumer->zip_code }}</span><br>
                                <span>Address: {{ $consumer->address }}</span><br>
                                <span>Phone Number: {{ $consumer->phone_number }}</span>
                            </div>
                        </div>
                        @if ($consumer->trashed())
                            <div class="col-2 fs-3 text-secondary d-flex align-items-center">
                                <i class="fa-solid fa-user-check"></i> Inactive
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
            <h2 class="text-center">No consumers found.</h2>
        @endforelse

        <div class="justify-content-center d-flex">
            {{ $consumers->links() }}
        </div>
    </div>
@endsection