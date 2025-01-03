@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5">
            <!-- Title -->
            <p class="title text-start mx-5 mb-5 nav-color text-shadow">
                LIST MY ORGANIC
            </p>
            <form method="POST" action="{{route('farm.storeItem')}}" enctype="multipart/form-data">
                @csrf
                @include('partials.farm.item-form')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Submit Button -->
                <div class="row mx-5 mt-5">
                    <button type="submit" class="btn btn-outline-success w-100 fs-4 py-1">
                        Launch Organic !
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection