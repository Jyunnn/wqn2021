<x-layout>
    <x-slot name="title">
    {{ $product -> product_name }}
    </x-slot>
    
    <div class="py-8 max-w-7xl mx-auto">
        <div>
            <x-menu />
            <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
        </div>

        <div>
            <div class="flex grid grid-cols-1 p-2 md:p-0 md:grid-cols-12 md:gap-4">

                 <div class="flex justify-center items-center p-5 border col-span-5">
                     <img class="max-w-full block" src="{{ asset($product -> product_imgsrc1) }}">
                </div>
                <div class="col-span-7">
                    <h2 class="text-4xl font-black mb-3 pt-3 md:p-5 md:pt-0">{{ $product -> product_name }}</h2>
                    <hr>
                    <div class="flex grid md:grid-cols-12 mt-3">
                        <div class="col-span-6 md:p-5">
                            <h3> 商品分類 > {{ $product -> product_type}} </h3>
                            <h3> 目錄編號： {{ $product -> product_dm_number}} </h3>
                            <div class="py-3">
                            <div>
                                @if($product -> product_attr)
                                    <h3 class="text-xl"> 商品屬性：</h3>
                                    @foreach( explode(",", $product -> product_attr) as $attr)
                                        <input type="radio" value="{{ $attr }}" name="attr">
                                        <label>{{ $attr }}</label>
                                    @endforeach
                                @endif
                                </div>
                                <br>

                                @if( $product -> product_price == 0 )
                                    <h3 class="text-xl py-3 ">定價: <span class="text-3xl text-red-500">來電詢價</span> </h3>
                                @else
                                    <h3 class="text-xl py-3">定價: <span class="text-red-500 text-2xl"> {{ $product -> product_price}} </span> 元</h3>
                                    <div id="ProductPriceCount" data-price="{{ $product -> product_price }}"></div>
                                @endif
                                <!-- <button class="text-xl py-3" id="product_cart_submit" type="submit">加入詢價</button> -->
                            </div>
                        </div>
                        <div class="col-span-6 md:ml-8 md:p-5">
                            <p class="text-xl mb-6 font-bold">簡易說明</p>
                            @if(!$product -> product_simplecontent )
                                <p>無內容</p>
                            @else
                                {!! htmlspecialchars_decode($product -> product_simplecontent) !!}
                            @endif
                        </div>
                        <!-- <div id="ProductPriceCount" data-price="{{ $product -> product_price }}"></div> -->

                        <!-- @if( $product -> product_price == 0 )
                            <h3 class="text-xl py-3">定價: 來電詢價 </h3>
                        @else
                            <h3 class="text-xl py-3">定價: <span class="text-red-500 text-2xl"> {{ $product -> product_price}} </span> 元</h3>
                        @endif -->

                        <div id="cookies_use_data" data-id="{{ $product -> id }}" class="col-span-6 md:p-5">
                            <label for="product_cart_input">數量</label>
                            <input id="product_cart_input" name="product_cart_input" type="number" min="1" value="1" />
														<button class="text-xl py-3" id="product_cart_submit" type="submit">加入詢價</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-0.5 my-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
            <div class="p-2 md:p-0">
                <h2 class="text-2xl font-bold mb-3">商品說明</h2>
                <hr class="mb-3">
                <div>
                    {!! htmlspecialchars_decode($product -> product_content) !!}
                </div>
            </div>
        </div>   
        
    </div>
    
    <script src="{{ asset('js/ProductPriceCount/all.js') }}"></script>
    <script src="{{ asset('js/cookies.js') }}"></script>
    <script>
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
			}
    </script>
</x-layout>