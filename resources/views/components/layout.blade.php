<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文光行 - {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>
<body>
    <nav class="relative flex items-top justify-center shadow dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="container flex items-center">
                <img class="w-28 md:w-44 py-4" src="{{ asset('images/wqn_logo.png') }}" alt="">
                <a class="p-6 block box-border hover:border border-yellow-400" href="/">首頁</a>
                <a class="p-6 block box-border hover:border border-yellow-400" href="{{ route('product.index') }}">商品</a>
            @if (Route::has('login'))
            <div class="flex ml-auto">
                <form class="mr-3" action="{{ route('product.find') }}" method="get">
                    <select class="border-0" name="type" id="">
                        <option value="product_name">商品名稱</option>
                        <option value="product_dm_number">目錄編號</option>
                    </select>
                    <input name="keyword" class="border-0" type="text" placeholder="請輸入搜尋項目">
                    <button type="submit">搜尋</button>
                </form>
                @auth
                    <a href="{{ url('/dashboard') }}" class="leading-10 text-gray-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="leading-10 text-gray-700">登入</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 leading-10 text-gray-700">註冊</a>
                    @endif
                @endauth
            </div>
            @endif
            </div>
    </nav>
    
    {{ $slot }}

    <footer class="text-center">
        <a href="">聯繫我們</a>｜
        <a href="">服務條款</a>
        <p>Copyright©2021文光行</p>
    </footer>

</body>
</html>