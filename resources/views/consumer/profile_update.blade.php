@extends('layouts.app')
    
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow-lg px-5">
            <div class="card-body">
                {{-- Title --}}
                <div class="text-center my-4">
                    <i class="fa-solid fa-pen-nib fs-1"></i>
                    <span class="title mx-1">Update Profile</span>
                    <i class="fa-solid fa-pen-nib fs-1"></i>
                </div>

                <form method="GET" action="{{ route('consumer.profile') }}" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    {{-- @method('PATCH') --}}

                    {{-- Avatar --}}
                    <div class="mb-4">
                        <label for="avatar" class="form-label text-center d-block">
                            <i class="fa-solid fa-circle-user text-secondary icon-lg"></i>
                        </label>
                        <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="avatar-info">
                        <small id="avatar-info" class="form-text text-muted">
                            Acceptable formats: jpeg, jpg, png, gif. Max size: 1MB.
                        </small>
                        @error('avatar')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Zipcode --}}
                    <div class="mb-4">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="000-0000" pattern="\d{3}-\d{4}" maxlength="8">
                        @error('zipcode')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Prefecture --}}
                    <div class="mb-4">
                        <label for="prefecture" class="form-label">Prefecture</label>
                        <div class="input-group">
                            <select name="prefecture" id="prefecture" class="form-select" aria-describedby="prefecture-info">
                                <option value="" selected disabled>Select your prefecture</option>
                                <option value="Hokkaido">Hokkaido / 北海道</option>
                                <option value="Aomori">Aomori / 青森県</option>
                                <option value="Iwate">Iwate / 岩手県</option>
                                <option value="Miyagi">Miyagi / 宮城県</option>
                                <option value="Akita">Akita / 秋田県</option>
                                <option value="Yamagata">Yamagata / 山形県</option>
                                <option value="Fukushima">Fukushima / 福島県</option>
                                <option value="Ibaraki">Ibaraki / 茨城県</option>
                                <option value="Tochigi">Tochigi / 栃木県</option>
                                <option value="Gunma">Gunma / 群馬県</option>
                                <option value="Saitama">Saitama / 埼玉県</option>
                                <option value="Chiba">Chiba / 千葉県</option>
                                <option value="Tokyo">Tokyo / 東京都</option>
                                <option value="Kanagawa">Kanagawa / 神奈川県</option>
                                <option value="Niigata">Niigata / 新潟県</option>
                                <option value="Toyama">Toyama / 富山県</option>
                                <option value="Ishikawa">Ishikawa / 石川県</option>
                                <option value="Fukui">Fukui / 福井県</option>
                                <option value="Yamanashi">Yamanashi / 山梨県</option>
                                <option value="Nagano">Nagano / 長野県</option>
                                <option value="Gifu">Gifu / 岐阜県</option>
                                <option value="Shizuoka">Shizuoka / 静岡県</option>
                                <option value="Aichi">Aichi / 愛知県</option>
                                <option value="Mie">Mie / 三重県</option>
                                <option value="Shiga">Shiga / 滋賀県</option>
                                <option value="Kyoto">Kyoto / 京都府</option>
                                <option value="Osaka">Osaka / 大阪府</option>
                                <option value="Hyogo">Hyogo / 兵庫県</option>
                                <option value="Nara">Nara / 奈良県</option>
                                <option value="Wakayama">Wakayama / 和歌山県</option>
                                <option value="Tottori">Tottori / 鳥取県</option>
                                <option value="Shimane">Shimane / 島根県</option>
                                <option value="Okayama">Okayama / 岡山県</option>
                                <option value="Hiroshima">Hiroshima / 広島県</option>
                                <option value="Yamaguchi">Yamaguchi / 山口県</option>
                                <option value="Tokushima">Tokushima / 徳島県</option>
                                <option value="Kagawa">Kagawa / 香川県</option>
                                <option value="Ehime">Ehime / 愛媛県</option>
                                <option value="Kochi">Kochi / 高知県</option>
                                <option value="Fukuoka">Fukuoka / 福岡県</option>
                                <option value="Saga">Saga / 佐賀県</option>
                                <option value="Nagasaki">Nagasaki / 長崎県</option>
                                <option value="Kumamoto">Kumamoto / 熊本県</option>
                                <option value="Oita">Oita / 大分県</option>
                                <option value="Miyazaki">Miyazaki / 宮崎県</option>
                                <option value="Kagoshima">Kagoshima / 鹿児島県</option>
                                <option value="Okinawa">Okinawa / 沖縄県</option>
                                <option value="Overseas">Overseas / 海外</option>
                            </select>
                        </div>
                        @error('prefecture')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your full address" maxlength="255">
                        @error('address')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13">
                        @error('phone')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-orange fs-5 fw-bold py-2 px-4 w-100">
                            <i class="fa-solid fa-pen-nib"></i>
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
