@extends('layouts.admin.app')

@section('content')
    @include('admin.modal.consumer-status')

    <div class="mx-5 mt-5 mb-3">
        <div class="card border border-dark shadow">
            <div class="row p-5">
                <div class="col-4">
                    <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-lg"></i>
                </div>
                <div class="col-8">
                    <h2 class="display-5 mt-4">{{ $consumer->name }}</h2>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Zip Code</span><br>
                    <span>{{ $consumer->zip_code }}</span>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Address</span><br>
                    <span>{{ $consumer->address }}</span>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Phone Number</span><br>
                    <span>{{ $consumer->phone_number }}</span>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-5">
                    <a href="{{ route('admin.consumer.management') }}" class="btn btn-secondary w-50">Cancel</a>
                </div>

                <div class="col">
                    @if ($consumer->trashed())
                        <button class="btn btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#activate-consumer-{{ $consumer->id }}">
                            Activate {{ $consumer->name }}
                        </button>
                    @else
                        <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#deactivate-consumer-{{ $consumer->id }}">
                            Deactivate {{ $consumer->name }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection