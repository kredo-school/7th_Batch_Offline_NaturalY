<div class="col-6">
    <a href="{{ route('farmProfile') }}" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                    @if($farm->avatar)
                        <img src="{{ $farm->avatar }}" class="img-fluid rounded-start img-cover h-100 avatar-xl" alt="Farm Image">
                    @else
                        <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded-start avatar-lg text-secondary" style="height: 200px;">
                            <i class="fa-solid fa-tractor text-center fs-1"></i>
                            <p class="mt-2 mb-0">No Image</p>
                        </div>             
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <h4 class="card-title mb-0 text-ellipsis">{{ $farm->farm_name }}</h4>
                            </div>
                            <div class="col">
                                <h5 class="text-muted text-end">{{ $farm->followers ?? 0 }} Followers</h5>
                            </div>
                        </div>
                        <p class="badge text-bg-success text-decoration-none mb-2 rounded-pill">{{ $farm->first_product }}</p>
                        <p class="badge text-bg-success text-decoration-none mb-2 rounded-pill">{{ $farm->second_product }}</p>
                        <p class="card-text small scrollable">
                            {{ $farm->farm_description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
