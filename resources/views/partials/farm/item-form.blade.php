{{-- Item Name --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="name" class="form-label">Item Name</label><span class="text-danger">*</span>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your organic item name" maxlength="30" value="{{ old('name', $item->name ?? '') }}" aria-describedby="name-info">
    @error('name')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Category --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="category" class="form-label">Item Category</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="category" id="category" class="form-select" aria-describedby="category">
            <option value="" disabled>Select your main product</option>
            @include('partials.category')
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('category')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Price --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="price" class="form-label">Price</label><span class="text-danger">*</span>
    <div class="input-group">
        <span class="input-group-text" id="price-info">$</span>
        <input type="number" name="price" id="price" class="form-control" placeholder="Enter your item price" value="{{ old('price', $item->price ?? '') }}" aria-describedby="price-info">
    </div>
    @error('price')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Item Pictures --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <div class="row">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-4">
                <label for="picture_{{$i}}" class="form-label">Item Picture {{$i}}</label> <br>
                @if(isset($item->{"picture_{$i}"}))
                <img src="{{ $item->{"picture_{$i}"} }}" alt="Picture {{$i}}" class="avatar-lg mb-2">
                @endif
                @error("picture_{{$i}}")
                <p class="text-danger small">{{$message}}</p>
                @enderror
                <input type="file" name="picture_{{$i}}" id="picture_{{$i}}" class="form-control" aria-describedby="picture_{{$i}}-info">
            </div>
        @endfor
    </div>
    <p class="text-muted">Acceptable formats are jpeg, jpg, png, and gif only. Max file size is 1MB.</p>
</div>

{{-- Contents --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="contents" class="form-label">Contents</label><span class="text-danger">*</span>
    <input type="text" name="contents" id="contents" class="form-control" placeholder="Enter your item contents" value="{{ old('contents', $item->contents ?? '') }}" aria-describedby="contents-info">
    @error('contents')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Expected Delivery Date --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="delivery_date" class="form-label">Expected Delivery Date</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="delivery_date" id="delivery_date" class="form-select" aria-describedby="Expected-Delivery_Date">
            <option value="" disabled {{ old('delivery_date', $item->delivery_date ?? '') == '' ? 'selected' : '' }}>Select Expected Delivery Date</option>
            <option value="short" {{ old('delivery_date', $item->delivery_date ?? '') == 'short' ? 'selected' : '' }}>3~7 days</option>
            <option value="middle" {{ old('delivery_date', $item->delivery_date ?? '') == 'middle' ? 'selected' : '' }}>7~14 days</option>
            <option value="long" {{ old('delivery_date', $item->delivery_date ?? '') == 'long' ? 'selected' : '' }}>14~21 days</option>
        </select>
    </div>
    @error('delivery_date')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Item Description --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="description" class="form-label">Item Description</label>
    <div class="input-group">
        <textarea name="description" id="description" class="form-control" placeholder="Enter a brief description of your Item" maxlength="1000" rows="5" aria-describedby="item-description-info">{{ old('description', $item->description ?? '') }}</textarea>
    </div>
    <span class="text-muted">Provide up to 1000 characters to describe your farm.</span>
    @error('description')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>
