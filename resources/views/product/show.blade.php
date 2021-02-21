<x-layout>
    <x-slot name="title">
    {{ $product -> product_name }}
    </x-slot>
    <div class="py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl pb-8">{{ $product -> product_name }}</h2>
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{ $product -> product_imgsrc }}" alt="">
                </div>
                <div>
                    <div>
                        <h3> 商品分類 > <a href=""> {{ $product -> product_type}} </a> </h3>
                        <h3> 目錄編號： {{ $product -> product_dm_number}} </h3>
                    </div>

                    <div class="py-3">
                        <div>
                            <h3 class="text-xl"> 商品屬性：</h3>

                            {{ $product -> product_attr }}
                            <input type="radio" name="type" id="">
                            <label for="">紅色</label>
                            <input type="radio" name="type" id="">
                            <label for="">藍色</label>
                        </div>
                        <br>
                        <div>
                            <label for="">數量</label>
                            <input id="product_cart_input" name="product_cart_input" type="number" value="1" min="1">
                        </div>
                        <h3 class="text-xl py-3">定價: {{ $product -> product_price}} </h3>
                        <button class="text-xl py-3" id="product_cart_submit" type="submit">加入詢價</button>
                    </div>
                </div>
            </div>
            <hr class="py-5">
            <div>
                {{ strip_tags($product -> product_content) }}
            </div>
        </div>   
    </div>
    
    <script>
        let cart_submit = document.getElementById('product_cart_submit');
        let product_id = "{{ $product -> id }}";

        function getCart() {
            let cart = Cookies.get('cart');
            return (!cart) ? {} : JSON.parse(cart);
        }

        function saveCart(cart) {
            Cookies.set('cart', JSON.stringify(cart))
        }

        function addProductToCart(productId, qty) {
            let cart = getCart();
            let quantity = parseInt(cart[productId]) || 0;
            let addQuantity = parseInt(qty) || 0;
            let newQuantity = quantity + addQuantity;
            cart[productId] = newQuantity;
            saveCart(cart);

            alert(`已加入詢價,目前該商品數量 ${cart[productId]}`)
        }

        if(cart_submit) {
            cart_submit.addEventListener('click', function(){
                let cart_input = document.getElementById('product_cart_input');
                if(cart_input) {
                    addProductToCart(product_id ,cart_input.value)
                }
            })
        }
    </script>
</x-layout>
