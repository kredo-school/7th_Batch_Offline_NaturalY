<div class="col-3">
    <div class="card h-100 shadow-lg border-1">
        <a href="{{route('showItem',['item_id' => $item->id])}}" class="text-decoration-none text-dark">
            <div class="position-relative">
                <img src="{{ $item->picture_1 }}" class="card-img-top" alt="Item Image">
                <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50">
                    {{ $item->favoriteCount() }} {{ $item->favoriteCount() === 1 ? 'Favorite' : 'Favorites' }}
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p class="card-title mb-0 h5 text-ellipsis">{{ $item->name }}</p>
                    {{-- {{ $averageRating }} --}}
                </div>
                <spa class="badge text-bg-success text-decoration-none mb-2">
                    {{ $item->category }}
                </spa>
                <p class="card-text my-0">Contents: {{ $item->contents }}</p>
                <p class="card-text scrollable">
                    {{ $item->description }}
                </p>
            </div>
            <h5 class="card-text text-end m-2">${{ $item->price }}</h5>
        </a>
    </div>
</div>
