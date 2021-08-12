

<div>
    <div style="padding: 5px">
        <p>Hello</p>
        <p>有客戶從文光行網站留言</p>
        <p>內容於下方</p>
    </div>

    <div style="background-color: #FF5500; padding: 5px">
        <div style="border: 1px 1px soild">
            <p style="color: #FFFFFF">注意: </p>
            <p style="color: #FFFFFF">如果有客人用非中文語言且提供連結的話,不建議點選連結</p>
            <p style="color: #FFFFFF">另外,不要回覆這個信箱, 如果回信不會有人回你</p>
        </div>
    </div>


    <div style="padding: 5px; margin-bottom: 6px">
        <p style="font-size: 16px">聯繫人：</p>    
        <p>{{ $customer_name }}</p>
    </div>

    <div style="padding: 5px; margin-bottom: 6px">
        <p style="font-size: 16px">聯繫電話：</p>    
        <p>{{ $customer_phone }}</p>
    </div>

    <div style="padding: 5px; margin-bottom: 6px">
        <p style="font-size: 16px">地址：</p> 
        <p>{{ $customer_address }}</p>
    </div>

    <div style="padding: 5px; margin-bottom: 6px">
        <p style="font-size: 16px">電子信箱：</p> 
        <p>{{ $customer_email }}</p>
    </div>

    <div style="padding: 5px; margin-bottom: 6px">
        <p style="font-size: 16px">內容：</p> 
        <p>{{ $customer_content }}</p>
    </div>

    <p>信件發送於:
        <a href="www.wqn.com.tw">
            <img style="width: 120px;" src="https://xn--54q560c8mz.tw/images/wqn_logo.png">
        </a>
    </p>

</div>