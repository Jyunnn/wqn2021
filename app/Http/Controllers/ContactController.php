<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function contactPost(Request $request){
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'nullable',
            'customer_email' => 'required',
            'customer_content' => 'required',
            'captcha' => 'required|captcha'
        ],[
            'customer_name.required' => '請填入姓名',
            'customer_phone.required' => '請填入聯絡電話和分機',
            'customer_email.required' => '請填入聯絡信箱',
            'customer_content.required' => '請填入訊息',
            'captcha.required' => '請輸入驗證碼',
            'captcha.captcha' => '驗證碼有誤',
        ]);

        if( $validator->fails() ){
            return redirect()->back()->withInput()->withErrors($validator);
        };

        Mail::send('contact_email', [
            'customer_name' => $request->get('customer_name'),
            'customer_phone' => $request->get('customer_phone'),
            'customer_address' => $request->get('customer_address'),
            'customer_email' => $request->get('customer_email'),
            'customer_content' => $request->get('customer_content'),
            ],
            function ($message) {
                    $message->from('mmminshop@hotmail.com', '文光行.tw');
                    $message->to('tel5430196@gmail.com', '文光行')
                    ->subject('有客戶在文光行.tw上留言');
        });

        return back()->with('success', '感謝您的詢問, 我們會盡快回覆您');

    }

}
