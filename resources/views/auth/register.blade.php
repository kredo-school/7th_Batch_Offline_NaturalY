@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow-lg">
            <div class="card-body">

                <div class="row">
                    <p class="title text-yellowgreen text-start ms-5 mt-3 ps-3">
                        {{ __('Plant a Seed of Your Natural Journey From Here!') }}
                    </p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="row mt-2 ms-5">
                        <label for="name" class="col-form-label text-md-start fw-bold ">
                            {{ __('Name') }} <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="name" type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" 
                                required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row ms-5 mt-3">
                            <label for="email" class="col-form-label text-md-start fw-bold">
                                {{ __('Email Address') }} <span class="text-danger">*</span>
                            </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" 
                                    required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="row ms-5 mt-3">
                            <label for="password" class="col-form-label text-md-start fw-bold">
                                {{ __('Password') }} <span class="text-danger">*</span>
                            </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="password" type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="row ms-5 mt-3">
                        <label for="password-confirm" class="col-form-label text-md-start fw-bold">
                            {{ __('Confirm Password') }} <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="password-confirm" type="password" 
                                class="form-control" 
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row ms-5 mt-5 mb-2">
                        <div class="col-md-11">
                            <button type="submit" class="btn btn-yellowgreen w-100 fs-4 fw-bold py-1">
                                Next
                            </button>                                
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
