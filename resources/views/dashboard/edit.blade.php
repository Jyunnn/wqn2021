<x-app-layout>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('修改商品') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{ route('dashboard.update', ['dashboard' => $product -> id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="py-2">
                @if ($errors->any())
                    <div class="text-red-600 mb-5 p-5 border border-red-600">
                        <p class="text-xl font-bold">ERROR!! 建立內容有誤：</p>
                        <ol>
                            @foreach ($errors->all() as $error)
                                <li class="text-xs">{{ $error }}</li>
                            @endforeach
                        </ol>
                    </div>
                @endif
                <label for="product_type">商品類別</label>
                <select name="product_type" id="product_type">
                    <option value="書寫筆" {{ $product->product_type == '書寫筆' ? 'selected' : ''}}>書寫筆</option>
                    <option value="修正文具" {{ $product->product_type == '修正文具' ? 'selected' : ''}}>修正文具</option>
                    <option value="印章墨水" {{ $product -> product_type == '印章墨水' ? 'selected' : ''}}>印章墨水</option>
                    <option value="包裝黏著" {{ $product -> product_type == '包裝黏著' ? 'selected' : ''}}>包裝黏著</option>
                    <option value="桌上五金" {{ $product->product_type == '桌上五金' ? 'selected' : ''}}>桌上五金</option>
                    <option value="裝訂事務" {{ $product -> product_type == '裝訂事務' ? 'selected' : ''}}>裝訂事務</option>
                    <option value="度量衡" {{ $product -> product_type == '度量衡' ? 'selected' : ''}}>度量衡</option>
                    <option value="紙製品" {{ $product -> product_type == '紙製品' ? 'selected' : ''}}>紙製品</option>
                    <option value="標示貼牌" {{ $product -> product_type == '標示貼牌' ? 'selected' : ''}}>標示貼牌</option>
                    <option value="檔案夾" {{ $product -> product_type == '檔案夾' ? 'selected' : ''}}>檔案夾</option>
                    <option value="檔案收納" {{ $product -> product_type == '檔案收納' ? 'selected' : ''}}>檔案收納</option>
                    <option value="辦公傢俱" {{ $product -> product_type == '辦公傢俱' ? 'selected' : ''}}>辦公傢俱</option>
                    <option value="事務機器" {{ $product -> product_type == '事務機器' ? 'selected' : ''}}>事務機器</option>
                    <option value="耗材紙類" {{ $product -> product_type == '耗材紙類' ? 'selected' : ''}}>耗材紙類</option>
                    <option value="電腦耗材" {{ $product -> product_type == '電腦耗材' ? 'selected' : ''}}>電腦耗材</option>
                    <option value="美術用品" {{ $product -> product_type == '美術用品' ? 'selected' : ''}}>美術用品</option>
                    <option value="運動益智用品" {{ $product -> product_type == '運動益智用品' ? 'selected' : ''}}>運動益智用品</option>
                    <option value="五金百貨" {{ $product -> product_type == '五金百貨' ? 'selected' : ''}}>五金百貨</option>
                    <option value="清潔用品" {{ $product -> product_type == '清潔用品' ? 'selected' : ''}}>清潔用品</option>
                    <option value="辦公茶水" {{ $product -> product_type == '辦公茶水' ? 'selected' : ''}}>辦公茶水</option>
                    <option value="設計印刷" {{ $product -> product_type == '設計印刷' ? 'selected' : ''}}>設計印刷</option>
                </select>
                <p class="text-xs text-red-600">(最好要有分類的建檔)</p>
            </div>

            <div class="py-2">
                <label for="product_dm_number">目錄編號</label>
                <input class="rounded-md p-1" type="text" name="product_dm_number" id="product_dm_number" value="{{ $product -> product_dm_number }}">
                <p class="text-xs text-red-600">(非必填,但有建檔比較好查詢,搜尋功能有做這欄位的搜尋)</p>
            </div>

            <div class="py-2">
                <label for="product_name">商品名稱</label>
                <input class="rounded-md p-1 w-full" type="text" name="product_name" id="product_name" value="{{ $product -> product_name }}">
                <p class="text-xs text-red-600">(必要,搜尋功能將搜尋這個項目)</p>
                <p> {{ $errors->products->first('product_name') }} </p>
            </div>

            <div class="py-2">
                <label for="product_imgsrc">
                    上傳主要圖片: <input type="file" name="product_imgsrc1" id="product_imgsrc" data-target="preview_product_imgsrc">
                </label>
                <p class="text-xs text-red-600">(必要,將置於主圖,建議450*450)</p>
                <div class="flex items-center w-56 h-56">
                    <img id="preview_product_imgsrc" src="{{asset( $product -> product_imgsrc1 )}}" alt="">
                </div>
            </div>

            <script>
                var input = document.querySelector('input[name=product_imgsrc1]');
                input.addEventListener('change', function(e){
                    readUrl(e.target);
                });

                function readUrl(input){
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let imgId = input.getAttribute('data-target');
                        let img = document.querySelector('#'+imgId);
                        img.setAttribute('src', e.target.result)
                        img.setAttribute('alt', e.target.result)
                    }
                    reader.readAsDataURL(input.files[0])
                }
            </script>

            <div class="py-2">
                <label for="product_attr">商品屬性</label>
                <input class="rounded-md p-1" type="text" name="product_attr" id="product_attr" value="{{ $product -> product_attr }}">
                <p class="text-xs text-red-600">(非必填,但填寫屬性要用"逗號"分開,例如: 紅,綠,藍)</p>
            </div>

            <div class="py-2">
                <label for="product_price">價錢</label>
                <input class="rounded-md p-1" type="number" name="product_price" id="product_price" min="0" value="{{ $product -> product_price }}">
                <p class="text-xs text-red-600">(不想寫價錢可設定0,會自動顯示來電詢價)</p>
            </div>

            <div class="py-2">
                <label for="product_qty">庫存</label>
                <input class="rounded-md p-1" type="number" name="product_qty" id="product_qty" min="0" value="{{ $product -> product_qty }}">
                <p class="text-xs text-red-600">(設定0會顯示無庫存)</p>
            </div>

            <div class="my-5 text-2xl">
                <label for="product_simplecontent">商品簡易說明</label>
                <textarea name="product_simplecontent" id="simple_editor" value="{{ old('product_simplecontent') }}">
                    {{  $product -> product_simplecontent  }}
                </textarea >
            </div>

            <div class="my-5">
                <label for="product_content">商品內容</label>
                <p class="text-xs text-red-600">(必須填寫,不然客人不知道這是啥)</p>
                <textarea name="product_content" id="editor"> {{  $product -> product_content  }}</textarea >
            </div>

            <div class="my-5">
                <button class="w-full p-5 rounded bg-red-500 text-white" type="submit">修改</button>
            </div>
        </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

        CKEDITOR.replace('simple_editor', {
            uiColor: '#f2d298',
            removeButtons:'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,Image',
        });
        
    </script>
</x-app-layout>
