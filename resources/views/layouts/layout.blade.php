<!DOCTYPE html>
<html lang="en">
<head>
<!--
 ________    _______   ________  __     _______   _____  ___       _______  ___  ___  
|"      "\  /"     "| /"       )|" \   /" _   "| (\"   \|"  \     |   _  "\|"  \/"  | 
(.  ___  :)(: ______)(:   \___/ ||  | (: ( \___) |.\\   \    |    (. |_)  :)\   \  /  
|: \   ) || \/    |   \___  \   |:  |  \/ \      |: \.   \\  |    |:     \/  \\  \/   
(| (___\ || // ___)_   __/  \\  |.  |  //  \ ___ |.  \    \. |    (|  _  \\  /   /    
|:       :)(:      "| /" \   :) /\  |\(:   _(  _||    \    \ |    |: |_)  :)/   /     
(________/  \_______)(_______/ (__\_|_)\_______)  \___|\____\)    (_______/|___/      
                                                                                      
      ___  ___  ___  ____  ____  _____  ____  __   __  ___   _______   __             
     |"  ||"  \/"  |("  _||_ " |(\"   \|"  \ |"  |/  \|  "| /"     "| |" \            
     ||  | \   \  / |   (  ) : ||.\\   \    ||'  /    \:  |(: ______) ||  |           
     |:  |  \\  \/  (:  |  | . )|: \.   \\  ||: /'        | \/    |   |:  |           
  ___|  /   /   /    \\ \__/ // |.  \    \. | \//  /\'    | // ___)_  |.  |           
 /  :|_/ ) /   /     /\\ __ //\ |    \    \ | /   /  \\   |(:      "| /\  |\          
(_______/ |___/     (__________) \___|\____\)|___/    \___| \_______)(__\_|_)         
                                                                                      
-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="文光行,新竹文光行,新竹文具批發,文具批發新竹,文具行,新竹文具行">
    <meta name="description" content="文光行,傳基實業有限公司,文具批發,辦公家具,印刷設計,文具用品批發,各式品牌書寫用品,黏貼包裝材料,桌上五金用品,檔案收納資料整理,辦公紙品便條紙,圖畫紙工業用紙,事務機器電腦耗材,茶水招待,商品最齊全的文具供應商">
    <meta property="facebook:title" content="新竹文光行">
    <meta name="facebook:description" content="文光行,傳基實業有限公司,文具批發,辦公家具,印刷設計,文具用品批發,各式品牌書寫用品,黏貼包裝材料,桌上五金用品,檔案收納資料整理,辦公紙品便條紙,圖畫紙工業用紙,事務機器電腦耗材,茶水招待,商品最齊全的文具供應商">
    <meta name="author" content="Jyun Wei">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <style>
        #mobilebar_handle:checked+#mobilebar {
            margin-left: 0rem;
        }
    </style>
</head>
<body class="relative mb-8 sm:m-0">
    <!--桌面模式nav-->
    <nav class="items-top justify-center shadow dark:bg-gray-900 hidden lg:block sm:pt-0">
        <div class="max-w-7xl mx-auto flex items-center">
            <a href="/">
                <img class="w-28 md:w-44 py-4" src="{{ asset('images/wqn_logo.png') }}" alt="">
            </a>
            <div class="mx-5">
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="/">首頁</a>
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="{{ route('product.index') }}">商品</a>
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="{{ route('pdfmenu') }}">目錄</a>
            </div>
            <div class="flex ml-auto hidden md:block">
                <form class="border-2 rounded" action="{{ route('product.find') }}" method="get">
                    <select class="border-0" name="type" id="">
                        <option value="product_name">商品名稱</option>
                        <option value="product_dm_number">目錄編號</option>
                    </select>
                    <input name="keyword" class="border-0" type="text" placeholder="請輸入搜尋項目">
                    <button class="p-2 rounded hover:bg-yellow-300" type="submit">搜尋</button>
                </form>
            </div>
        </div>
    </nav>
    <!--桌面模式nav結束-->
    <!--手機模式nav-->
    <nav class="lg:hidden w-full fixed flex justify-center items-center bottom-0 bg-white shadow-inner z-50">
        <div class="absolute left-0 bg-white h-16 w-16 border-white rounded-full flex justify-center items-center" style="bottom: 1px">
        <a href="/">
            <img class="w-12" src="{{ asset('images/favicon.png') }}" alt="">
        </a>
        </div>
        <div class="mx-5">
            <a class="px-5 py-2 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="/"><i class="lni lni-home"></i>首頁</a>
            <a class="px-5 py-2 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="{{ route('product.index') }}"><i class="lni lni-ruler-pencil"></i>商品</a>
            <a class="px-5 py-2 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="{{ route('pdfmenu') }}"><i class="lni lni-book"></i>目錄</a>
        </div>
    </nav>
    
    <div class="lg:hidden w-full p-5">
        <a href="/">
            <img class="block m-auto mb-5" src="{{ asset('images/wqn_logo.png') }}" alt="">
        </a>
        <form action="{{ route('product.find') }}" method="get">
            <select class="w-full mb-2" name="type" id="">
                <option value="product_name">依商品名稱搜尋</option>
                <option value="product_dm_number">依目錄編號搜尋</option>
            </select>
            <div style="font-size: 0px">
                <input name="keyword" class="border box-border w-6/12" type="text" placeholder="請輸入搜尋項目">
                <button class="p-2 border border-yellow-300 bg-yellow-300 active:bg-yellow-600 text-base w-4/12" type="submit">搜尋</button>
            </div>
        </form>
    </div>
    <!--手機模式nav結束-->
    <!--手機模式側邊攔-->
    <label class="hidden text-lg px-5 py-2 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" for="mobilebar_handle" href="/"><i class="lni lni-menu"></i></label>
    <input class="hidden" type="checkbox" id="mobilebar_handle">
    <div class="absolute md:hidden -ml-56 top-0 bottom-0 w-56 bg-white text-center shadow z-40" id="mobilebar">
        <p class="py-5 block text-2xl border-b">目錄選項</p>
        <ul>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=書寫筆')}}">🖊️#書寫筆</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=修正文具')}}">📝#修正文具</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=印章墨水')}}">🖃#印章墨水</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=桌上五金')}}">🔨#桌上五金</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=包裝黏著')}}">📦#包裝黏著</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=裝訂事務')}}">📎#裝訂事務</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=度量衡')}}">📏#度量衡</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=紙製品')}}">🧾#紙製品</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=標示貼牌')}}">🚧#標示貼牌</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=檔案夾')}}">📘#檔案夾</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=檔案收納')}}">🗃️#檔案收納</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=辦公傢俱')}}">🪑#辦公傢俱</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=事務機器')}}">📠#事務機器</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=耗材紙類')}}">🌲#耗材紙類</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=電腦耗材')}}">🖱️#電腦耗材</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=美術用品')}}">🖌️#美術用品</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=運動益智用品')}}">🏟️#運動益智用品</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=五金百貨')}}">🛠️#五金百貨</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=清潔用品')}}">🧹#清潔用品</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=辦公茶水')}}">🥤#辦公茶水</a></li>
            <li class="p-2 my-1 block border-b"><a href="{{asset('/type?keyword=設計印刷')}}">✒️#設計印刷</a></li>
        </ul>
    </div>
    <!--手機模式側邊攔結束-->
    <div class="px-3 sm:px-1">
        {{ $slot }}
    </div>

    <footer class="max-w-7xl mx-auto py-4 text-center">
            <div class="flex justify-center py-2">
                <a class="block px-4" href="/">首頁</a>|
                <a class="block px-4" href="{{ route('product.index') }}">商品</a>|
                <a class="block px-4" href="{{ route('contact') }}">聯繫我們</a>|
                <a class="block px-4" href="">店面位置</a>
                @auth
                |<a href="{{ url('/dashboard') }}" class="block px-4">後台管理</a>
                @endauth
            </div>
            <div>
                <p class="text-sm py-1">新竹市北區境福街85號 ｜ 營業時間：週一~週五 8:30~18:00</p>
                <p class="text-sm py-1">Email: tel5430196@gmail.com | TEL: 03-5430196、03-5428886 | FAX: 03-5349883</p>
            </div>

            <p class="pt-4 text-xs text-gray-50" style="text-shadow:1px 1px rgba(0,0,0,.5)">Web Design by 2021 文光行</p>
    </footer>

</body>
</html>