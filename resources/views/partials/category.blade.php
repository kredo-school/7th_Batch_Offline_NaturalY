
    <!-- Defolaut -->
    <option value="" disabled {{ old('category', $item->category ?? '') == '' ? 'selected' : '' }}>Select your main product</option>

    <!-- Root Vegetables -->
    <optgroup label="Root Vegetables">
        <option value="Onion" {{ old('category', $item->category ?? '') == 'Onion' ? 'selected' : '' }}>Onion</option>
        <option value="Carrot" {{ old('category', $item->category ?? '') == 'Carrot' ? 'selected' : '' }}>Carrot</option>
        <option value="Radish" {{ old('category', $item->category ?? '') == 'Radish' ? 'selected' : '' }}>Radish</option>
        <option value="Sweet Potato" {{ old('category', $item->category ?? '') == 'Sweet Potato' ? 'selected' : '' }}>Sweet Potato</option>
        <option value="Potato" {{ old('category', $item->category ?? '') == 'Potato' ? 'selected' : '' }}>Potato</option>
        <option value="Turnip" {{ old('category', $item->category ?? '') == 'Turnip' ? 'selected' : '' }}>Turnip</option>
        <option value="Beetroot" {{ old('category', $item->category ?? '') == 'Beetroot' ? 'selected' : '' }}>Beetroot</option>
        <option value="Yam" {{ old('category', $item->category ?? '') == 'Yam' ? 'selected' : '' }}>Yam</option>
    </optgroup>

    <!-- Leafy Vegetables -->
    <optgroup label="Leafy Vegetables">
        <option value="Spinach" {{ old('category', $item->category ?? '') == 'Spinach' ? 'selected' : '' }}>Spinach</option>
        <option value="Lettuce" {{ old('category', $item->category ?? '') == 'Lettuce' ? 'selected' : '' }}>Lettuce</option>
        <option value="Cabbage" {{ old('category', $item->category ?? '') == 'Cabbage' ? 'selected' : '' }}>Cabbage</option>
        <option value="Kale" {{ old('category', $item->category ?? '') == 'Kale' ? 'selected' : '' }}>Kale</option>
        <option value="Mustard Greens" {{ old('category', $item->category ?? '') == 'Mustard Greens' ? 'selected' : '' }}>Mustard Greens</option>
        <option value="Chard" {{ old('category', $item->category ?? '') == 'Chard' ? 'selected' : '' }}>Chard</option>
        <option value="Arugula" {{ old('category', $item->category ?? '') == 'Arugula' ? 'selected' : '' }}>Arugula</option>
        <option value="Komatsuna" {{ old('category', $item->category ?? '') == 'Komatsuna' ? 'selected' : '' }}>Komatsuna</option>
    </optgroup>

    <!-- Fruit Vegetables -->
    <optgroup label="Fruit Vegetables">
        <option value="Tomato" {{ old('category', $item->category ?? '') == 'Tomato' ? 'selected' : '' }}>Tomato</option>
        <option value="Cucumber" {{ old('category', $item->category ?? '') == 'Cucumber' ? 'selected' : '' }}>Cucumber</option>
        <option value="Eggplant" {{ old('category', $item->category ?? '') == 'Eggplant' ? 'selected' : '' }}>Eggplant</option>
        <option value="Bell Pepper" {{ old('category', $item->category ?? '') == 'Bell Pepper' ? 'selected' : '' }}>Bell Pepper</option>
        <option value="Zucchini" {{ old('category', $item->category ?? '') == 'Zucchini' ? 'selected' : '' }}>Zucchini</option>
        <option value="Chili Pepper" {{ old('category', $item->category ?? '') == 'Chili Pepper' ? 'selected' : '' }}>Chili Pepper</option>
        <option value="Squash" {{ old('category', $item->category ?? '') == 'Squash' ? 'selected' : '' }}>Squash</option>
        <option value="Melon" {{ old('category', $item->category ?? '') == 'Melon' ? 'selected' : '' }}>Melon</option>
        <option value="Watermelon" {{ old('category', $item->category ?? '') == 'Watermelon' ? 'selected' : '' }}>Watermelon</option>
    </optgroup>

    <!-- Legumes -->
    <optgroup label="Legumes">
        <option value="Soybean" {{ old('category', $item->category ?? '') == 'Soybean' ? 'selected' : '' }}>Soybean</option>
        <option value="Edamame" {{ old('category', $item->category ?? '') == 'Edamame' ? 'selected' : '' }}>Edamame</option>
        <option value="Green Beans" {{ old('category', $item->category ?? '') == 'Green Beans' ? 'selected' : '' }}>Green Beans</option>
        <option value="Peas" {{ old('category', $item->category ?? '') == 'Peas' ? 'selected' : '' }}>Peas</option>
        <option value="Mung Beans" {{ old('category', $item->category ?? '') == 'Mung Beans' ? 'selected' : '' }}>Mung Beans</option>
        <option value="Lentils" {{ old('category', $item->category ?? '') == 'Lentils' ? 'selected' : '' }}>Lentils</option>
    </optgroup>

    <!-- Alliums -->
    <optgroup label="Alliums">
        <option value="Garlic" {{ old('category', $item->category ?? '') == 'Garlic' ? 'selected' : '' }}>Garlic</option>
        <option value="Ginger" {{ old('category', $item->category ?? '') == 'Ginger' ? 'selected' : '' }}>Ginger</option>
        <option value="Leek" {{ old('category', $item->category ?? '') == 'Leek' ? 'selected' : '' }}>Leek</option>
        <option value="Shallot" {{ old('category', $item->category ?? '') == 'Shallot' ? 'selected' : '' }}>Shallot</option>
        <option value="Chives" {{ old('category', $item->category ?? '') == 'Chives' ? 'selected' : '' }}>Chives</option>
    </optgroup>

    <!-- Brassicas -->
    <optgroup label="Brassicas">
        <option value="Broccoli" {{ old('category', $item->category ?? '') == 'Broccoli' ? 'selected' : '' }}>Broccoli</option>
        <option value="Cauliflower" {{ old('category', $item->category ?? '') == 'Cauliflower' ? 'selected' : '' }}>Cauliflower</option>
        <option value="Brussels Sprouts" {{ old('category', $item->category ?? '') == 'Brussels Sprouts' ? 'selected' : '' }}>Brussels Sprouts</option>
        <option value="Kohlrabi" {{ old('category', $item->category ?? '') == 'Kohlrabi' ? 'selected' : '' }}>Kohlrabi</option>
        <option value="Bok Choy" {{ old('category', $item->category ?? '') == 'Bok Choy' ? 'selected' : '' }}>Bok Choy</option>
    </optgroup>

    <!-- Herbs -->
    <optgroup label="Herbs">
        <option value="Basil" {{ old('category', $item->category ?? '') == 'Basil' ? 'selected' : '' }}>Basil</option>
        <option value="Parsley" {{ old('category', $item->category ?? '') == 'Parsley' ? 'selected' : '' }}>Parsley</option>
        <option value="Cilantro" {{ old('category', $item->category ?? '') == 'Cilantro' ? 'selected' : '' }}>Cilantro</option>
        <option value="Mint" {{ old('category', $item->category ?? '') == 'Mint' ? 'selected' : '' }}>Mint</option>
        <option value="Thyme" {{ old('category', $item->category ?? '') == 'Thyme' ? 'selected' : '' }}>Thyme</option>
        <option value="Rosemary" {{ old('category', $item->category ?? '') == 'Rosemary' ? 'selected' : '' }}>Rosemary</option>
    </optgroup>

    <!-- Other Vegetables -->
    <optgroup label="Other Vegetables">
        <option value="Asparagus" {{ old('category', $item->category ?? '') == 'Asparagus' ? 'selected' : '' }}>Asparagus</option>
        <option value="Okra" {{ old('category', $item->category ?? '') == 'Okra' ? 'selected' : '' }}>Okra</option>
        <option value="Fennel" {{ old('category', $item->category ?? '') == 'Fennel' ? 'selected' : '' }}>Fennel</option>
        <option value="Celery" {{ old('category', $item->category ?? '') == 'Celery' ? 'selected' : '' }}>Celery</option>
        <option value="Artichoke" {{ old('category', $item->category ?? '') == 'Artichoke' ? 'selected' : '' }}>Artichoke</option>
        <option value="Chayote" {{ old('category', $item->category ?? '') == 'Chayote' ? 'selected' : '' }}>Chayote</option>
    </optgroup>

    <!-- Fruit Crops -->
    <optgroup label="Fruit Crops (Optional)">
        <option value="Apple" {{ old('category', $item->category ?? '') == 'Apple' ? 'selected' : '' }}>Apple</option>
        <option value="Strawberry" {{ old('category', $item->category ?? '') == 'Strawberry' ? 'selected' : '' }}>Strawberry</option>
        <option value="Peach" {{ old('category', $item->category ?? '') == 'Peach' ? 'selected' : '' }}>Peach</option>
        <option value="Pear" {{ old('category', $item->category ?? '') == 'Pear' ? 'selected' : '' }}>Pear</option>
        <option value="Plum" {{ old('category', $item->category ?? '') == 'Plum' ? 'selected' : '' }}>Plum</option>
        <option value="Cherry" {{ old('category', $item->category ?? '') == 'Cherry' ? 'selected' : '' }}>Cherry</option>
        <option value="Banana" {{ old('category', $item->category ?? '') == 'Banana' ? 'selected' : '' }}>Banana</option>
    </optgroup>