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
            <div class="flex grid grid-cols-1 p-2 md:p-0 md:grid-cols-2 md:gap-4">
                <div class="flex flex-col md:flex-row items-center p-5 border">
                    <div class="w-450 xl:h-450">
                        <img class="mySlides w-full" src="{{ asset($product -> product_imgsrc1) }}">
                        @if($product -> product_imgsrc2)
                            <img class="mySlides" src="{{ asset($product -> product_imgsrc2) }}" style="display:none">
                        @endif
                        @if($product -> product_imgsrc3)
                            <img class="mySlides" src="{{ asset($product -> product_imgsrc3) }}" style="width:100%;display:none">
                        @endif
                    </div>
                    <div>
                        <div class="flex flex-row md:flex-col">
                            <div class="w-100 h-100">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc1) }}" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                            </div>
                            @if($product -> product_imgsrc2)
                            <div class="w-100 h-100">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc2) }}" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                            </div>
                            @endif
                            @if($product -> product_imgsrc2)
                            <div class="w-100 h-100">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="{{ asset($product -> product_imgsrc3) }}" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                            </div>
                            @endif
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
                                @foreach( explode(",",$product -> product_attr) as $attr)
                                    <input type="radio" value="{{ $attr }}" name="attr">
                                    <label>{{ $attr }}</label>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        <!-- <div id="ProductPriceCount" data-price="{{ $product -> product_price }}"></div> -->

                        @if( $product -> product_price == 0 )
                            <h3 class="text-xl py-3">定價: 來電詢價 </h3>
                        @else
                            <h3 class="text-xl py-3">定價: <span class="text-red-500 text-2xl"> {{ $product -> product_price}} </span> 元</h3>
                        @endif
                        <div id="cookies_use_data" data-id="{{ $product -> id }}">
                            <label for="product_cart_input">數量</label>
                            <input id="product_cart_input" name="product_cart_input" type="number" min="1" value="1" />
                        </div>
                        <button class="text-xl py-3" id="product_cart_submit" type="submit">加入詢價</button>
                    </div>
                </div>
            </div>
            <div class="h-0.5 my-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
            <div>
                <h2 class="text-3xl mb-3">商品說明</h2>
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
        }
    </script>
</x-layout>
