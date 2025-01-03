<!-- Avatar -->
<div class="text-center mb-3">
    @if ($user->avatar)
    <img src="{{$user->avatar}}" alt="{{$user->id}}" class="rounded-circle avatar-lg">
    @else
    <i class="fa-solid fa-circle-user text-secondary icon-lg"></i>
    @endif
</div>
<div class="col-auto d-flex flex-column mx-5 mt-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="avatar-info">
    <span id="avatar-info" class="text-muted">Acceptable formats are jpeg, jpg, png, and gif only. Max file size is 1MB</span>
    @error('avatar')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>


{{-- Farm Name --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="address" class="form-label">Farm Name</label><span class="text-danger">*</span>
    <div class="input-group">
        <input type="text" name="farm_name" id="farm_name" value="{{old('farm_name',$user->farm_name)}}" class="form-control" maxlength="255" aria-describedby="farm-name-info">
    </div>
    @error('farm_name')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Zip_code --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="zip_code" class="form-label">Farm Zip Code</label><span class="text-danger">*</span>
    <div class="input-group">
        <input type="text" name="zip_code" id="zip_code" value="{{old('zip_code',$user->zip_code)}}" class="form-control" placeholder="000-0000" pattern="\d{3}-\d{4}" 
            maxlength="8" aria-describedby="zip_code-info">
    </div>
    @error('zip_code')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Prefecture --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="prefecture" class="form-label">Farm Prefecture</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="prefecture" class="form-select" aria-describedby="prefecture-info">
            <option value="{{old('prefecture',$user->prefecture)}}" selected disabled>{{old('prefecture',$user->prefecture)}}</option>
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
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="address" class="form-label">Farm Address</label><span class="text-danger">*</span>
    <div class="input-group">
        <input type="text" name="address" id="address" value="{{old('address',$user->address)}}" class="form-control" placeholder="Enter your full farm address (excluding prefecture)" maxlength="255" aria-describedby="address-info">
    </div>
    @error('address')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Phone Number --}}
<div class="col-auto align-center-end mx-5 mt-4">
        <label for="phone_number" class="form-label">Phone Number</label><span class="text-danger">*</span>
    <div class="input-group">
        <input type="tel" name="phone_number" id="phone_number" value="{{old('phone_number',$user->phone_number)}}"  class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13" aria-describedby="phone_number-info">
    </div>
    @error('phone_number')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Your 1st Product --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="first_product" class="form-label">Your 1st Product</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="first_product" id="first_product"  class="form-select" aria-describedby="first-product-info">
            <option value="" disabled {{ old('first_product', $user->first_product) ? '' : 'selected' }}>Please select</option>
            @include('partials.category')
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('first_product')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Your 2nd Product --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="second_product" class="form-label">Your 2nd Product</label>
    <div class="input-group">
        <select name="second_product" id="second_product" class="form-select" aria-describedby="first-product-info">
            <option value="" disabled {{ old('second_product', $user->second_product) ? '' : 'selected' }}>Please select</option>
            <!-- Root Vegetables -->
            <optgroup label="Root Vegetables">
                <option value="Onion">玉ねぎ / Onion</option>
                <option value="Carrot">人参 / Carrot</option>
                <option value="Radish">大根 / Radish</option>
                <option value="Sweet Potato">サツマイモ / Sweet Potato</option>
                <option value="Potato">じゃがいも / Potato</option>
                <option value="Turnip">カブ / Turnip</option>
                <option value="Beetroot">ビートルート / Beetroot</option>
                <option value="Yam">山芋 / Yam</option>
            </optgroup>
            <!-- Leafy Vegetables -->
            <optgroup label="Leafy Vegetables">
                <option value="Spinach">ほうれん草 / Spinach</option>
                <option value="Lettuce">レタス / Lettuce</option>
                <option value="Cabbage">キャベツ / Cabbage</option>
                <option value="Kale">ケール / Kale</option>
                <option value="Mustard Greens">からし菜 / Mustard Greens</option>
                <option value="Chard">チャード / Chard</option>
                <option value="Arugula">ルッコラ / Arugula</option>
                <option value="Komatsuna">小松菜 / Komatsuna</option>
            </optgroup>
            <!-- Fruit Vegetables -->
            <optgroup label="Fruit Vegetables">
                <option value="Tomato">トマト / Tomato</option>
                <option value="Cucumber">きゅうり / Cucumber</option>
                <option value="Eggplant">ナス / Eggplant</option>
                <option value="Bell Pepper">ピーマン / Bell Pepper</option>
                <option value="Zucchini">ズッキーニ / Zucchini</option>
                <option value="Chili Pepper">唐辛子 / Chili Pepper</option>
                <option value="Squash">カボチャ / Squash</option>
                <option value="Melon">メロン / Melon</option>
                <option value="Watermelon">スイカ / Watermelon</option>
            </optgroup>
            <!-- Legumes -->
            <optgroup label="Legumes">
                <option value="Soybean">大豆 / Soybean</option>
                <option value="Edamame">枝豆 / Edamame</option>
                <option value="Green Beans">インゲン / Green Beans</option>
                <option value="Peas">エンドウ / Peas</option>
                <option value="Mung Beans">ムング豆 / Mung Beans</option>
                <option value="Lentils">レンズ豆 / Lentils</option>
            </optgroup>
            <!-- Alliums -->
            <optgroup label="Alliums">
                <option value="Garlic">にんにく / Garlic</option>
                <option value="Ginger">生姜 / Ginger</option>
                <option value="Leek">リーク / Leek</option>
                <option value="Shallot">エシャロット / Shallot</option>
                <option value="Chives">チャイブ / Chives</option>
            </optgroup>
            <!-- Brassicas -->
            <optgroup label="Brassicas">
                <option value="Broccoli">ブロッコリー / Broccoli</option>
                <option value="Cauliflower">カリフラワー / Cauliflower</option>
                <option value="Brussels Sprouts">芽キャベツ / Brussels Sprouts</option>
                <option value="Kohlrabi">コールラビ / Kohlrabi</option>
                <option value="Bok Choy">チンゲンサイ / Bok Choy</option>
            </optgroup>
            <!-- Herbs -->
            <optgroup label="Herbs">
                <option value="Basil">バジル / Basil</option>
                <option value="Parsley">パセリ / Parsley</option>
                <option value="Cilantro">コリアンダー / Cilantro</option>
                <option value="Mint">ミント / Mint</option>
                <option value="Thyme">タイム / Thyme</option>
                <option value="Rosemary">ローズマリー / Rosemary</option>
            </optgroup>
            <!-- Other Vegetables -->
            <optgroup label="Other Vegetables">
                <option value="Asparagus">アスパラガス / Asparagus</option>
                <option value="Okra">オクラ / Okra</option>
                <option value="Fennel">フェンネル / Fennel</option>
                <option value="Celery">セロリ / Celery</option>
                <option value="Artichoke">アーティチョーク / Artichoke</option>
                <option value="Chayote">チャヨテ / Chayote</option>
            </optgroup>
            <!-- Fruit Crops -->
            <optgroup label="Fruit Crops (Optional)">
                <option value="Apple">りんご / Apple</option>
                <option value="Strawberry">いちご / Strawberry</option>
                <option value="Peach">桃 / Peach</option>
                <option value="Pear">梨 / Pear</option>
                <option value="Plum">プラム / Plum</option>
                <option value="Cherry">さくらんぼ / Cherry</option>
            </optgroup>
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('second_product')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Farm Description --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="farm_description" class="form-label">Farm Description</label>
    <div class="input-group">
        <textarea name="farm_description" id="farm_description" class="form-control" placeholder="Enter a brief description of your farm" maxlength="1000" rows="5" aria-describedby="farm-description-info">{{old('farm_description',$user->farm_description)}}</textarea>
    </div>
    <span class="text-muted">Provide up to 1000 characters to describe your farm.</span>
    @error('farm_description')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>


