<x-layout>
    <x-slot name="title">
        聯繫我們
    </x-slot>

    <div class="py-8 px-3 sm:px-0 max-w-7xl mx-auto">
        <p class="text-3xl font-extrabold mb-3">聯繫我們</p>
        <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
        <div class="py-5">
            <p>目前連繫功能尚未完成</p>
            <p>您可以使用這個表單與我們聯繫</p>
            <p>您的反應將會寄送到我們的電子信箱，我們收到您的反應會立即回覆您</p>
        </div>
        <div>
            <form action="" method="post">
            @csrf
                <div class="flex  w-full">

                    <div class="py-2 pr-2 w-1/2">
                        <label for="customer_name">聯絡人：</label><br/>
                        <input class="rounded-md p-1 w-full" type="text" name="customer_name" id="" value="">
                    </div>

                    <div class="py-2 pl-2 w-1/2">
                        <label for="customer_phone">連絡電話：</label><br/>
                        <input class="rounded-md p-1 w-full" type="tel" name="customer_phone" placeholder="03-5430196#9">
                        <p class="text-xs text-red-600">如有分機請註明</p>
                    </div>

                </div>

                <div class="py-2">
                    <label for="customer_address">地址：</label><br/>
                    <input class="rounded-md p-1 w-full" type="text" name="customer_address">
                </div>

                <div class="py-2">
                    <label for="customer_email">電子郵件：</label><br/>
                    <input class="rounded-md p-1 w-1/2" type="email" name="customer_email">
                </div>

                <div class="py-2">
                    <label for="customer_content">內容：</label><br/>
                    <textarea class="rounded-md w-full" name="customer_content" cols="50" rows="10"></textarea>
                </div>

                <!-- <button type="submit" class="py-2 px-3 border-2 rounded-md">送出</button> -->
            </form>
        </div>
    </div>
</x-layout>