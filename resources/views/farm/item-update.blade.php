@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5">
            <!-- Title -->
            <span class="title text-start mx-5 mb-5 nav-color text-shadow">
                UPDATE MY <span class="title text-dark">“GOOD BANANA”</span>
            </span>
            <form method="post" action="{{ route('farm.updateItem', ['item_id' => $item->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('partials.farm.item-form')
                <div class="mx-5">
                    <button type="submit" class="btn btn-outline-success w-100 fs-4 py-1 mt-4">
                    Update Organic !
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    
</div>
@endsection