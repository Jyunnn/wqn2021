<div class="pb-8 sm:px-0 max-w-7xl mx-auto">
    <div class="mb-5">
        <select class="w-full mb-5" id="pdfmenu" name="pdfmenu" wire:model="Stationery">
            <option value="none">請選擇目錄</option>
            <option value="Stationery-1">01.書寫筆</option>
            <option value="Stationery-2">02.修正文具</option>
            <option value="Stationery-3">03.用印文具</option>
            <option value="Stationery-4">04.黏貼包裝</option>
            <option value="Stationery-5">05.桌上五金</option>
            <option value="Stationery-6">06.裝訂事務</option>
            <option value="Stationery-7">07.度量衡</option>
            <option value="Stationery-8">08.紙製品</option>
            <option value="Stationery-9">09.標示文具</option>
            <option value="Stationery-10">10.檔案夾</option>
            <option value="Stationery-11">11.檔案收納</option>
            <option value="Stationery-12">12.辦公傢俱</option>
            <option value="Stationery-13">13.事務機器</option>
            <option value="Stationery-14">14.耗材紙</option>
            <option value="Stationery-15">15.電腦耗材</option>
            <option value="Stationery-16">16.美勞益智</option>
            <option value="Stationery-17">17.五金百貨</option>
            <option value="Stationery-18">18.清潔用品</option>
            <option value="Stationery-19">19.茶水招待</option>
        </select>
        <p class="text-3xl font-extrabold mb-3">商品型錄 - {{ $menutitle }}</p>
    </div>
    <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>

    @if(!$Stationery || $Stationery == "none")
    <div class="text-4xl py-44 text-center">
        <p>請在上方選單選擇目錄</p>
        <div class="text-sm mt-5">
            <div class="py-5">
                <p>因檔案較大，首次載入時間可能較久，請耐心等候</p>
                <p>如果您的網路有流量限制請勿選取目錄以免流量暴增</p>
            </div>

            <p class="text-sm">此目錄為新東利製作權所有</p>
            <p>- 翻印必究 -</p>
            <p class="text-4xl py-5">⛔</p>
        </div>
    </div>
    @else
    <iframe src="{{ asset('./pdf/'.$Stationery.'.PDF')}}" class="w-full h-screen" frameborder="1"></iframe>
    @endif
</div>
