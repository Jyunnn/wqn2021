<x-layout>

    <x-slot name="title">
        詢價列表
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto">
        <x-menu />
        <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>

        <p class="text-3xl font-extrabold mb-3"></p>
		@if (!$carts)
		<p>詢價列表為空</p>
		@else
        <table class="my-3 table-auto w-full text-center">
			<thead class="border-b">
				<tr>
					<td>項次</td>
					<td>商品名稱</td>
					<td>屬性</td>
					<td>商品數量</td>
					<td>刪除</td>
				</tr>
			</thead>
			<tbody class="">
				@foreach ($carts as $cart)
				<tr class="border-b">
					<?php
						dump($cart);
					?>
					
					<td> {{ $cart -> {'id'} }}  </td>
					<td>  </td>
					<td> {{ $cart -> {'value'}[0] -> {'attr'} }} </td>
					<td> 
						<input type="number" min="1" value= {{ $cart -> {'value'}[0] -> {'qty'} }}> 
					</td>
					<td> X </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
		<div>
			<div>
				@if(session('success'))
				<div class="text-red-600 mb-5 p-5 border border-red-600">
					<p> {{ session('success') }} </p>
				</div>
				@endif

				@if ($errors->any())
				<div class="text-red-600 mb-5 p-5 border border-red-600">
					<p class="text-xl font-bold">錯誤, 傳送的表單有誤：</p>
					<ol>
					@foreach ($errors->all() as $error)
						<li class="text-xs">{{ $error }}</li>
					@endforeach
					</ol>
				</div>
				@endif
				<div class="py-5">
				<p>詢價報價</p>
				</div>

				<form action="" method="post">
				@csrf
				<div class="py-2">
						<label for="customer_name">聯絡人：</label><br/>
						<input class="rounded-md p-1 w-full" type="text" name="customer_name" value="{{ old('customer_name') }}">
				</div>

				<div class="py-2">
						<label for="customer_phone">連絡電話：</label><br/>
						<input class="rounded-md p-1 w-full" type="tel" name="customer_phone" value="{{ old('customer_phone') }}">
						<p class="text-xs text-red-600">如有分機請註明</p>
				</div>

				<div class="py-2">
						<label for="customer_address">地址：</label><br/>
						<input class="rounded-md p-1 w-full" type="text" name="customer_address" value="{{ old('customer_address') }}">
				</div>

				<div class="py-2">
						<label for="customer_email">電子郵件：</label><br/>
						<input class="rounded-md p-1 w-full" type="email" name="customer_email" value="{{ old('customer_email') }}">
				</div>

				<div class="py-2">
						<label for="customer_remark">備註：</label><br/>
						<textarea class="rounded-md w-full" name="customer_remark"> {{ old('customer_remark') }} </textarea>
				</div>

				<div class="py-2">
						<label for="captcha">請輸入下方驗證碼(大小寫有區別)</label><br/>
						<input class="rounded-md p-1 mb-2" type="text" name="captcha">
						{!! Captcha::img() !!}
				</div>

				<button type="submit" class="py-2 px-3 border-2 rounded-md">送出</button>
				</form>
			</div>
		</div>
    </div>
</x-layout>