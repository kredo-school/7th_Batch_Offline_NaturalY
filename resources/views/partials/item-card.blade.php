{{-- <div class="col-3">
    <div class="card h-100 shadow-lg border-1">
        <a href="＃" class="text-decoration-none text-dark">
            <div class="position-relative">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="Item Image">
                <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 ">
                    {{ $item['favorites'] }} Favorites
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p class="card-title mb-0 h5">{{ $item['title'] }}</p>
                    <button type="submit" class="btn btn-sm shadow-none p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                    {{ $item['category'] }}
                </a>
                <p class="card-text">
                    Contents: {{ $item['description'] }} <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <h5 class="card-text text-end">${{ $item['price'] }}</h5>
            </div>
        </a>
        <div class="card-footer py-1">
            <a href="{{route('showItem')}}" class="text-decoration-none text-dark">
                <div class="d-flex align-items-center">
                    <img src="{{ $item['farm_image'] }}" alt="Seller Image" class="rounded-circle avatar-sm">
                    <div class="ms-3">
                        <p class="mb-0">{{ $item['farm_name'] }}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div> --}}

<div class="col-3">
    <div class="card h-100 shadow-lg border-1">
        <a href="{{route('farm.showItem',['item_id' => $item->id])}}" class="text-decoration-none text-dark">
            <div class="position-relative">
                <img src="{{ $item->picture_1 }}" class="card-img-top" alt="Item Image">
                <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50">
                    {{ $item->favorites ?? 0 }} Favorites
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p class="card-title mb-0 h5 text-ellipsis">{{ $item->name }}</p>
                    <button type="submit" class="btn btn-sm shadow-none p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                    {{ $item->category }}
                </a>
                <p class="card-text my-0">Contents: {{ $item->contents }}</p>
                <p class="card-text scrollable">
                    {{ $item->description }}
                </p>
            </div>
            <h5 class="card-text text-end m-2">${{ $item->price }}</h5>
        </a>
    </div>
</div>