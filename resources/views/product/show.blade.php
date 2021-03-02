<x-layout>
    <x-slot name="title">
    {{ $product -> product_name }}
    </x-slot>
    <div class="py-8">

        <div class="container mx-auto">
            <x-menu />
            <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
        </div>

        <div class="container mx-auto">
            <div class="flex grid grid-cols-1 md:grid-cols-2 md:gap-4">
                <div class="flex flex-col md:flex-row items-center p-5 mb-3 border">
                    <div class="w-450 h-450">
                        <img class="mySlides" src="{{ asset($product -> product_imgsrc1) }}" style="">
                        <img class="mySlides" src="{{ asset($product -> product_imgsrc2) }}" style="display:none">
                        <img class="mySlides" src="{{ asset($product -> product_imgsrc3) }}" style="width:100%;display:none">
                    </div>
                    <div>
                        <div class="flex flex-row md:flex-col">
                            <div class="w-150 h-150">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc1) }}" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                            </div>
                            <div class="w-150 h-150">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc2) }}" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                            </div>
                            <div class="w-150 h-150">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc3) }}" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h2 class="text-3xl pb-8">{{ $product -> product_name }}</h2>
                        <h3> 商品分類 > {{ $product -> product_type}} </h3>
                        <h3> 目錄編號： {{ $product -> product_dm_number}} </h3>
                    </div>

                    <div class="py-3">
                        <div>
                            @if($product -> product_attr)
                                <h3 class="text-xl"> 商品屬性：</h3>
                                @foreach(json_decode($product -> product_attr, true) as $attr)
                                    <input type="radio" name="{{ $attr }}" id="">
                                    <label for="">{{ $attr }}</label>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        <div>
                            <label for="">數量</label>
                            <input id="product_cart_input" name="product_cart_input" type="number" value="1" min="1">
                        </div>
                        @if( $product -> product_price == 0 )
                            <h3 class="text-xl py-3">定價: 來電詢價 </h3>
                        @else
                            <h3 class="text-xl py-3">定價: <span class="text-red-500 text-2xl"> {{ $product -> product_price}} </span> 元</h3>
                        @endif
                        <button class="text-xl py-3" id="product_cart_submit" type="submit">加入詢價</button>
                    </div>
                </div>
            </div>
            <hr class="py-5">
            <div>
                <div class="bg-gray-100 p-3">
                    <h2 class="text-3xl">商品說明</h2>
                </div>
                <div class="p-3">
                {!! htmlspecialchars_decode($product -> product_content) !!}
                </div>
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

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>
</x-layout>
