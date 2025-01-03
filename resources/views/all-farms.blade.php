@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">Good Organic Farms</p>
    
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
            @for ($i = 0; $i < 16; $i++)
                <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            @endfor
        </div>
    </form>

    {{-- Farm Card --}}
    <div class="row g-3 mt-3">
        @foreach ($farms as $farm)
            @include('partials.farm-card', ['farm' => $farm])
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $farms->links('pagination::bootstrap-4') }}
    </div>

</div>
@endsection