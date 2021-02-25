<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>
<body>
    <nav class="relative flex items-top justify-center shadow dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="container flex items-center">
            <img class="w-28 md:w-44 py-4" src="{{ asset('images/wqn_logo.png') }}" alt="">
            <a class="p-6 block box-border hover:border border-yellow-400" href="/">首頁</a>
            <a class="p-6 block box-border hover:border border-yellow-400" href="{{ route('product.index') }}">商品</a>
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
    
    {{ $slot }}


    <footer class="container mx-auto py-4 text-center">
            <div class="flex justify-center">
                <a class="block px-4" href="">首頁</a>
                <a class="block px-4" href="{{ route('product.index') }}">商品</a>
                <a class="block px-4" href="">聯繫我們</a>
                <a class="block px-4" href="">店面位置</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="block px-4">後台管理</a>
                    <a href="{{ route('product.create') }}" class="block px-4">建立商品</a>
                @else
                    <a href="{{ route('login') }}" class="block px-4">管理員登入</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-700">註冊</a>
                    @endif
                @endauth
            </div>
           <p class="pt-4">Copyright©️2021 文光行</p>
    </footer>

</body>
</html>