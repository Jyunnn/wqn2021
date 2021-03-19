<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="文光行,新竹文光行,新竹文具批發,文具批發新竹,文具行,新竹文具行">
    <meta name="description" content="文光行,傳基實業有限公司,文具批發,辦公家具,印刷設計 文具用品批發 各式品牌書寫用品、黏貼包裝材料、桌上五金用品、檔案收納資料整理、辦公紙品便條紙、圖畫紙工業用紙、事務機器電腦耗材、茶水招待…等等，商品最齊全的文具供應商。">
    <meta property="facebook:title" content="新竹文光行">
    <meta name="facebook:description" content="文光行,傳基實業有限公司,文具批發,辦公家具,印刷設計 文具用品批發 各式品牌書寫用品、黏貼包裝材料、桌上五金用品、檔案收納資料整理、辦公紙品便條紙、圖畫紙工業用紙、事務機器電腦耗材、茶水招待…等等，商品最齊全的文具供應商。">
    <meta name="author" content="Jyunnn">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>
<body>
    <nav class="items-top justify-center shadow dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-7xl mx-auto flex items-center">
            <img class="w-28 md:w-44 py-4" src="{{ asset('images/wqn_logo.png') }}" alt="">
            <div class="mx-5">
                <a class="p-6 inline-block box-border hover:border border-yellow-400" href="/">首頁</a>
                <a class="p-6 inline-block box-border hover:border border-yellow-400" href="{{ route('product.index') }}">商品</a>
                <a class="p-6 inline-block box-border hover:border border-yellow-400" href="{{ route('pdfmenu') }}">目錄</a>
            </div>
            <div class="flex ml-auto">
                <form class="mr-3" action="{{ route('product.find') }}" method="get">
                    <select class="border-0" name="type" id="">
                        <option value="product_name">商品名稱</option>
                        <option value="product_dm_number">目錄編號</option>
                    </select>
                    <input name="keyword" class="border-0" type="text" placeholder="請輸入搜尋項目">
                    <button type="submit">搜尋</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="">
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

            <p class="pt-4 text-xs text-gray-50" style="text-shadow:1px 1px rgba(0,0,0,.1)">Web Design by Jyunnn - 2021 文光行</p>
    </footer>

</body>
</html>