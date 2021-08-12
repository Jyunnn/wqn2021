<x-layout>
    <x-slot name="title">
        聯繫我們
    </x-slot>

    <div class="max-w-7xl mx-auto py-8 px-3 sm:px-0 max-w-7xl mx-auto">
        <p class="text-3xl font-extrabold mb-3">聯繫我們</p>
        <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
        <div class=" flex grid lg:grid-cols-2 gap-12">
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
                    <p>可以使用這個表單與我們聯繫</p>
                    <p>您的反應將會寄送到我們的電子信箱，我們收到您的反應會立即回覆您</p>
                </div>

								<div class="py-5">
                    <p>您也可以使用LINE加入文光行官方帳號與我們聯繫</p>
										<a href="https://lin.ee/WHrrRif">
											<img class="h-12" style="display: inline;" src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" alt="加入好友">
										</a>
									</div>
                <div>
                    <form action="{{ route('contact.post') }}" method="post">
                    @csrf
                        <div class="flex  w-full">

                            <div class="py-2 pr-2 w-1/2">
                                <label for="customer_name">聯絡人：</label><br/>
                                <input class="rounded-md p-1 w-full" type="text" name="customer_name" value="{{ old('customer_name') }}">
                            </div>

                            <div class="py-2 pl-2 w-1/2">
                                <label for="customer_phone">連絡電話：</label><br/>
                                <input class="rounded-md p-1 w-full" type="tel" name="customer_phone" value="{{ old('customer_phone') }}">
                                <p class="text-xs text-red-600">如有分機請註明</p>
                            </div>

                        </div>

                        <div class="py-2">
                            <label for="customer_address">地址：</label><br/>
                            <input class="rounded-md p-1 w-full" type="text" name="customer_address" value="{{ old('customer_address') }}">
                        </div>

                        <div class="py-2">
                            <label for="customer_email">電子郵件：</label><br/>
                            <input class="rounded-md p-1 w-1/2" type="email" name="customer_email" value="{{ old('customer_email') }}">
                        </div>

                        <div class="py-2">
                            <label for="customer_content">內容：</label><br/>
                            <textarea class="rounded-md w-full" name="customer_content" cols="50" rows="10"> {{ old('customer_content') }} </textarea>
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

            <div class="hidden lg:flex">
                <svg 
                    version="1.1"
                    xmlns:x="&ns_extend;"
                    xmlns:i="&ns_ai;" 
                    xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" 
                    xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                    x="0px" y="0px" 
                    max-width="650px" max-height="650px" 
                    viewBox="0 0 577.586 580.471"
                    style="enable-background:new 0 0 577.586 580.471;" 
                    xml:space="preserve"
                >
                <path style="fill:#004876;" d="M84.951,507.371l-0.298-0.276c0.719-0.525,3.021-2.275,4.686-3.639
                    c1.375-1.139,2.898-2.468,4.275-3.859c0.101-0.106,0.205-0.205,0.308-0.312c0.385-0.398,0.761-0.805,1.116-1.201
                    c0.099-0.113,0.192-0.225,0.285-0.336c0.468-0.541,0.891-1.083,1.26-1.619c0.059-0.091,0.12-0.173,0.176-0.253
                    c0.005-0.003,0.002-0.01,0.008-0.012c0.045-0.06,0.088-0.125,0.133-0.186c1.171-1.611,2.031-2.334,2.938-2.677
                    c0.29-0.108,0.584-0.178,0.9-0.221l0.006-0.002c0.224-0.043,0.456-0.063,0.703-0.079c0.162-0.011,0.33-0.022,0.505-0.032
                    c1.259-0.06,1.34,0.27,4.358-0.954l0.234,0.605l0.922,2.344c-0.097,0.036-0.191,0.08-0.291,0.109l-0.004,0.002
                    c-3.021,1.184-3.177,0.901-4.501,0.968c-0.043,0-0.079,0.005-0.122,0.004c-0.14,0.003-0.273,0.011-0.4,0.016l-0.006,0.002
                    c-1.011,0.063-1.611,0.204-2.521,1.25c-0.31,0.354-0.656,0.806-1.065,1.401c-0.202,0.297-0.423,0.592-0.657,0.884l-0.006,0.003
                    c-0.117,0.161-0.234,0.308-0.362,0.457c-0.519,0.646-1.094,1.276-1.695,1.902c-0.096,0.104-0.198,0.211-0.301,0.31
                    c-0.002,0.008-0.009,0.01-0.014,0.013c-1.699,1.744-3.596,3.375-5.21,4.677c-1.519,1.228-2.782,2.153-3.397,2.598
                    c-0.7-0.696-0.918-0.897-1.702-1.637L84.951,507.371z"/>
                <path style="fill:#B01616;" d="M86.575,515.243c0.513-0.545,1.535-1.663,2.709-3.157c1.381-1.738,2.978-3.988,4.22-6.41
                    c0.257-0.516,0.506-1.023,0.73-1.542c0.115-0.272,0.225-0.539,0.33-0.807c0.078-0.204,0.152-0.405,0.22-0.613
                    c0.005-0.013,0.015-0.029,0.019-0.043c0.352-1.017,0.783-1.907,1.267-2.678c0.453-0.736,0.956-1.364,1.483-1.9
                    c0.292-0.294,0.584-0.567,0.884-0.81c0.144-0.115,0.284-0.229,0.427-0.334c1.85-1.364,2.261-1.003,3.258-1.166
                    c0.404-0.063,0.665-0.068,0.717-0.076l0.818,2.713l0.053,0.179c-0.042,0-0.247,0.014-0.577,0.071
                    c-0.698,0.12-0.482-0.399-1.786,0.425c-1.207,0.741-2.46,1.912-3.395,3.743c-0.176,0.345-0.345,0.706-0.492,1.101
                    c-0.055,0.13-0.105,0.264-0.15,0.405c-0.266,0.767-0.577,1.52-0.921,2.266c-1.576,3.396-3.853,6.48-5.585,8.586
                    c-0.754,0.909-1.406,1.626-1.859,2.118C88.254,516.831,87.447,516.125,86.575,515.243z"/>
                <path style="fill:#B5B6B5;" d="M111.074,503.909c0.138,0.882,0.241,1.854,0.305,2.894c-0.985-0.115-2.292-0.216-3.709-0.229h-0.028
                    c-0.265,0-0.542,0-0.824,0.007c-1.313,0.014-2.69,0.115-3.98,0.354h-0.006c-1.048,0.188-2.034,0.461-2.892,0.851h-0.005
                    c-0.144,0.065-0.283,0.138-0.421,0.21c-0.132,0.071-0.259,0.145-0.38,0.224h-0.005c-0.12,0.071-0.23,0.151-0.34,0.23
                    c-0.322,0.231-0.604,0.483-0.84,0.772c-0.213,0.253-0.438,0.498-0.674,0.729h-0.006c-0.08,0.093-0.167,0.174-0.253,0.245
                    c-0.081,0.08-0.161,0.158-0.248,0.23c-0.679,0.591-1.44,1.118-2.229,1.573c-3.254,1.876-5.416,2.471-7.052,2.73H87.46
                    c-0.362,0.064-0.616,0.096-0.726,0.108c-0.022,0.007-0.04,0.007-0.052,0.007l-0.207-2.871c0.017,0,0.328-0.042,0.847-0.13
                    c0.167-0.029,0.362-0.065,0.57-0.101c0.006,0,0.006,0,0.012-0.008h0.006c0.869-0.158,0.381-0.243,1.665-0.646c0,0,0,0,0.006,0
                    c1.359-0.425,2.822-1.01,4.136-1.789c0.219-0.123,0.438-0.259,0.646-0.405c0.167-0.108,0.328-0.223,0.483-0.338
                    c0.524-0.396,1.002-0.829,1.412-1.313c0.034-0.03,0.063-0.065,0.092-0.101c0.167-0.203,0.346-0.39,0.536-0.563
                    c0.012-0.016,0.023-0.03,0.035-0.037c0.83-0.779,1.86-1.349,3.001-1.774c0.633-0.236,1.296-0.427,1.981-0.57h0.006
                    c1.74-0.389,3.583-0.52,5.23-0.526h0.11c1.515,0,2.868,0.102,3.819,0.203"/>
                <path style="fill:#595859;" d="M84.311,507.758c0.484,0.102,1.267,0.119,2.128-0.429v-0.008c0.538-0.341,1.108-0.903,1.656-1.806
                    c0.191-0.31,0.383-0.673,0.568-1.078h0.004c0.207-0.458,0.408-0.966,0.596-1.544c0.049-0.143,0.098-0.293,0.144-0.444
                    c0.008-0.023,0.018-0.054,0.027-0.087c0.137-0.459,0.271-0.967,0.399-1.505c0.1-0.427,0.203-0.823,0.314-1.212
                    c0.005-0.032,0.015-0.056,0.024-0.086c0.03-0.111,0.064-0.223,0.098-0.325c0.282-0.943,0.6-1.759,0.934-2.465
                    c2.751-5.813,5.945-3.995,6.149-3.908l-0.18,2.899l-0.015,0.229c-0.006-0.008-0.14-0.054-0.368-0.109h-0.013
                    c-0.913-0.206-2.417-0.583-4.28,2.403c-0.353,0.57-0.685,1.243-0.983,2.059H91.51c-0.019,0.048-0.037,0.097-0.055,0.152
                    c-0.04,0.109-0.076,0.221-0.116,0.332c-0.167,0.506-0.326,1.069-0.468,1.679c-0.021,0.088-0.042,0.183-0.067,0.27
                    c-0.024,0.111-0.049,0.215-0.076,0.316c-0.033,0.135-0.07,0.27-0.104,0.396c-0.024,0.096-0.051,0.19-0.076,0.285
                    c-0.283,1.007-0.588,1.886-0.904,2.63c-0.158,0.381-0.322,0.721-0.487,1.038h-0.003c-1.007,1.947-2.112,2.852-3.068,3.239
                    c-0.481,0.198-0.929,0.262-1.306,0.262h-0.106c-0.143-0.823-0.265-1.894-0.359-3.146"/>
                <g>
                    <g>
                        <rect x="351.948" y="62.724" style="fill:#474342;" width="206.665" height="360.963"/>
                        <g>
                            <g>
                                <rect x="358.585" y="68.663" style="fill:#4C4948;" width="197.972" height="46.667"/>
                                <g>
                                    <rect x="360.209" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_1_" x="361.376" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.658" y="69.718" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -1.8316 133.3998)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="75.306" transform="matrix(0.937 -0.3492 0.3492 0.937 -3.7802 133.7678)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.657" y="80.895" transform="matrix(0.937 -0.3492 0.3492 0.937 -5.7318 134.1196)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.658" y="86.484" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -7.6855 134.4549)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="92.072" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -9.6365 134.8066)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="97.659" transform="matrix(0.937 -0.3492 0.3492 0.937 -11.586 135.1749)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.657" y="103.248" transform="matrix(0.937 -0.3492 0.3492 0.937 -13.5376 135.5267)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.658" y="108.837" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -15.4903 135.8618)" style="clip-path:url(#SVGID_2_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_3_" x="380.211" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_4_">
                                            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="69.718" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -0.6463 139.9761)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="75.306" transform="matrix(0.937 -0.3492 0.3492 0.937 -2.5945 140.3448)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="80.895" transform="matrix(0.937 -0.3492 0.3492 0.937 -4.5462 140.6967)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="86.484" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -6.5001 141.0313)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="92.072" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -8.4511 141.3829)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="97.659" transform="matrix(0.937 -0.3492 0.3492 0.937 -10.4003 141.752)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="103.248" transform="matrix(0.937 -0.3492 0.3492 0.937 -12.3519 142.1038)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="108.837" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -14.3049 142.4381)" style="clip-path:url(#SVGID_4_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_5_" x="399.046" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_6_">
                                            <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="69.718" transform="matrix(0.9371 -0.3492 0.3492 0.9371 0.5391 146.5524)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="75.306" transform="matrix(0.937 -0.3492 0.3492 0.937 -1.4089 146.9219)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="80.895" transform="matrix(0.937 -0.3492 0.3492 0.937 -3.3605 147.2738)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="86.484" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -5.3147 147.6076)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="92.072" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -7.2657 147.9592)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="97.659" transform="matrix(0.937 -0.3492 0.3492 0.937 -9.2147 148.3291)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="103.248" transform="matrix(0.937 -0.3492 0.3492 0.937 -11.1663 148.6809)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="108.837" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -13.1195 149.0144)" style="clip-path:url(#SVGID_6_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_7_" x="417.881" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_8_">
                                            <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="69.718" transform="matrix(0.9371 -0.3492 0.3492 0.9371 1.7245 153.1288)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="75.306" transform="matrix(0.937 -0.3492 0.3492 0.937 -0.2232 153.499)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="80.895" transform="matrix(0.937 -0.3492 0.3492 0.937 -2.1748 153.8508)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="86.484" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -4.1293 154.1839)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="92.072" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -6.0804 154.5356)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="97.659" transform="matrix(0.937 -0.3492 0.3492 0.937 -8.029 154.9062)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="103.248" transform="matrix(0.937 -0.3492 0.3492 0.937 -9.9806 155.258)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="108.837" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -11.9341 155.5907)" style="clip-path:url(#SVGID_8_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_9_" x="436.716" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_10_">
                                            <use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="69.718" transform="matrix(0.9371 -0.3491 0.3491 0.9371 2.9091 159.7016)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="75.306" transform="matrix(0.9371 -0.3492 0.3492 0.9371 0.9618 160.0726)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="80.895" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -0.9898 160.4244)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="86.484" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -2.9445 160.7567)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="92.072" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -4.8955 161.1083)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="97.659" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -6.8438 161.4797)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="103.248" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -8.7954 161.8315)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="108.837" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -10.7492 162.1634)" style="clip-path:url(#SVGID_10_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_11_" x="455.552" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_12_">
                                            <use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="69.718" transform="matrix(0.9371 -0.3492 0.3492 0.9371 4.0968 166.2887)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="75.306" transform="matrix(0.937 -0.3492 0.3492 0.937 2.1495 166.6606)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="80.894" transform="matrix(0.937 -0.3492 0.3492 0.937 0.1978 167.0124)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="86.484" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -1.7573 167.3439)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="92.072" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -3.7084 167.6956)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="97.659" transform="matrix(0.937 -0.3492 0.3492 0.937 -5.6566 168.0678)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="103.248" transform="matrix(0.937 -0.3492 0.3492 0.937 -7.6083 168.4197)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="108.837" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -9.5625 168.7509)" style="clip-path:url(#SVGID_12_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="71.376" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_13_" x="474.386" y="73.092" width="15.5" height="37.808"/>
                                        </defs>
                                        <clipPath id="SVGID_14_">
                                            <use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="69.718" transform="matrix(0.9371 -0.3491 0.3491 0.9371 5.279 172.8501)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="75.306" transform="matrix(0.9371 -0.3492 0.3492 0.9371 3.3322 173.2227)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="80.895" transform="matrix(0.9371 -0.3492 0.3492 0.9371 1.3807 173.5745)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="86.484" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -0.5745 173.9052)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="92.072" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -2.5255 174.2568)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="97.659" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -4.4732 174.6297)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="103.248" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -6.4247 174.9815)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="108.838" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -8.379 175.3118)" style="clip-path:url(#SVGID_14_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="77.548" style="fill:#615F5F;" width="17.834" height="34.745"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_15_" x="493.222" y="79.005" width="15.5" height="32.104"/>
                                        </defs>
                                        <clipPath id="SVGID_16_">
                                            <use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,76.428 491.882,82.636 490.44,79.354 
                                            510.062,73.146 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,81.173 491.882,87.382 490.44,84.099 
                                            510.062,77.891 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,85.919 491.882,92.128 490.44,88.845 
                                            510.062,82.636 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,90.666 491.882,96.873 490.44,93.59 
                                            510.062,87.382 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,95.41 491.882,101.619 490.44,98.335 
                                            510.062,92.128 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,100.156 491.882,106.365 490.44,103.082 
                                            510.062,96.873 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,104.902 491.882,111.11 490.44,107.828 
                                            510.062,101.619 						"/>
                                        <polygon style="clip-path:url(#SVGID_16_);fill:#474342;" points="511.501,109.647 491.882,115.855 490.44,112.572 
                                            510.062,106.365 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="71.376" style="fill:#45B037;" width="17.834" height="4.167"/>
                                <rect x="492.358" y="71.614" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="71.538" style="fill:#6D6C6C;" width="41.666" height="40.917"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="74.753" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="93.657" r="1.5"/>
                                    <rect x="515.001" y="78.08" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="80.663" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="83.246" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="85.83" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="88.414" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="97.08" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="99.663" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="102.246" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="104.83" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="107.414" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="109.945" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="72.513" style="fill:#474342;" width="32.271" height="4.379"/>
                                    <rect x="519.897" y="91.468" style="fill:#474342;" width="32.271" height="4.377"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="119.066" style="fill:#4C4948;" width="197.972" height="46.666"/>
                                <g>
                                    <rect x="360.209" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_17_" x="361.376" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_18_">
                                            <use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.657" y="120.12" transform="matrix(0.937 -0.3492 0.3492 0.937 -19.4292 136.5888)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.657" y="125.709" transform="matrix(0.937 -0.3492 0.3492 0.937 -21.3809 136.9407)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.658" y="131.298" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -23.3326 137.2753)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="136.886" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -25.2837 137.627)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="142.474" transform="matrix(0.937 -0.3492 0.3492 0.937 -27.235 137.996)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.657" y="148.063" transform="matrix(0.937 -0.3492 0.3492 0.937 -29.1866 138.3478)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="358.658" y="153.652" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -31.1375 138.6821)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="159.24" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -33.0885 139.0338)" style="clip-path:url(#SVGID_18_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_19_" x="380.211" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_20_">
                                            <use xlink:href="#SVGID_19_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="120.12" transform="matrix(0.937 -0.3492 0.3492 0.937 -18.2436 143.1659)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="125.709" transform="matrix(0.937 -0.3492 0.3492 0.937 -20.1952 143.5177)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="131.298" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -22.1472 143.8517)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="136.886" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -24.0983 144.2033)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="142.474" transform="matrix(0.937 -0.3492 0.3492 0.937 -26.0493 144.5731)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="148.063" transform="matrix(0.937 -0.3492 0.3492 0.937 -28.0009 144.9249)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="377.492" y="153.652" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -29.9521 145.2585)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="159.24" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -31.9031 145.6101)" style="clip-path:url(#SVGID_20_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_21_" x="399.046" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_22_">
                                            <use xlink:href="#SVGID_21_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="120.12" transform="matrix(0.937 -0.3492 0.3492 0.937 -17.0579 149.743)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="125.709" transform="matrix(0.937 -0.3492 0.3492 0.937 -19.0095 150.0948)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="131.298" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -20.9619 150.428)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="136.886" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -22.9129 150.7796)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="142.474" transform="matrix(0.937 -0.3492 0.3492 0.937 -24.8636 151.1502)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="148.063" transform="matrix(0.937 -0.3492 0.3492 0.937 -26.8153 151.502)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="396.327" y="153.652" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -28.7667 151.8348)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="159.24" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -30.7177 152.1865)" style="clip-path:url(#SVGID_22_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_23_" x="417.881" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_24_">
                                            <use xlink:href="#SVGID_23_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="120.12" transform="matrix(0.937 -0.3492 0.3492 0.937 -15.8723 156.3201)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="125.709" transform="matrix(0.937 -0.3492 0.3492 0.937 -17.8239 156.6719)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="131.298" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -19.7765 157.0043)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="136.886" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -21.7275 157.356)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="142.474" transform="matrix(0.937 -0.3492 0.3492 0.937 -23.678 157.7273)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="148.063" transform="matrix(0.937 -0.3492 0.3492 0.937 -25.6296 158.0791)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.126"/>
                                        
                                            <rect x="415.162" y="153.652" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -27.5813 158.4111)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="159.24" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -29.5324 158.7628)" style="clip-path:url(#SVGID_24_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_25_" x="436.716" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_26_">
                                            <use xlink:href="#SVGID_25_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="120.12" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -14.6869 162.8935)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="125.709" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -16.6385 163.2453)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="131.298" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -18.5914 163.5769)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="136.886" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -20.5424 163.9286)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="142.474" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -22.4925 164.3006)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="148.063" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -24.4441 164.6524)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="433.997" y="153.652" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -26.396 164.9837)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="159.24" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -28.347 165.3353)" style="clip-path:url(#SVGID_26_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_27_" x="455.552" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_28_">
                                            <use xlink:href="#SVGID_27_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="120.12" transform="matrix(0.937 -0.3492 0.3492 0.937 -13.5002 169.4819)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="125.709" transform="matrix(0.937 -0.3492 0.3492 0.937 -15.4519 169.8337)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="131.298" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -17.4052 170.1646)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="136.886" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -19.3563 170.5163)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="142.474" transform="matrix(0.937 -0.3492 0.3492 0.937 -21.3063 170.8892)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="148.062" transform="matrix(0.937 -0.3492 0.3492 0.937 -23.258 171.241)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.126"/>
                                        
                                            <rect x="452.832" y="153.652" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -25.2103 171.5715)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="159.24" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -27.1615 171.9232)" style="clip-path:url(#SVGID_28_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="121.78" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_29_" x="474.386" y="123.496" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_30_">
                                            <use xlink:href="#SVGID_29_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="120.12" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -12.3161 176.0435)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="125.709" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -14.2676 176.3953)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="131.299" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -16.221 176.7253)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="136.886" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -18.172 177.0769)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="142.474" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -20.1215 177.4505)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="148.063" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -22.073 177.8023)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="153.652" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -24.0255 178.132)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="159.24" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -25.9765 178.4836)" style="clip-path:url(#SVGID_30_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="127.951" style="fill:#615F5F;" width="17.834" height="34.746"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_31_" x="493.222" y="129.408" width="15.5" height="32.105"/>
                                        </defs>
                                        <clipPath id="SVGID_32_">
                                            <use xlink:href="#SVGID_31_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,126.832 491.882,133.04 490.44,129.757 
                                            510.062,123.548 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,131.577 491.882,137.785 490.44,134.502 
                                            510.062,128.294 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,136.322 491.882,142.531 490.44,139.248 
                                            510.062,133.04 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,141.068 491.882,147.276 490.44,143.994 
                                            510.062,137.785 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,145.813 491.882,152.021 490.44,148.739 
                                            510.062,142.531 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,150.558 491.882,156.767 490.44,153.484 
                                            510.062,147.276 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,155.304 491.882,161.513 490.44,158.23 
                                            510.062,152.021 						"/>
                                        <polygon style="clip-path:url(#SVGID_32_);fill:#474342;" points="511.501,160.05 491.882,166.257 490.44,162.975 
                                            510.062,156.767 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="121.78" style="fill:#45B037;" width="17.834" height="4.167"/>
                                <rect x="492.358" y="122.017" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="121.941" style="fill:#6D6C6C;" width="41.666" height="40.916"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="125.156" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="144.06" r="1.5"/>
                                    <rect x="515.001" y="128.482" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="131.066" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="133.649" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="136.232" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="138.816" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="147.482" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="150.066" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="152.649" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="155.232" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="157.816" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="160.347" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="122.917" style="fill:#474342;" width="32.271" height="4.378"/>
                                    <rect x="519.897" y="141.871" style="fill:#474342;" width="32.271" height="4.378"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="169.468" style="fill:#4C4948;" width="197.972" height="46.667"/>
                                <g>
                                    <rect x="360.209" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_33_" x="361.376" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_34_">
                                            <use xlink:href="#SVGID_33_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.657" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -37.0292 139.7529)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="176.112" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -38.9796 140.0957)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -40.9344 140.4832)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="187.29" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -42.8824 140.7992)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="192.878" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -44.8334 141.1508)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="198.466" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -46.7845 141.5025)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -48.7411 141.8907)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="209.644" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -50.6872 142.206)" style="clip-path:url(#SVGID_34_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_35_" x="380.211" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_36_">
                                            <use xlink:href="#SVGID_35_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -35.8437 146.3296)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="176.112" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -37.7943 146.672)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -39.7485 147.0611)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="187.29" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -41.697 147.3755)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="192.878" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -43.6481 147.7272)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="198.466" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -45.5991 148.0788)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -47.5552 148.4686)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="209.644" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -49.5019 148.7823)" style="clip-path:url(#SVGID_36_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_37_" x="399.046" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_38_">
                                            <use xlink:href="#SVGID_37_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -34.6582 152.9063)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="176.112" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -36.6089 153.2483)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -38.5626 153.6389)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="187.29" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -40.5117 153.9518)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="192.878" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -42.4627 154.3035)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="198.466" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -44.4137 154.6552)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -46.3692 155.0464)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="209.644" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -48.3165 155.3586)" style="clip-path:url(#SVGID_38_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_39_" x="417.881" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_40_">
                                            <use xlink:href="#SVGID_39_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -33.4727 159.483)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="176.112" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -35.4235 159.8246)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -37.3766 160.2168)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="187.29" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -39.3263 160.5281)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="192.878" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -41.2773 160.8798)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="198.466" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -43.2283 161.2315)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -45.1833 161.6243)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="209.644" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -47.1311 161.9349)" style="clip-path:url(#SVGID_40_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_41_" x="436.716" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_42_">
                                            <use xlink:href="#SVGID_41_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -32.2871 166.0559)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="176.112" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -34.238 166.3972)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -36.1905 166.7908)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="187.29" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -38.1407 167.1006)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="192.878" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -40.0917 167.4522)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="198.466" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -42.0427 167.8039)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -43.997 168.1982)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="209.644" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -45.9454 168.5073)" style="clip-path:url(#SVGID_42_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_43_" x="455.552" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_44_">
                                            <use xlink:href="#SVGID_43_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -31.1017 172.6443)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="176.112" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -33.0529 172.9852)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="181.699" transform="matrix(0.937 -0.3493 0.3493 0.937 -35.0049 173.3805)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="187.29" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -36.9558 173.6887)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="192.878" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -38.9069 174.0404)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="198.466" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -40.858 174.3922)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="204.053" transform="matrix(0.937 -0.3493 0.3493 0.937 -42.8119 174.7881)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="209.643" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -44.761 175.0957)" style="clip-path:url(#SVGID_44_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="172.183" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_45_" x="474.386" y="173.897" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_46_">
                                            <use xlink:href="#SVGID_45_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="170.524" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -29.9162 179.2049)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="176.113" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -31.8674 179.5454)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="181.699" transform="matrix(0.937 -0.3492 0.3492 0.937 -33.8187 179.9421)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="187.29" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -35.77 180.2488)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="192.878" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -37.7209 180.6004)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="198.466" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -39.6719 180.9521)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="204.053" transform="matrix(0.937 -0.3492 0.3492 0.937 -41.625 181.3495)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="209.644" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -43.5745 181.6555)" style="clip-path:url(#SVGID_46_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="178.354" style="fill:#615F5F;" width="17.834" height="34.744"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_47_" x="493.222" y="179.812" width="15.5" height="32.104"/>
                                        </defs>
                                        <clipPath id="SVGID_48_">
                                            <use xlink:href="#SVGID_47_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,177.233 491.882,183.442 490.44,180.159 
                                            510.062,173.952 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,181.979 491.882,188.188 490.44,184.905 
                                            510.062,178.696 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,186.726 491.882,192.935 490.44,189.651 
                                            510.062,183.442 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,191.472 491.882,197.679 490.44,194.396 
                                            510.062,188.188 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,196.216 491.882,202.425 490.44,199.142 
                                            510.062,192.935 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,200.962 491.882,207.171 490.44,203.888 
                                            510.062,197.679 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,205.708 491.882,211.915 490.44,208.634 
                                            510.062,202.425 						"/>
                                        <polygon style="clip-path:url(#SVGID_48_);fill:#474342;" points="511.501,210.452 491.882,216.661 490.44,213.378 
                                            510.062,207.171 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="172.183" style="fill:#45B037;" width="17.834" height="4.166"/>
                                <rect x="492.358" y="172.419" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="172.343" style="fill:#6D6C6C;" width="41.666" height="40.918"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="175.558" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="194.462" r="1.5"/>
                                    <rect x="515.001" y="178.886" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="181.468" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="184.052" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="186.636" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="189.22" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="197.886" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="200.468" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="203.052" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="205.636" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="208.22" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="210.751" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="173.319" style="fill:#474342;" width="32.271" height="4.377"/>
                                    <rect x="519.897" y="192.274" style="fill:#474342;" width="32.271" height="4.377"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="219.872" style="fill:#4C4948;" width="197.972" height="46.666"/>
                                <g>
                                    <rect x="360.209" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_49_" x="361.376" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_50_">
                                            <use xlink:href="#SVGID_49_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.658" y="220.927" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -54.6268 142.9161)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -56.5853 143.305)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="232.105" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -58.5296 143.6196)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="237.692" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -60.4806 143.9712)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="243.28" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -62.4317 144.3229)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -64.392 144.7125)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="254.458" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -66.3344 145.0264)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="260.046" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -68.2855 145.3781)" style="clip-path:url(#SVGID_50_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_51_" x="380.211" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_52_">
                                            <use xlink:href="#SVGID_51_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="220.927" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -53.4414 149.4924)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -55.3994 149.8828)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="232.105" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -57.3442 150.1959)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="237.692" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -59.2952 150.5475)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="243.28" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -61.2463 150.8992)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -63.206 151.2903)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="254.458" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -65.149 151.6027)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="260.046" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -67.1001 151.9544)" style="clip-path:url(#SVGID_52_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_53_" x="399.046" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_54_">
                                            <use xlink:href="#SVGID_53_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="220.927" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -52.2561 156.0687)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -54.2134 156.4607)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="232.105" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -56.1588 156.7722)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="237.692" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -58.1099 157.1239)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="243.28" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -60.0609 157.4755)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -62.0201 157.8682)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="254.458" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -63.9637 158.179)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="260.046" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -65.9147 158.5307)" style="clip-path:url(#SVGID_54_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_55_" x="417.881" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_56_">
                                            <use xlink:href="#SVGID_55_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="220.927" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -51.0707 162.6451)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -53.0275 163.0385)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="232.105" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -54.9734 163.3485)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="237.692" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -56.9245 163.7002)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="243.28" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -58.8755 164.0518)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -60.8341 164.446)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="254.458" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -62.7783 164.7553)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="260.046" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -64.7293 165.107)" style="clip-path:url(#SVGID_56_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_57_" x="436.716" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_58_">
                                            <use xlink:href="#SVGID_57_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="220.927" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -49.8849 169.2174)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -51.841 169.6125)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="232.105" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -53.7875 169.9209)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="237.692" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -55.7385 170.2725)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="243.28" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -57.6895 170.6242)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -59.6475 171.0199)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="254.458" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -61.5922 171.3276)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="260.046" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -63.5432 171.6793)" style="clip-path:url(#SVGID_58_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_59_" x="455.552" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_60_">
                                            <use xlink:href="#SVGID_59_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="220.927" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -48.7007 175.8058)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="226.514" transform="matrix(0.937 -0.3493 0.3493 0.937 -50.6564 176.2025)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="232.104" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -52.6036 176.5094)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="237.692" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -54.5547 176.8611)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="243.28" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -56.5059 177.2128)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="248.867" transform="matrix(0.937 -0.3493 0.3493 0.937 -58.4634 177.6101)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="254.458" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -60.4088 177.9163)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="260.046" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -62.3599 178.268)" style="clip-path:url(#SVGID_60_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="222.585" style="fill:#615F5F;" width="17.834" height="40.918"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_61_" x="474.386" y="224.302" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_62_">
                                            <use xlink:href="#SVGID_61_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="220.927" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -47.5139 182.3655)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="226.514" transform="matrix(0.937 -0.3492 0.3492 0.937 -49.4688 182.7636)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="232.105" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -51.4164 183.069)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="237.693" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -53.3674 183.4206)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="243.28" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -55.3184 183.7722)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="248.867" transform="matrix(0.937 -0.3492 0.3492 0.937 -57.2751 184.171)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="254.458" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -59.2209 184.4756)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="260.046" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -61.1719 184.8273)" style="clip-path:url(#SVGID_62_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="228.757" style="fill:#615F5F;" width="17.834" height="34.746"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_63_" x="493.222" y="230.214" width="15.5" height="32.105"/>
                                        </defs>
                                        <clipPath id="SVGID_64_">
                                            <use xlink:href="#SVGID_63_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,227.638 491.882,233.845 490.44,230.563 
                                            510.062,224.354 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,232.382 491.882,238.591 490.44,235.308 
                                            510.062,229.101 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,237.128 491.882,243.337 490.44,240.054 
                                            510.062,233.845 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,241.874 491.882,248.081 490.44,244.8 
                                            510.062,238.591 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,246.618 491.882,252.827 490.44,249.544 
                                            510.062,243.337 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,251.364 491.882,257.573 490.44,254.29 
                                            510.062,248.081 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,256.11 491.882,262.319 490.44,259.036 
                                            510.062,252.827 						"/>
                                        <polygon style="clip-path:url(#SVGID_64_);fill:#474342;" points="511.501,260.856 491.882,267.063 490.44,263.78 
                                            510.062,257.573 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="222.585" style="fill:#45B037;" width="17.834" height="4.168"/>
                                <rect x="492.358" y="222.823" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="222.747" style="fill:#6D6C6C;" width="41.666" height="40.916"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="225.962" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="244.866" r="1.5"/>
                                    <rect x="515.001" y="229.288" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="231.872" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="234.454" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="237.038" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="239.622" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="248.288" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="250.872" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="253.454" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="256.038" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="258.622" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="261.153" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="223.722" style="fill:#474342;" width="32.271" height="4.379"/>
                                    <rect x="519.897" y="242.677" style="fill:#474342;" width="32.271" height="4.377"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="270.274" style="fill:#4C4948;" width="197.972" height="46.666"/>
                                <g>
                                    <rect x="360.209" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_65_" x="361.376" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_66_">
                                            <use xlink:href="#SVGID_65_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.657" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -72.2362 146.1267)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="276.919" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -74.1768 146.44)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="282.507" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -76.1278 146.7916)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="288.095" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -78.0788 147.1433)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -80.0428 147.5342)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="299.272" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -81.9816 147.8468)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="304.86" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -83.9326 148.1984)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="310.448" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -85.8837 148.5501)" style="clip-path:url(#SVGID_66_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_67_" x="380.211" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_68_">
                                            <use xlink:href="#SVGID_67_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -71.0502 152.7046)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="276.919" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -72.9914 153.0163)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="282.507" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -74.9424 153.368)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="288.095" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -76.8935 153.7196)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -78.8569 154.1121)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="299.272" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -80.7962 154.4231)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="304.86" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -82.7473 154.7748)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="310.448" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -84.6983 155.1264)" style="clip-path:url(#SVGID_68_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_69_" x="399.046" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_70_">
                                            <use xlink:href="#SVGID_69_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -69.8643 159.2825)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="276.919" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -71.806 159.5926)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="282.507" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -73.757 159.9443)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="288.095" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -75.7081 160.2959)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -77.6709 160.69)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="299.272" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -79.6108 160.9994)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="304.86" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -81.5619 161.3511)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="310.448" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -83.5129 161.7028)" style="clip-path:url(#SVGID_70_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_71_" x="417.881" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_72_">
                                            <use xlink:href="#SVGID_71_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -68.6783 165.8603)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="276.919" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -70.6206 166.1689)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="282.507" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -72.5717 166.5206)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="288.095" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -74.5227 166.8723)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -76.485 167.2678)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="299.272" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -78.4255 167.5757)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="304.86" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -80.3765 167.9274)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="310.448" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -82.3275 168.2791)" style="clip-path:url(#SVGID_72_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_73_" x="436.716" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_74_">
                                            <use xlink:href="#SVGID_73_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -67.4915 172.4341)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="276.919" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -69.4344 172.7411)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="282.507" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -71.3854 173.0928)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="288.095" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -73.3364 173.4444)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -75.298 173.8415)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="299.272" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -77.2391 174.1479)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="304.86" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -79.1901 174.4995)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="310.448" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -81.1411 174.8512)" style="clip-path:url(#SVGID_74_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_75_" x="455.552" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_76_">
                                            <use xlink:href="#SVGID_75_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="271.328" transform="matrix(0.937 -0.3493 0.3493 0.937 -66.308 179.0245)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="276.919" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -68.2515 179.33)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="282.507" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -70.2026 179.6817)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="288.095" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -72.1537 180.0334)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="293.682" transform="matrix(0.937 -0.3493 0.3493 0.937 -74.115 180.4321)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="299.272" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -76.0567 180.737)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="304.86" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -78.0078 181.0887)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="310.448" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -79.9589 181.4404)" style="clip-path:url(#SVGID_76_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="272.989" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_77_" x="474.386" y="274.704" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_78_">
                                            <use xlink:href="#SVGID_77_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="271.328" transform="matrix(0.937 -0.3492 0.3492 0.937 -65.119 185.5852)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="276.919" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -67.0629 185.8891)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="282.507" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -69.0139 186.2407)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="288.095" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -70.9648 186.5924)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="293.682" transform="matrix(0.937 -0.3492 0.3492 0.937 -72.9253 186.9925)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="299.273" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -74.8674 187.2958)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="304.861" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -76.8184 187.6474)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="310.448" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -78.7693 187.9991)" style="clip-path:url(#SVGID_78_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="279.159" style="fill:#615F5F;" width="17.834" height="34.746"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_79_" x="493.222" y="280.616" width="15.5" height="32.105"/>
                                        </defs>
                                        <clipPath id="SVGID_80_">
                                            <use xlink:href="#SVGID_79_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,278.04 491.882,284.249 490.44,280.966 
                                            510.062,274.757 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,282.786 491.882,288.993 490.44,285.712 
                                            510.062,279.503 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,287.53 491.882,293.739 490.44,290.456 
                                            510.062,284.249 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,292.276 491.882,298.485 490.44,295.202 
                                            510.062,288.993 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,297.022 491.882,303.229 490.44,299.948 
                                            510.062,293.739 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,301.767 491.882,307.976 490.44,304.692 
                                            510.062,298.485 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,306.513 491.882,312.722 490.44,309.438 
                                            510.062,303.229 						"/>
                                        <polygon style="clip-path:url(#SVGID_80_);fill:#474342;" points="511.501,311.259 491.882,317.466 490.44,314.185 
                                            510.062,307.976 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="272.989" style="fill:#45B037;" width="17.834" height="4.166"/>
                                <rect x="492.358" y="273.226" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="273.149" style="fill:#6D6C6C;" width="41.666" height="40.916"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="276.364" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="295.269" r="1.5"/>
                                    <rect x="515.001" y="279.69" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="282.274" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="284.858" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="287.44" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="290.024" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="298.69" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="301.274" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="303.858" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="306.44" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="309.024" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="311.556" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="274.126" style="fill:#474342;" width="32.271" height="4.377"/>
                                    <rect x="519.897" y="293.079" style="fill:#474342;" width="32.271" height="4.379"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="320.677" style="fill:#4C4948;" width="197.972" height="46.668"/>
                                <g>
                                    <rect x="360.209" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_81_" x="361.376" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_82_">
                                            <use xlink:href="#SVGID_81_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.658" y="321.733" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -89.8239 149.2603)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="327.321" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -91.775 149.612)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -93.7422 150.0042)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="338.499" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -95.6777 150.3155)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="344.087" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -97.6288 150.6672)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="349.675" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -99.5798 151.0188)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -101.5489 151.4117)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="360.853" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -103.4826 151.7223)" style="clip-path:url(#SVGID_82_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_83_" x="380.211" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_84_">
                                            <use xlink:href="#SVGID_83_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="321.733" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -88.6386 155.8367)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="327.321" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -90.5896 156.1883)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -92.5562 156.582)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="338.499" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -94.4924 156.8918)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="344.087" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -96.4434 157.2435)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="349.675" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -98.3944 157.5952)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -100.3629 157.9895)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="360.853" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -102.2972 158.2986)" style="clip-path:url(#SVGID_84_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_85_" x="399.046" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_86_">
                                            <use xlink:href="#SVGID_85_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="321.733" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -87.4532 162.413)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="327.321" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -89.4042 162.7647)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -91.3703 163.1599)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="338.499" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -93.307 163.4681)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="344.087" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -95.258 163.8198)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="349.675" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -97.2091 164.1715)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -99.1769 164.5674)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="360.853" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -101.1118 164.8749)" style="clip-path:url(#SVGID_86_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_87_" x="417.881" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_88_">
                                            <use xlink:href="#SVGID_87_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="321.733" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -86.2678 168.9893)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="327.321" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -88.2189 169.341)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -90.1843 169.7377)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="338.499" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -92.1216 170.0444)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="344.087" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -94.0726 170.3961)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="349.675" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -96.0237 170.7478)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -97.991 171.1452)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="360.853" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -99.9265 171.4513)" style="clip-path:url(#SVGID_88_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_89_" x="436.716" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_90_">
                                            <use xlink:href="#SVGID_89_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="321.733" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -85.0812 175.5614)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="327.321" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -87.0322 175.913)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -88.9971 176.3113)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="338.499" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -90.9349 176.6165)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="344.087" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -92.8859 176.9681)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="349.675" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -94.8369 177.3198)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -96.8036 177.7188)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="360.853" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -98.7396 178.0232)" style="clip-path:url(#SVGID_90_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_91_" x="455.552" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_92_">
                                            <use xlink:href="#SVGID_91_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="321.733" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -83.8994 182.1507)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="327.321" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -85.8505 182.5024)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="332.908" transform="matrix(0.937 -0.3493 0.3493 0.937 -87.8149 182.9023)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="338.499" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -89.7534 183.2059)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="344.087" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -91.7045 183.5576)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="349.675" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -93.6557 183.9093)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="355.262" transform="matrix(0.937 -0.3493 0.3493 0.937 -95.6219 184.3099)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="360.852" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -97.5586 184.6129)" style="clip-path:url(#SVGID_92_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="323.392" style="fill:#615F5F;" width="17.834" height="40.916"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_93_" x="474.386" y="325.106" width="15.5" height="37.809"/>
                                        </defs>
                                        <clipPath id="SVGID_94_">
                                            <use xlink:href="#SVGID_93_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="321.734" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -82.7094 188.7092)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="327.322" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -84.6604 189.0609)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="332.908" transform="matrix(0.937 -0.3492 0.3492 0.937 -86.6241 189.4622)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="338.499" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -88.563 189.7643)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="344.087" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -90.5139 190.1159)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="349.675" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -92.4649 190.4676)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="355.262" transform="matrix(0.937 -0.3492 0.3492 0.937 -94.4304 190.8696)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="360.853" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -96.3675 191.171)" style="clip-path:url(#SVGID_94_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="329.563" style="fill:#615F5F;" width="17.834" height="34.744"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_95_" x="493.222" y="331.019" width="15.5" height="32.105"/>
                                        </defs>
                                        <clipPath id="SVGID_96_">
                                            <use xlink:href="#SVGID_95_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,328.442 491.882,334.651 490.44,331.368 
                                            510.062,325.161 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,333.188 491.882,339.397 490.44,336.114 
                                            510.062,329.905 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,337.935 491.882,344.144 490.44,340.86 
                                            510.062,334.651 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,342.681 491.882,348.888 490.44,345.604 
                                            510.062,339.397 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,347.425 491.882,353.634 490.44,350.351 
                                            510.062,344.144 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,352.171 491.882,358.38 490.44,355.097 
                                            510.062,348.888 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,356.917 491.882,363.124 490.44,359.843 
                                            510.062,353.634 						"/>
                                        <polygon style="clip-path:url(#SVGID_96_);fill:#474342;" points="511.501,361.661 491.882,367.87 490.44,364.587 
                                            510.062,358.38 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="323.392" style="fill:#45B037;" width="17.834" height="4.166"/>
                                <rect x="492.358" y="323.628" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="323.552" style="fill:#6D6C6C;" width="41.666" height="40.918"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="326.767" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="345.671" r="1.5"/>
                                    <rect x="515.001" y="330.093" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="332.677" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="335.261" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="337.845" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="340.429" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="349.095" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="351.677" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="354.261" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="356.845" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="359.429" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="361.96" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="324.528" style="fill:#474342;" width="32.271" height="4.377"/>
                                    <rect x="519.897" y="343.483" style="fill:#474342;" width="32.271" height="4.377"/>
                                </g>
                            </g>
                            <g>
                                <rect x="358.585" y="371.081" style="fill:#4C4948;" width="197.972" height="46.667"/>
                                <g>
                                    <rect x="360.209" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_97_" x="361.376" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_98_">
                                            <use xlink:href="#SVGID_97_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="358.658" y="372.136" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -107.4221 152.4324)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -109.393 152.8259)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="383.314" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -111.3249 153.1359)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="388.901" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -113.276 153.4876)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="394.489" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -115.227 153.8392)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.658" y="400.077" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -117.178 154.1909)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="358.657" y="405.664" transform="matrix(0.937 -0.3493 0.3493 0.937 -119.1567 154.5959)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="358.658" y="411.255" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -121.081 154.8944)" style="clip-path:url(#SVGID_98_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="379.044" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_99_" x="380.211" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_100_">
                                            <use xlink:href="#SVGID_99_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="377.492" y="372.136" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -106.2368 159.0087)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -108.2071 159.4038)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="383.314" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -110.1396 159.7122)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="388.901" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -112.0906 160.0639)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="394.489" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -114.0416 160.4156)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="400.077" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -115.9927 160.7672)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="377.492" y="405.664" transform="matrix(0.937 -0.3493 0.3493 0.937 -117.9706 161.1742)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="377.492" y="411.255" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -119.8956 161.4707)" style="clip-path:url(#SVGID_100_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="397.879" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_101_" x="399.046" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_102_">
                                            <use xlink:href="#SVGID_101_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="396.327" y="372.136" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -105.0514 165.5851)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -107.0211 165.9816)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="383.314" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -108.9542 166.2885)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="388.901" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -110.9052 166.6402)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="394.489" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -112.8563 166.9919)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="400.077" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -114.8073 167.3435)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="396.327" y="405.664" transform="matrix(0.937 -0.3493 0.3493 0.937 -116.7845 167.7524)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="396.327" y="411.255" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -118.7102 168.047)" style="clip-path:url(#SVGID_102_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="416.714" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_103_" x="417.881" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_104_">
                                            <use xlink:href="#SVGID_103_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="415.162" y="372.136" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -103.866 172.1614)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -105.8352 172.5595)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="383.314" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -107.7688 172.8648)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="388.901" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -109.7198 173.2165)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="394.489" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -111.6709 173.5682)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="400.077" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -113.6219 173.9199)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="415.162" y="405.664" transform="matrix(0.937 -0.3493 0.3493 0.937 -115.5984 174.3307)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="415.162" y="411.255" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -117.5248 174.6234)" style="clip-path:url(#SVGID_104_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="435.549" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_105_" x="436.716" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_106_">
                                            <use xlink:href="#SVGID_105_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="433.997" y="372.136" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -102.6791 178.7333)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -104.6476 179.133)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="383.314" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -106.5817 179.4368)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="388.901" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -108.5327 179.7884)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="394.489" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -110.4837 180.1401)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="400.077" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -112.4347 180.4917)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                        
                                            <rect x="433.997" y="405.664" transform="matrix(0.937 -0.3492 0.3492 0.937 -114.4105 180.9044)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.939" height="4.127"/>
                                        
                                            <rect x="433.997" y="411.255" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -116.3376 181.1952)" style="clip-path:url(#SVGID_106_);fill:#474342;" width="20.938" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="454.384" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_107_" x="455.552" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_108_">
                                            <use xlink:href="#SVGID_107_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="452.832" y="372.136" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -101.4984 185.323)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="377.723" transform="matrix(0.937 -0.3493 0.3493 0.937 -103.4665 185.7243)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.938" height="4.127"/>
                                        
                                            <rect x="452.832" y="383.313" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -105.4013 186.0266)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="388.901" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -107.3524 186.3783)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="394.489" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -109.3035 186.73)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="400.077" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -111.2546 187.0817)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                        
                                            <rect x="452.832" y="405.664" transform="matrix(0.937 -0.3493 0.3493 0.937 -113.2299 187.4964)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.938" height="4.128"/>
                                        
                                            <rect x="452.832" y="411.255" transform="matrix(0.9371 -0.3492 0.3492 0.9371 -115.1578 187.7853)" style="clip-path:url(#SVGID_108_);fill:#474342;" width="20.937" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="473.22" y="373.794" style="fill:#615F5F;" width="17.834" height="40.917"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_109_" x="474.386" y="375.511" width="15.5" height="37.807"/>
                                        </defs>
                                        <clipPath id="SVGID_110_">
                                            <use xlink:href="#SVGID_109_"  style="overflow:visible;"/>
                                        </clipPath>
                                        
                                            <rect x="471.667" y="372.136" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -100.3069 191.881)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="377.723" transform="matrix(0.937 -0.3492 0.3492 0.937 -102.2742 192.2837)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.126"/>
                                        
                                            <rect x="471.667" y="383.314" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -104.2095 192.5844)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="388.902" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -106.1605 192.9361)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="394.489" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -108.1114 193.2877)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="400.077" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -110.0623 193.6393)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                        
                                            <rect x="471.667" y="405.664" transform="matrix(0.937 -0.3492 0.3492 0.937 -112.0366 194.0559)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.94" height="4.127"/>
                                        
                                            <rect x="471.667" y="411.256" transform="matrix(0.9371 -0.3491 0.3491 0.9371 -113.9651 194.3428)" style="clip-path:url(#SVGID_110_);fill:#474342;" width="20.939" height="4.125"/>
                                    </g>
                                </g>
                                <g>
                                    <rect x="492.054" y="379.966" style="fill:#615F5F;" width="17.834" height="34.745"/>
                                    <g>
                                        <defs>
                                            <rect id="SVGID_111_" x="493.222" y="381.423" width="15.5" height="32.104"/>
                                        </defs>
                                        <clipPath id="SVGID_112_">
                                            <use xlink:href="#SVGID_111_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,378.847 491.882,385.054 490.44,381.772 
                                            510.062,375.563 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,383.591 491.882,389.8 490.44,386.517 
                                            510.062,380.31 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,388.337 491.882,394.546 490.44,391.263 
                                            510.062,385.054 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,393.083 491.882,399.29 490.44,396.007 
                                            510.062,389.8 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,397.827 491.882,404.036 490.44,400.753 
                                            510.062,394.546 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,402.573 491.882,408.782 490.44,405.499 
                                            510.062,399.29 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,407.319 491.882,413.527 490.44,410.245 
                                            510.062,404.036 						"/>
                                        <polygon style="clip-path:url(#SVGID_112_);fill:#474342;" points="511.501,412.064 491.882,418.273 490.44,414.99 
                                            510.062,408.782 						"/>
                                    </g>
                                </g>
                                <rect x="492.054" y="373.794" style="fill:#45B037;" width="17.834" height="4.168"/>
                                <rect x="492.358" y="374.032" style="fill:#37A770;" width="17.227" height="1.479"/>
                                <g>
                                    <rect x="512.669" y="373.956" style="fill:#6D6C6C;" width="41.666" height="40.917"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="377.171" r="1.5"/>
                                    <circle style="fill:#45B037;" cx="516.501" cy="396.073" r="1.5"/>
                                    <rect x="515.001" y="380.497" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="383.081" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="385.663" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="388.247" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="390.831" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="399.497" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="402.079" style="fill:#474342;" width="37.168" height="1.668"/>
                                    <rect x="515.001" y="404.663" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="407.247" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="515.001" y="409.831" style="fill:#474342;" width="37.168" height="1.667"/>
                                    <rect x="515.001" y="412.363" style="fill:#474342;" width="37.168" height="1.666"/>
                                    <rect x="519.897" y="374.931" style="fill:#474342;" width="32.271" height="4.379"/>
                                    <rect x="519.897" y="393.886" style="fill:#474342;" width="32.271" height="4.377"/>
                                </g>
                            </g>
                        </g>
                        <polygon style="fill:#3E3A39;" points="325.442,402.116 351.948,423.687 351.948,62.724 325.442,41.154 		"/>
                        <polygon style="fill:#5C5A5A;" points="347.752,314.954 329.418,301.688 329.418,159.982 347.752,174.247 		"/>
                    </g>
                    <rect x="358.585" y="62.724" style="fill:#9FA0A0;" width="22.3" height="5.938"/>
                    <rect x="534.259" y="62.724" style="fill:#9FA0A0;" width="22.299" height="5.938"/>
                    <rect x="442.233" y="62.724" style="fill:#9FA0A0;" width="22.299" height="5.938"/>
                    <polygon style="fill:#514F4E;" points="532.106,41.154 325.442,41.154 351.948,62.724 558.612,62.724 	"/>
                </g>
                <g>
                    <g>
                        <polygon style="fill:#5C5A5A;" points="34.226,283.854 57.515,212.456 13.105,171.833 71.85,103.734 51.96,161.22 92.163,195.295 
                                    "/>
                        <polygon style="fill:#5C5A5A;" points="83.232,196.873 71.731,200.943 44.483,177.287 50.398,168.255 		"/>
                    </g>
                    <polygon style="fill:#C9CACA;" points="293.164,237.783 242.251,186.871 203.125,225.998 237.83,260.703 237.83,309.891 
                        293.164,309.89 293.164,237.89 293.056,237.89 	"/>
                    <polygon style="fill:#E0E1E1;" points="242.017,191.585 229.406,204.196 271.83,246.619 271.831,306.891 289.664,306.89 
                        289.664,241.057 	"/>
                    <g>
                        <polygon style="fill:#FFF100;" points="29.355,283.854 52.644,212.456 8.234,171.833 66.979,103.734 47.089,161.22 
                            87.292,195.295 		"/>
                        <polygon style="fill:#FFFABA;" points="78.361,196.873 66.86,200.943 39.612,177.287 45.527,168.255 		"/>
                    </g>
                    <g>
                        <polygon style="fill:#595757;" points="297.95,49.108 223.168,42.199 193.38,94.498 113.97,52.281 174.432,58.955 198.764,12.207 
                                    "/>
                        <polygon style="fill:#595757;" points="202.28,20.568 208.794,30.883 191.755,62.691 181.638,58.92 		"/>
                    </g>
                    <g>
                        <polygon style="fill:#FFF100;" points="295.116,42.763 220.334,35.853 190.546,88.152 111.135,45.936 171.598,52.609 
                            195.93,5.861 		"/>
                        <polygon style="fill:#FFFABA;" points="199.445,14.223 205.96,24.538 188.921,56.346 178.804,52.575 		"/>
                    </g>
                    <path style="fill:#666464;" d="M168.703,151.005C102.318,217.389,55.021,279.793,56.255,298.148
                        c0.906,1.758,1.963,3.396,3.176,4.907c15.008,5.841,79.997-42.666,149.325-111.996C278.865,120.95,327.681,55.282,320.541,41.247
                        c-1.27-0.983-2.623-1.857-4.061-2.628C298.966,36.211,235.871,83.836,168.703,151.005z"/>
                    <g>
                        <path style="fill:#3E3A39;" d="M171.398,181.507l-3.77-3.769c-2.08-2.082,3.887-11.418,13.324-20.854
                            c9.434-9.434,18.77-15.401,20.852-13.32l3.768,3.77c-0.686-0.687-2.162-0.495-4.176,0.401c-4.08,1.828-10.355,6.592-16.678,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C170.904,179.344,170.712,180.821,171.398,181.507z"/>
                        <path style="fill:#3E3A39;" d="M198.423,146.947c-1.32-1.321-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.314,16.098
                            v0l-3.383,3.381c-2.082-2.082,3.883-11.421,13.32-20.858c9.434-9.434,18.773-15.398,20.854-13.316L198.423,146.947
                            L198.423,146.947z"/>
                        <path style="fill:#3E3A39;" d="M163.214,173.324l-3.768-3.77c-2.082-2.081,3.885-11.417,13.322-20.854
                            c9.434-9.433,18.77-15.401,20.85-13.319l3.771,3.769c-0.688-0.686-2.164-0.495-4.176,0.402
                            c-4.082,1.828-10.357,6.592-16.68,12.914s-11.09,12.602-12.918,16.683C162.72,171.161,162.529,172.638,163.214,173.324z"/>
                        <path style="fill:#3E3A39;" d="M190.24,138.764c-1.32-1.321-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.316,16.098
                            l0.002,0l-3.381,3.381c-2.082-2.082,3.883-11.421,13.318-20.858c9.434-9.434,18.773-15.397,20.855-13.315l-3.381,3.381
                            L190.24,138.764z"/>
                        <path style="fill:#3E3A39;" d="M155.033,165.141l-3.77-3.77c-2.082-2.082,3.887-11.417,13.322-20.854
                            c9.434-9.433,18.77-15.401,20.852-13.319l3.77,3.769c-0.686-0.686-2.164-0.495-4.176,0.401c-4.08,1.828-10.357,6.592-16.68,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C154.537,162.979,154.347,164.455,155.033,165.141z"/>
                        <path style="fill:#3E3A39;" d="M182.058,130.581c-1.322-1.321-8.529,3.747-16.098,11.313
                            c-7.568,7.569-12.635,14.778-11.314,16.099l0,0l-3.381,3.381c-2.082-2.082,3.883-11.421,13.318-20.858
                            c9.434-9.433,18.773-15.397,20.855-13.315L182.058,130.581L182.058,130.581z"/>
                        <path style="fill:#3E3A39;" d="M146.851,156.958l-3.77-3.769c-2.082-2.082,3.887-11.417,13.322-20.854
                            c9.434-9.434,18.768-15.401,20.85-13.32l3.77,3.77c-0.686-0.686-2.162-0.495-4.176,0.401c-4.08,1.828-10.355,6.592-16.678,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C146.355,154.795,146.166,156.272,146.851,156.958z"/>
                        <path style="fill:#3E3A39;" d="M173.875,122.397c-1.32-1.32-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.314,16.099
                            v0l-3.381,3.381c-2.082-2.082,3.881-11.421,13.318-20.858c9.434-9.433,18.771-15.397,20.854-13.316L173.875,122.397
                            L173.875,122.397z"/>
                        <g>
                            <polygon style="fill:#3E3A39;" points="224.3,172.771 241.896,190.365 214.431,217.829 200.236,203.635 227.701,176.17 			"/>
                            <polygon style="fill:#3E3A39;" points="166.654,127.361 161.554,132.461 213.082,183.99 211.382,185.69 159.853,134.162 
                                157.304,136.711 208.832,188.24 201.343,195.729 149.814,144.2 168.265,125.749 219.794,177.277 218.181,178.89 			"/>
                            <path style="fill:#3E3A39;" d="M111.16,78.667c0.453-0.858,0.838-1.742,1.16-2.644l49.436,49.437l-1.902,1.901L111.16,78.667z"/>
                            <path style="fill:#3E3A39;" d="M108.367,82.675l48.086,48.086l-6.928,6.928l-49.436-49.437c2.734-0.973,5.301-2.551,7.49-4.739
                                C107.851,83.24,108.113,82.959,108.367,82.675z"/>
                            <polygon style="fill:#3E3A39;" points="200.236,203.635 196.835,200.235 200.236,203.635 			"/>
                            <polygon style="fill:#3E3A39;" points="203.275,197.661 221.726,179.208 219.794,177.277 224.3,172.771 227.701,176.17 
                                200.236,203.635 196.835,200.235 201.343,195.729 			"/>
                            <polygon style="fill:#3E3A39;" points="203.275,197.661 201.343,195.729 208.832,188.24 211.382,185.69 213.082,183.99 
                                218.181,178.89 219.794,177.277 221.726,179.208 			"/>
                            <polygon style="fill:#3E3A39;" points="168.267,125.748 168.265,125.749 164.865,122.349 			"/>
                            <polygon style="fill:#3E3A39;" points="149.814,144.2 146.416,140.8 149.814,144.2 			"/>
                            <polygon style="fill:#3E3A39;" points="146.416,140.8 149.525,137.689 151.886,140.05 164.115,127.82 161.755,125.459 
                                164.865,122.349 168.265,125.749 149.814,144.2 			"/>
                            <polygon style="fill:#3E3A39;" points="151.886,140.05 149.525,137.689 156.453,130.762 156.453,130.762 159.855,127.361 
                                159.853,127.361 161.755,125.459 164.115,127.82 			"/>
                            <path style="fill:#3E3A39;" d="M111.16,78.667l48.693,48.694l-3.4,3.401l-48.086-48.086
                                C109.478,81.432,110.41,80.085,111.16,78.667z"/>
                            
                                <rect x="155.749" y="129.061" transform="matrix(0.7073 -0.707 0.707 0.7073 -44.9425 149.5891)" style="fill:#3E3A39;" width="4.811" height="0"/>
                            
                                <rect x="153.432" y="152.07" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 214.0415 400.0123)" style="fill:#3E3A39;" width="72.872" height="7.212"/>
                            
                                <rect x="147.906" y="159.397" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 200.708 405.5367)" style="fill:#3E3A39;" width="72.873" height="3.607"/>
                            <path style="fill:#3E3A39;" d="M95.658,82.56c-4.57,0.644-9.375-0.773-12.891-4.288c-3.91-3.909-5.244-9.418-4.01-14.42
                                c-2.98,5.731-2.066,12.96,2.744,17.771c4.225,4.222,10.305,5.427,15.605,3.648l2.982,2.981c-7.111,2.53-15.355,0.952-21.049-4.74
                                c-7.88-7.88-7.88-20.657,0-28.537c7.881-7.881,20.658-7.881,28.539,0c5.689,5.692,7.27,13.937,4.74,21.048l-5.063-5.062
                                L95.658,82.56z"/>
                            <path style="fill:#3E3A39;" d="M110.621,78.128l-3.4,3.4l1.146,1.147c-0.254,0.284-0.516,0.565-0.787,0.838
                                c-2.189,2.188-4.756,3.766-7.49,4.739l-2.982-2.981c2.158-0.724,4.189-1.929,5.908-3.648c2.031-2.03,3.367-4.493,4.008-7.092
                                c-0.699,1.346-1.613,2.61-2.742,3.74c-2.426,2.426-5.471,3.844-8.623,4.289l11.6-11.599l5.063,5.062
                                c-0.322,0.902-0.707,1.786-1.16,2.644L110.621,78.128z"/>
                            <path style="fill:#3E3A39;" d="M107.22,81.528l3.4-3.4l0.539,0.539c-0.75,1.418-1.682,2.765-2.793,4.008L107.22,81.528z"/>
                            <path style="fill:#3E3A39;" d="M81.501,81.623c-4.811-4.811-5.725-12.04-2.744-17.771c-1.234,5.002,0.1,10.511,4.01,14.42
                                c3.516,3.515,8.32,4.932,12.891,4.288l-0.631,0.63l2.08,2.081C91.806,87.05,85.726,85.845,81.501,81.623z"/>
                            <path style="fill:#3E3A39;" d="M95.658,82.56c3.152-0.445,6.197-1.863,8.623-4.289c1.129-1.13,2.043-2.394,2.742-3.74
                                c-0.641,2.599-1.977,5.062-4.008,7.092c-1.719,1.719-3.75,2.924-5.908,3.648l-2.08-2.081L95.658,82.56z"/>
                        </g>
                        <path style="fill:#3E3A39;" d="M143.083,153.191l3.768,3.769c2.082,2.082,11.418-3.886,20.855-13.323
                            c9.432-9.434,15.4-18.77,13.318-20.851l-3.77-3.77c0.686,0.686,0.494,2.164-0.4,4.175c-1.828,4.081-6.592,10.357-12.916,16.679
                            c-6.322,6.322-12.602,11.09-16.682,12.918C145.246,153.686,143.769,153.876,143.083,153.191z"/>
                        <path style="fill:#3E3A39;" d="M173.875,122.398c1.322,1.321-3.746,8.53-11.313,16.096c-7.568,7.569-14.777,12.637-16.098,11.316
                            l0,0l-3.381,3.381c2.082,2.082,11.42-3.883,20.855-13.32c9.434-9.433,15.398-18.772,13.316-20.854L173.875,122.398
                            L173.875,122.398z"/>
                        <path style="fill:#3E3A39;" d="M151.265,161.374l3.77,3.77c2.082,2.082,11.418-3.886,20.854-13.323
                            c9.434-9.434,15.402-18.77,13.32-20.852l-3.77-3.769c0.686,0.686,0.494,2.163-0.402,4.174c-1.826,4.082-6.592,10.357-12.914,16.68
                            c-6.322,6.322-12.602,11.09-16.682,12.918C153.427,161.869,151.951,162.06,151.265,161.374z"/>
                        <path style="fill:#3E3A39;" d="M182.058,130.581c1.32,1.321-3.746,8.53-11.313,16.097c-7.57,7.569-14.779,12.636-16.1,11.315l0,0
                            l-3.381,3.381c2.082,2.082,11.422-3.882,20.857-13.319c9.434-9.434,15.398-18.772,13.316-20.854L182.058,130.581L182.058,130.581z
                            "/>
                        <path style="fill:#3E3A39;" d="M159.449,169.557l3.77,3.769c2.08,2.082,11.416-3.886,20.854-13.322
                            c9.434-9.434,15.4-18.77,13.32-20.851l-3.77-3.769c0.686,0.686,0.494,2.163-0.402,4.175c-1.828,4.081-6.592,10.356-12.914,16.679
                            c-6.322,6.322-12.602,11.09-16.684,12.917C161.611,170.052,160.134,170.243,159.449,169.557z"/>
                        <path style="fill:#3E3A39;" d="M190.242,138.764c1.32,1.321-3.746,8.53-11.314,16.097c-7.568,7.569-14.777,12.636-16.098,11.315
                            l0,0l-3.381,3.381c2.082,2.082,11.42-3.883,20.857-13.319c9.434-9.434,15.396-18.772,13.316-20.854L190.242,138.764
                            L190.242,138.764z"/>
                        <path style="fill:#3E3A39;" d="M167.63,177.74l3.77,3.769c2.082,2.082,11.418-3.886,20.855-13.323
                            c9.432-9.433,15.4-18.769,13.318-20.851l-3.77-3.77c0.686,0.686,0.496,2.164-0.4,4.175c-1.828,4.081-6.592,10.357-12.916,16.68
                            c-6.32,6.322-12.602,11.09-16.682,12.917C169.794,178.235,168.318,178.426,167.63,177.74z"/>
                        <path style="fill:#3E3A39;" d="M198.423,146.947c1.322,1.321-3.746,8.53-11.313,16.097c-7.568,7.569-14.777,12.636-16.098,11.315
                            l0,0l-3.383,3.381c2.082,2.082,11.422-3.882,20.857-13.319c9.436-9.434,15.398-18.773,13.316-20.854L198.423,146.947
                            L198.423,146.947z"/>
                    </g>
                    <g>
                        <path style="fill:#6D6C6C;" d="M168.535,184.388l-3.77-3.769c-2.08-2.082,3.887-11.418,13.324-20.854
                            c9.434-9.434,18.77-15.401,20.852-13.32l3.768,3.77c-0.686-0.687-2.162-0.495-4.176,0.401c-4.08,1.828-10.355,6.592-16.678,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C168.041,182.225,167.849,183.702,168.535,184.388z"/>
                        <path style="fill:#848484;" d="M195.56,149.828c-1.32-1.321-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.314,16.098
                            v0l-3.383,3.381c-2.082-2.082,3.883-11.421,13.32-20.858c9.434-9.434,18.773-15.398,20.854-13.316L195.56,149.828L195.56,149.828z
                            "/>
                        <path style="fill:#6D6C6C;" d="M160.351,176.205l-3.768-3.77c-2.082-2.081,3.885-11.417,13.322-20.854
                            c9.434-9.433,18.77-15.401,20.85-13.319l3.771,3.769c-0.688-0.686-2.164-0.495-4.176,0.402
                            c-4.082,1.828-10.357,6.592-16.68,12.914s-11.09,12.602-12.918,16.683C159.857,174.042,159.666,175.519,160.351,176.205z"/>
                        <path style="fill:#848484;" d="M187.376,141.645c-1.32-1.321-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.316,16.098
                            l0.002,0l-3.381,3.381c-2.082-2.082,3.883-11.421,13.318-20.858c9.434-9.434,18.773-15.397,20.855-13.315l-3.381,3.381
                            L187.376,141.645z"/>
                        <path style="fill:#6D6C6C;" d="M152.169,168.022l-3.77-3.77c-2.082-2.082,3.887-11.417,13.322-20.854
                            c9.434-9.433,18.77-15.401,20.852-13.319l3.77,3.769c-0.686-0.686-2.164-0.495-4.176,0.401c-4.08,1.828-10.357,6.592-16.68,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C151.673,165.859,151.484,167.336,152.169,168.022z"/>
                        <path style="fill:#848484;" d="M179.195,133.461c-1.322-1.321-8.529,3.747-16.098,11.313
                            c-7.568,7.569-12.635,14.778-11.314,16.099l0,0l-3.381,3.381c-2.082-2.082,3.883-11.421,13.318-20.858
                            c9.434-9.433,18.773-15.397,20.855-13.315L179.195,133.461L179.195,133.461z"/>
                        <path style="fill:#6D6C6C;" d="M143.988,159.839l-3.77-3.769c-2.082-2.082,3.887-11.417,13.322-20.854
                            c9.434-9.434,18.768-15.401,20.85-13.32l3.77,3.77c-0.686-0.686-2.162-0.495-4.176,0.401c-4.08,1.828-10.355,6.592-16.678,12.915
                            c-6.322,6.322-11.09,12.602-12.918,16.683C143.492,157.676,143.302,159.153,143.988,159.839z"/>
                        <path style="fill:#848484;" d="M171.011,125.278c-1.32-1.32-8.529,3.747-16.096,11.313c-7.568,7.569-12.637,14.777-11.314,16.099
                            v0l-3.381,3.381c-2.082-2.082,3.881-11.421,13.318-20.858c9.434-9.433,18.771-15.397,20.854-13.316L171.011,125.278
                            L171.011,125.278z"/>
                        <g>
                            <polygon style="fill:#ABABAB;" points="221.437,175.652 239.033,193.246 211.568,220.71 197.373,206.516 224.837,179.051 			"/>
                            <polygon style="fill:#B8B8B8;" points="163.791,130.242 158.691,135.342 210.218,186.871 208.519,188.571 156.99,137.042 
                                154.441,139.592 205.968,191.121 198.48,198.61 146.951,147.081 165.402,128.63 216.931,180.158 215.318,181.771 			"/>
                            <path style="fill:#BFBFBF;" d="M108.296,81.548c0.453-0.858,0.838-1.742,1.16-2.644l49.436,49.437l-1.902,1.901L108.296,81.548z"
                                />
                            <path style="fill:#BFBFBF;" d="M105.503,85.556l48.086,48.086l-6.928,6.928L97.226,91.133c2.734-0.973,5.301-2.551,7.49-4.739
                                C104.988,86.121,105.25,85.84,105.503,85.556z"/>
                            <polygon style="fill:#8F8F8F;" points="197.373,206.516 193.972,203.116 197.373,206.516 			"/>
                            <polygon style="fill:#8F8F8F;" points="200.412,200.542 218.863,182.089 216.931,180.158 221.437,175.652 224.837,179.051 
                                197.373,206.516 193.972,203.116 198.48,198.61 			"/>
                            <polygon style="fill:#8F8F8F;" points="200.412,200.542 198.48,198.61 205.968,191.121 208.519,188.571 210.218,186.871 
                                215.318,181.771 216.931,180.158 218.863,182.089 			"/>
                            <polygon style="fill:#8F8F8F;" points="165.404,128.629 165.402,128.63 162.001,125.229 			"/>
                            <polygon style="fill:#8F8F8F;" points="146.951,147.081 143.552,143.681 146.951,147.081 			"/>
                            <polygon style="fill:#8F8F8F;" points="143.552,143.681 146.662,140.57 149.023,142.931 161.251,130.701 158.892,128.34 
                                162.001,125.229 165.402,128.63 146.951,147.081 			"/>
                            <polygon style="fill:#8F8F8F;" points="149.023,142.931 146.662,140.57 153.589,133.643 153.589,133.643 156.992,130.242 
                                156.99,130.242 158.892,128.34 161.251,130.701 			"/>
                            <path style="fill:#D9D9D9;" d="M108.296,81.548l48.693,48.694l-3.4,3.401l-48.086-48.086
                                C106.615,84.313,107.546,82.966,108.296,81.548z"/>
                            
                                <rect x="152.885" y="131.942" transform="matrix(0.7073 -0.707 0.707 0.7073 -47.8174 148.4083)" style="fill:#D9D9D9;" width="4.811" height="0"/>
                            
                                <rect x="150.569" y="154.951" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 207.1165 402.9055)" style="fill:#E6E6E6;" width="72.872" height="7.212"/>
                            
                                <rect x="145.043" y="162.278" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 193.783 408.4301)" style="fill:#D9D9D9;" width="72.873" height="3.607"/>
                            <path style="fill:#ABABAB;" d="M92.794,85.441c-4.57,0.644-9.375-0.773-12.891-4.288c-3.91-3.909-5.244-9.418-4.01-14.42
                                c-2.98,5.731-2.066,12.96,2.744,17.771c4.225,4.222,10.305,5.427,15.605,3.648l2.982,2.981c-7.111,2.53-15.355,0.952-21.049-4.74
                                c-7.88-7.88-7.88-20.657,0-28.537c7.881-7.881,20.658-7.881,28.539,0c5.689,5.692,7.27,13.937,4.74,21.048l-5.063-5.062
                                L92.794,85.441z"/>
                            <path style="fill:#ABABAB;" d="M107.757,81.009l-3.4,3.4l1.146,1.147c-0.254,0.284-0.516,0.565-0.787,0.838
                                c-2.189,2.188-4.756,3.766-7.49,4.739l-2.982-2.981c2.158-0.724,4.189-1.929,5.908-3.648c2.031-2.03,3.367-4.493,4.008-7.092
                                c-0.699,1.346-1.613,2.61-2.742,3.74c-2.426,2.426-5.471,3.844-8.623,4.289l11.6-11.599l5.063,5.062
                                c-0.322,0.902-0.707,1.786-1.16,2.644L107.757,81.009z"/>
                            <path style="fill:#ABABAB;" d="M104.357,84.409l3.4-3.4l0.539,0.539c-0.75,1.418-1.682,2.765-2.793,4.008L104.357,84.409z"/>
                            <path style="fill:#F2F2F2;" d="M78.638,84.504c-4.811-4.811-5.725-12.04-2.744-17.771c-1.234,5.002,0.1,10.511,4.01,14.42
                                c3.516,3.515,8.32,4.932,12.891,4.288l-0.631,0.63l2.08,2.081C88.943,89.931,82.863,88.726,78.638,84.504z"/>
                            <path style="fill:#F2F2F2;" d="M92.794,85.441c3.152-0.445,6.197-1.863,8.623-4.289c1.129-1.13,2.043-2.394,2.742-3.74
                                c-0.641,2.599-1.977,5.062-4.008,7.092c-1.719,1.719-3.75,2.924-5.908,3.648l-2.08-2.081L92.794,85.441z"/>
                        </g>
                        <path style="fill:#848484;" d="M140.22,156.072l3.768,3.769c2.082,2.082,11.418-3.886,20.855-13.323
                            c9.432-9.434,15.4-18.77,13.318-20.851l-3.77-3.77c0.686,0.686,0.494,2.164-0.4,4.175c-1.828,4.081-6.592,10.357-12.916,16.679
                            c-6.322,6.322-12.602,11.09-16.682,12.918C142.382,156.567,140.906,156.757,140.22,156.072z"/>
                        <path style="fill:#848484;" d="M171.011,125.279c1.322,1.321-3.746,8.53-11.313,16.096c-7.568,7.569-14.777,12.637-16.098,11.316
                            l0,0l-3.381,3.381c2.082,2.082,11.42-3.883,20.855-13.32c9.434-9.433,15.398-18.772,13.316-20.854L171.011,125.279
                            L171.011,125.279z"/>
                        <path style="fill:#848484;" d="M148.402,164.254l3.77,3.77c2.082,2.082,11.418-3.886,20.854-13.323
                            c9.434-9.434,15.402-18.77,13.32-20.852l-3.77-3.769c0.686,0.686,0.494,2.163-0.402,4.174c-1.826,4.082-6.592,10.357-12.914,16.68
                            c-6.322,6.322-12.602,11.09-16.682,12.918C150.564,164.75,149.087,164.94,148.402,164.254z"/>
                        <path style="fill:#848484;" d="M179.195,133.462c1.32,1.321-3.746,8.53-11.313,16.097c-7.57,7.569-14.779,12.636-16.1,11.315l0,0
                            l-3.381,3.381c2.082,2.082,11.422-3.882,20.857-13.319c9.434-9.434,15.398-18.772,13.316-20.854L179.195,133.462L179.195,133.462z
                            "/>
                        <path style="fill:#848484;" d="M156.585,172.438l3.77,3.769c2.08,2.082,11.416-3.886,20.854-13.322
                            c9.434-9.434,15.4-18.77,13.32-20.851l-3.77-3.769c0.686,0.686,0.494,2.163-0.402,4.175c-1.828,4.081-6.592,10.356-12.914,16.679
                            c-6.322,6.322-12.602,11.09-16.684,12.917C158.748,172.933,157.271,173.124,156.585,172.438z"/>
                        <path style="fill:#848484;" d="M187.378,141.645c1.32,1.321-3.746,8.53-11.314,16.097c-7.568,7.569-14.777,12.636-16.098,11.315
                            l0,0l-3.381,3.381c2.082,2.082,11.42-3.883,20.857-13.319c9.434-9.434,15.396-18.772,13.316-20.854L187.378,141.645
                            L187.378,141.645z"/>
                        <path style="fill:#848484;" d="M164.767,180.621l3.77,3.769c2.082,2.082,11.418-3.886,20.855-13.323
                            c9.432-9.433,15.4-18.769,13.318-20.851l-3.77-3.77c0.686,0.686,0.496,2.164-0.4,4.175c-1.828,4.081-6.592,10.357-12.916,16.68
                            c-6.32,6.322-12.602,11.09-16.682,12.917C166.931,181.116,165.455,181.307,164.767,180.621z"/>
                        <path style="fill:#848484;" d="M195.56,149.828c1.322,1.321-3.746,8.53-11.313,16.097c-7.568,7.569-14.777,12.636-16.098,11.315
                            l0,0l-3.383,3.381c2.082,2.082,11.422-3.882,20.857-13.319c9.436-9.434,15.398-18.773,13.316-20.854L195.56,149.828
                            L195.56,149.828z"/>
                    </g>
                    <path style="fill:#B3B3B4;" d="M58.399,302.063c0.646,0.813,1.34,1.588,2.078,2.326c27.963,27.963,109.225-7.963,181.506-80.242
                        c72.277-72.279,108.206-153.542,80.24-181.505c-0.855-0.856-1.76-1.653-2.717-2.388c7.143,14.036-41.674,79.703-111.783,149.812
                        C138.394,259.396,73.406,307.904,58.399,302.063z"/>
                    <path style="fill:#FFFFFF;" d="M326.375,58.762c0,0,15,59.5-114,184.5C249.343,205.033,299.375,146.762,326.375,58.762z"/>
                </g>
                <rect x="96.825" y="427.806" style="fill:#929292;" width="302.001" height="104.416"/>
                <polygon style="fill:#AAABAB;" points="467.404,546.222 130.905,546.222 119.892,492.972 440.893,492.972 "/>
                <polygon style="fill:#AAABAB;" points="469.07,555.033 132.571,555.033 121.557,501.783 442.559,501.783 "/>
                <rect x="119.892" y="444.552" style="fill:#CFD0D0;" width="321" height="48.42"/>
                <polygon style="fill:#E9EAEA;" points="418.404,427.806 96.825,427.806 119.892,444.552 440.291,444.552 "/>
                <g>
                    <path style="fill:#435E79;" d="M408.758,424.514c0,1.658-1.344,3-3,3l-286.652,7.553c-1.656,0-12.349-8.895-12.349-10.552V209.107
                        c0-1.656,1.344-3,3-3h296c1.656,0,12.537,7.658,12.537,9.314L408.758,424.514z"/>
                    <path style="fill:#5F81A3;" d="M418.729,432.275c0,1.658-1.344,3-3,3h-296c-1.656,0-3-1.342-3-3V216.869c0-1.656,1.344-3,3-3h296
                        c1.656,0,3,1.344,3,3V432.275z"/>
                    <path style="fill:#545251;" d="M411.168,424.725c0,1.541-1.277,2.789-2.85,2.789H127.139c-1.574,0-2.85-1.248-2.85-2.789V224.421
                        c0-1.54,1.275-2.789,2.85-2.789h281.179c1.572,0,2.85,1.249,2.85,2.789V424.725z"/>
                    <path style="fill:#9FA0A0;" d="M321.741,243.097H181.104c-2.752,0-4.983,1.343-4.983,3v30.679l-17.075,5.814l17.075,5.816v8.69
                        c0,1.657,2.231,3,4.983,3h140.637c2.752,0,4.984-1.343,4.984-3v-51C326.725,244.44,324.493,243.097,321.741,243.097z"/>
                    <path style="fill:#F7F8F8;" d="M324.308,244.966H183.67c-2.752,0-4.982,1.343-4.982,3v30.679l-17.076,5.814l17.076,5.816v8.69
                        c0,1.657,2.23,3,4.982,3h140.638c2.752,0,4.983-1.343,4.983-3v-51C329.292,246.309,327.06,244.966,324.308,244.966z"/>
                    <path style="fill:#9FA0A0;" d="M256.51,311.826h121.015c2.367,0,4.287,1.344,4.287,3v30.679l14.691,5.814l-14.691,5.816v8.69
                        c0,1.657-1.92,3-4.287,3H256.51c-2.367,0-4.287-1.343-4.287-3v-51C252.223,313.17,254.143,311.826,256.51,311.826z"/>
                    <path style="fill:#F7F8F8;" d="M259.731,314.658h121.013c2.367,0,4.287,1.344,4.287,3v30.679l14.693,5.814l-14.693,5.816v8.69
                        c0,1.657-1.92,3-4.287,3H259.731c-2.369,0-4.288-1.343-4.288-3v-51C255.443,316.002,257.362,314.658,259.731,314.658z"/>
                    <g>
                        <path style="fill:#9FA0A0;" d="M282.81,380.412H178.643c-1.656,0-3,1.344-3,3v10.412l-16.598,6.473l16.598,6.473v3.643
                            c0,1.658,1.344,3,3,3H282.81c1.657,0,3-1.342,3-3v-27C285.81,381.756,284.467,380.412,282.81,380.412z"/>
                        <path style="fill:#F7F8F8;" d="M285.376,382.132H181.209c-1.656,0-3,1.343-3,3v10.412l-16.598,6.473l16.598,6.473v3.643
                            c0,1.657,1.344,3,3,3h104.167c1.657,0,3-1.343,3-3v-27C288.376,383.475,287.034,382.132,285.376,382.132z"/>
                    </g>
                    <circle style="fill:#ACADAE;" cx="150.474" cy="373.164" r="17.591"/>
                    <g>
                        <circle style="fill:#4969AE;stroke:#EFEFEF;stroke-width:2;stroke-miterlimit:10;" cx="153.225" cy="374.914" r="16.75"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M162.518,374.837c0,1.656-1.344,3-3,3h-12.584
                            c-1.656,0-3-1.344-3-3v-6.917c0-1.657,1.344-3,3-3h12.584c1.656,0,3,1.343,3,3V374.837z"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M157.18,371.466c0,1.656-1.343,3-3,3h-1.908
                            c-1.657,0-3-1.344-3-3v-0.175c0-1.657,1.343-3,3-3h1.908c1.657,0,3,1.343,3,3V371.466z"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M158.831,383.837c0,1.656-1.344,3-3,3h-5.209
                            c-1.656,0-3-1.344-3-3v-3c0-1.657,1.344-3,3-3h5.209c1.656,0,3,1.343,3,3V383.837z"/>
                    </g>
                    <circle style="fill:#ACADAE;" cx="149.783" cy="255.875" r="17.591"/>
                    <g>
                        <circle style="fill:#4969AE;stroke:#EFEFEF;stroke-width:2;stroke-miterlimit:10;" cx="151.827" cy="256.789" r="16.75"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M161.119,256.712c0,1.656-1.343,3-3,3h-12.583
                            c-1.656,0-3-1.344-3-3v-6.917c0-1.657,1.344-3,3-3h12.583c1.657,0,3,1.343,3,3V256.712z"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M155.782,253.341c0,1.656-1.344,3-3,3h-1.908
                            c-1.658,0-3-1.344-3-3v-0.175c0-1.657,1.342-3,3-3h1.908c1.656,0,3,1.343,3,3V253.341z"/>
                        <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M157.431,265.712c0,1.656-1.343,3-3,3h-5.208
                            c-1.657,0-3-1.344-3-3v-3c0-1.657,1.343-3,3-3h5.208c1.657,0,3,1.343,3,3V265.712z"/>
                    </g>
                </g>
                <rect x="130.905" y="546.222" style="fill:#CFD0D0;" width="336.499" height="23"/>
                <g>
                    <rect x="309.852" y="453.388" style="fill:#575554;" width="89.179" height="29.666"/>
                    <polygon style="fill:#4F4C4B;" points="399.031,483.054 309.852,483.054 309.852,480.015 395.711,480.015 	"/>
                    <polygon style="fill:#44403F;" points="395.711,480.015 399.031,483.054 399.031,453.388 395.711,453.388 	"/>
                </g>
                <g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="321.191,503.753 312.134,503.753 310.469,498.941 318.719,498.941 			"/>
                            <rect x="312.134" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="312.134,507.753 310.469,502.941 310.469,498.941 312.134,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="332.274,503.753 323.217,503.753 321.553,498.941 329.803,498.941 			"/>
                            <rect x="323.217" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="323.217,507.753 321.553,502.941 321.553,498.941 323.217,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="343.358,503.753 334.301,503.753 332.636,498.941 340.886,498.941 			"/>
                            <rect x="334.301" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="334.301,507.753 332.636,502.941 332.636,498.941 334.301,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="354.442,503.753 345.385,503.753 343.719,498.941 351.969,498.941 			"/>
                            <rect x="345.385" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="345.385,507.753 343.719,502.941 343.719,498.941 345.385,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="365.525,503.753 356.468,503.753 354.803,498.941 363.053,498.941 			"/>
                            <rect x="356.468" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="356.468,507.753 354.803,502.941 354.803,498.941 356.468,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="376.607,503.753 367.551,503.753 365.887,498.941 374.137,498.941 			"/>
                            <rect x="367.551" y="503.753" style="fill:#FFFFFF;" width="9.056" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="367.551,507.753 365.887,502.941 365.887,498.941 367.551,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="387.691,503.753 378.635,503.753 376.971,498.941 385.221,498.941 			"/>
                            <rect x="378.635" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="378.635,507.753 376.971,502.941 376.971,498.941 378.635,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="398.775,503.753 389.719,503.753 388.053,498.941 396.303,498.941 			"/>
                            <rect x="389.719" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="389.719,507.753 388.053,502.941 388.053,498.941 389.719,503.753 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="409.859,503.753 400.803,503.753 399.137,498.941 407.387,498.941 			"/>
                            <rect x="400.803" y="503.753" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="400.803,507.753 399.137,502.941 399.137,498.941 400.803,503.753 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="322.856,514.585 313.799,514.585 312.134,509.775 320.384,509.775 			"/>
                            <rect x="313.799" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="313.799,518.585 312.134,513.775 312.134,509.775 313.799,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="333.94,514.585 324.883,514.585 323.217,509.775 331.467,509.775 			"/>
                            <rect x="324.883" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="324.883,518.585 323.217,513.775 323.217,509.775 324.883,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="345.023,514.585 335.966,514.585 334.301,509.775 342.551,509.775 			"/>
                            <rect x="335.966" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="335.966,518.585 334.301,513.775 334.301,509.775 335.966,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="356.106,514.585 347.049,514.585 345.385,509.775 353.635,509.775 			"/>
                            <rect x="347.049" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="347.049,518.585 345.385,513.775 345.385,509.775 347.049,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="367.19,514.585 358.133,514.585 356.468,509.775 364.718,509.775 			"/>
                            <rect x="358.133" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="358.133,518.585 356.468,513.775 356.468,509.775 358.133,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="378.273,514.585 369.217,514.585 367.551,509.775 375.801,509.775 			"/>
                            <rect x="369.217" y="514.585" style="fill:#FFFFFF;" width="9.056" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="369.217,518.585 367.551,513.775 367.551,509.775 369.217,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="389.357,514.585 380.301,514.585 378.635,509.775 386.885,509.775 			"/>
                            <rect x="380.301" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="380.301,518.585 378.635,513.775 378.635,509.775 380.301,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="400.439,514.585 391.383,514.585 389.719,509.775 397.969,509.775 			"/>
                            <rect x="391.383" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="391.383,518.585 389.719,513.775 389.719,509.775 391.383,514.585 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="411.523,514.585 402.467,514.585 400.803,509.775 409.053,509.775 			"/>
                            <rect x="402.467" y="514.585" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="402.467,518.585 400.803,513.775 400.803,509.775 402.467,514.585 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="325.354,525.419 316.297,525.419 314.631,520.607 322.881,520.607 			"/>
                            <rect x="316.297" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="316.297,529.419 314.631,524.607 314.631,520.607 316.297,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="336.437,525.419 327.38,525.419 325.715,520.607 333.965,520.607 			"/>
                            <rect x="327.38" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="327.38,529.419 325.715,524.607 325.715,520.607 327.38,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="347.52,525.419 338.463,525.419 336.799,520.607 345.049,520.607 			"/>
                            <rect x="338.463" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="338.463,529.419 336.799,524.607 336.799,520.607 338.463,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="358.604,525.419 349.547,525.419 347.882,520.607 356.132,520.607 			"/>
                            <rect x="349.547" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="349.547,529.419 347.882,524.607 347.882,520.607 349.547,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="369.688,525.419 360.631,525.419 358.965,520.607 367.215,520.607 			"/>
                            <rect x="360.631" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="360.631,529.419 358.965,524.607 358.965,520.607 360.631,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="380.771,525.419 371.714,525.419 370.049,520.607 378.299,520.607 			"/>
                            <rect x="371.714" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="371.714,529.419 370.049,524.607 370.049,520.607 371.714,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="391.854,525.419 382.797,525.419 381.133,520.607 389.383,520.607 			"/>
                            <rect x="382.797" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="382.797,529.419 381.133,524.607 381.133,520.607 382.797,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="402.938,525.419 393.881,525.419 392.217,520.607 400.467,520.607 			"/>
                            <rect x="393.881" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="393.881,529.419 392.217,524.607 392.217,520.607 393.881,525.419 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="414.021,525.419 404.965,525.419 403.299,520.607 411.549,520.607 			"/>
                            <rect x="404.965" y="525.419" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="404.965,529.419 403.299,524.607 403.299,520.607 404.965,525.419 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="327.747,536.251 318.69,536.251 317.024,531.441 325.274,531.441 			"/>
                            <rect x="318.69" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="318.69,540.251 317.024,535.441 317.024,531.441 318.69,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="338.83,536.251 329.773,536.251 328.108,531.441 336.358,531.441 			"/>
                            <rect x="329.773" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="329.773,540.251 328.108,535.441 328.108,531.441 329.773,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="349.913,536.251 340.856,536.251 339.192,531.441 347.442,531.441 			"/>
                            <rect x="340.856" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="340.856,540.251 339.192,535.441 339.192,531.441 340.856,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="360.997,536.251 351.94,536.251 350.275,531.441 358.525,531.441 			"/>
                            <rect x="351.94" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="351.94,540.251 350.275,535.441 350.275,531.441 351.94,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="372.081,536.251 363.024,536.251 361.358,531.441 369.608,531.441 			"/>
                            <rect x="363.024" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="363.024,540.251 361.358,535.441 361.358,531.441 363.024,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="383.164,536.251 374.107,536.251 372.442,531.441 380.691,531.441 			"/>
                            <rect x="374.107" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="374.107,540.251 372.442,535.441 372.442,531.441 374.107,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="394.246,536.251 385.189,536.251 383.525,531.441 391.775,531.441 			"/>
                            <rect x="385.189" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="385.189,540.251 383.525,535.441 383.525,531.441 385.189,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="405.33,536.251 396.273,536.251 394.609,531.441 402.859,531.441 			"/>
                            <rect x="396.273" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="396.273,540.251 394.609,535.441 394.609,531.441 396.273,536.251 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="416.414,536.251 407.357,536.251 405.691,531.441 413.941,531.441 			"/>
                            <rect x="407.357" y="536.251" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="407.357,540.251 405.691,535.441 405.691,531.441 407.357,536.251 			"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="144.702,502.861 135.645,502.861 133.98,498.05 142.23,498.05 			"/>
                            <rect x="135.645" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="135.645,506.861 133.98,502.05 133.98,498.05 135.645,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="155.785,502.861 146.728,502.861 145.064,498.05 153.314,498.05 			"/>
                            <rect x="146.728" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="146.728,506.861 145.064,502.05 145.064,498.05 146.728,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="166.869,502.861 157.812,502.861 156.147,498.05 164.397,498.05 			"/>
                            <rect x="157.812" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="157.812,506.861 156.147,502.05 156.147,498.05 157.812,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="177.953,502.861 168.896,502.861 167.23,498.05 175.48,498.05 			"/>
                            <rect x="168.896" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="168.896,506.861 167.23,502.05 167.23,498.05 168.896,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="189.036,502.861 179.979,502.861 178.314,498.05 186.564,498.05 			"/>
                            <rect x="179.979" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="179.979,506.861 178.314,502.05 178.314,498.05 179.979,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="200.119,502.861 191.062,502.861 189.398,498.05 197.648,498.05 			"/>
                            <rect x="191.062" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="191.062,506.861 189.398,502.05 189.398,498.05 191.062,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="211.203,502.861 202.146,502.861 200.481,498.05 208.731,498.05 			"/>
                            <rect x="202.146" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="202.146,506.861 200.481,502.05 200.481,498.05 202.146,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="222.287,502.861 213.23,502.861 211.564,498.05 219.814,498.05 			"/>
                            <rect x="213.23" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="213.23,506.861 211.564,502.05 211.564,498.05 213.23,502.861 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="233.37,502.861 224.313,502.861 222.648,498.05 230.898,498.05 			"/>
                            <rect x="224.313" y="502.861" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="224.313,506.861 222.648,502.05 222.648,498.05 224.313,502.861 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="146.367,513.695 137.31,513.695 135.645,508.882 143.895,508.882 			"/>
                            <rect x="137.31" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="137.31,517.695 135.645,512.882 135.645,508.882 137.31,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="157.451,513.695 148.394,513.695 146.728,508.882 154.978,508.882 			"/>
                            <rect x="148.394" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="148.394,517.695 146.728,512.882 146.728,508.882 148.394,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="168.534,513.695 159.477,513.695 157.812,508.882 166.062,508.882 			"/>
                            <rect x="159.477" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="159.477,517.695 157.812,512.882 157.812,508.882 159.477,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="179.617,513.695 170.56,513.695 168.896,508.882 177.146,508.882 			"/>
                            <rect x="170.56" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="170.56,517.695 168.896,512.882 168.896,508.882 170.56,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="190.701,513.695 181.644,513.695 179.979,508.882 188.229,508.882 			"/>
                            <rect x="181.644" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="181.644,517.695 179.979,512.882 179.979,508.882 181.644,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="201.785,513.695 192.728,513.695 191.062,508.882 199.312,508.882 			"/>
                            <rect x="192.728" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="192.728,517.695 191.062,512.882 191.062,508.882 192.728,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="212.868,513.695 203.811,513.695 202.146,508.882 210.396,508.882 			"/>
                            <rect x="203.811" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="203.811,517.695 202.146,512.882 202.146,508.882 203.811,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="223.951,513.695 214.894,513.695 213.23,508.882 221.48,508.882 			"/>
                            <rect x="214.894" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="214.894,517.695 213.23,512.882 213.23,508.882 214.894,513.695 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="235.035,513.695 225.978,513.695 224.313,508.882 232.563,508.882 			"/>
                            <rect x="225.978" y="513.695" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="225.978,517.695 224.313,512.882 224.313,508.882 225.978,513.695 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="148.865,524.527 139.808,524.527 138.142,519.716 146.392,519.716 			"/>
                            <rect x="139.808" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="139.808,528.527 138.142,523.716 138.142,519.716 139.808,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="159.948,524.527 150.891,524.527 149.226,519.716 157.476,519.716 			"/>
                            <rect x="150.891" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="150.891,528.527 149.226,523.716 149.226,519.716 150.891,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="171.031,524.527 161.974,524.527 160.31,519.716 168.56,519.716 			"/>
                            <rect x="161.974" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="161.974,528.527 160.31,523.716 160.31,519.716 161.974,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="182.115,524.527 173.058,524.527 171.393,519.716 179.643,519.716 			"/>
                            <rect x="173.058" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="173.058,528.527 171.393,523.716 171.393,519.716 173.058,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="193.199,524.527 184.142,524.527 182.476,519.716 190.726,519.716 			"/>
                            <rect x="184.142" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="184.142,528.527 182.476,523.716 182.476,519.716 184.142,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="204.282,524.527 195.225,524.527 193.56,519.716 201.81,519.716 			"/>
                            <rect x="195.225" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="195.225,528.527 193.56,523.716 193.56,519.716 195.225,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="215.365,524.527 206.308,524.527 204.644,519.716 212.894,519.716 			"/>
                            <rect x="206.308" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="206.308,528.527 204.644,523.716 204.644,519.716 206.308,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="226.449,524.527 217.392,524.527 215.727,519.716 223.977,519.716 			"/>
                            <rect x="217.392" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="217.392,528.527 215.727,523.716 215.727,519.716 217.392,524.527 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="237.533,524.527 228.476,524.527 226.81,519.716 235.06,519.716 			"/>
                            <rect x="228.476" y="524.527" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="228.476,528.527 226.81,523.716 226.81,519.716 228.476,524.527 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="151.257,535.361 142.201,535.361 140.535,530.548 148.785,530.548 			"/>
                            <rect x="142.201" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="142.201,539.361 140.535,534.548 140.535,530.548 142.201,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="162.34,535.361 153.284,535.361 151.619,530.548 159.869,530.548 			"/>
                            <rect x="153.284" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="153.284,539.361 151.619,534.548 151.619,530.548 153.284,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="173.423,535.361 164.367,535.361 162.703,530.548 170.953,530.548 			"/>
                            <rect x="164.367" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="164.367,539.361 162.703,534.548 162.703,530.548 164.367,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="184.507,535.361 175.451,535.361 173.786,530.548 182.036,530.548 			"/>
                            <rect x="175.451" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="175.451,539.361 173.786,534.548 173.786,530.548 175.451,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="195.591,535.361 186.535,535.361 184.869,530.548 193.119,530.548 			"/>
                            <rect x="186.535" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="186.535,539.361 184.869,534.548 184.869,530.548 186.535,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="206.674,535.361 197.618,535.361 195.953,530.548 204.203,530.548 			"/>
                            <rect x="197.618" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="197.618,539.361 195.953,534.548 195.953,530.548 197.618,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="217.757,535.361 208.701,535.361 207.037,530.548 215.287,530.548 			"/>
                            <rect x="208.701" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="208.701,539.361 207.037,534.548 207.037,530.548 208.701,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="228.841,535.361 219.785,535.361 218.12,530.548 226.37,530.548 			"/>
                            <rect x="219.785" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="219.785,539.361 218.12,534.548 218.12,530.548 219.785,535.361 			"/>
                        </g>
                        <g>
                            <polygon style="fill:#CFD0D0;" points="239.925,535.361 230.869,535.361 229.203,530.548 237.453,530.548 			"/>
                            <rect x="230.869" y="535.361" style="fill:#FFFFFF;" width="9.057" height="4"/>
                            <polygon style="fill:#B5B5B6;" points="230.869,539.361 229.203,534.548 229.203,530.548 230.869,535.361 			"/>
                        </g>
                    </g>
                </g>
                <circle style="fill:#ACADAE;" cx="155.182" cy="375.756" r="17.592"/>
                <g>
                    <circle style="fill:#4969AE;stroke:#EFEFEF;stroke-width:2;stroke-miterlimit:10;" cx="153.225" cy="374.914" r="16.75"/>
                    <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M162.518,374.837c0,1.656-1.344,3-3,3h-12.584
                        c-1.656,0-3-1.344-3-3v-6.917c0-1.657,1.344-3,3-3h12.584c1.656,0,3,1.343,3,3V374.837z"/>
                    <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M157.18,371.466c0,1.656-1.343,3-3,3h-1.908
                        c-1.657,0-3-1.344-3-3v-0.175c0-1.657,1.343-3,3-3h1.908c1.657,0,3,1.343,3,3V371.466z"/>
                    <path style="fill:#EFEFEF;stroke:#4969AE;stroke-width:2;stroke-miterlimit:10;" d="M158.831,383.837c0,1.656-1.344,3-3,3h-5.209
                        c-1.656,0-3-1.344-3-3v-3c0-1.657,1.344-3,3-3h5.209c1.656,0,3,1.343,3,3V383.837z"/>
                </g>
                <polygon style="fill:#C9CACA;" points="130.905,546.978 119.892,492.972 119.892,444.552 96.825,427.806 96.825,532.222 
                    130.905,568.763 "/>
                <polygon style="fill:#898989;" points="115.166,497.554 98.5,484.304 98.5,435.054 115.166,447.304 "/>
                <rect x="132.758" y="453.388" style="fill:#575554;" width="160.766" height="29.666"/>
                <polygon style="fill:#CFD0D0;" points="316.013,536.251 283.491,536.251 272.907,499.302 305.429,499.302 "/>
                <rect x="283.416" y="536.251" style="fill:#FFFFFF;" width="32.442" height="4"/>
                <line style="fill:#FFFFFF;" x1="283.416" y1="540.251" x2="283.416" y2="536.251"/>
                <polygon style="fill:#B5B5B6;" points="272.907,503.347 283.491,540.251 283.491,536.251 272.907,499.347 "/>
                <rect x="279.19" y="511.001" style="fill:#568716;" width="28.917" height="4.334"/>
                <polygon style="fill:#396001;" points="279.19,515.335 275.145,502.298 275.145,497.964 279.19,511.001 "/>
                <polygon style="fill:#7EBE2A;" points="308.107,511.001 279.19,511.001 275.145,497.949 304.062,497.949 "/>
                <rect x="283.751" y="526.396" style="fill:#B64C37;" width="28.917" height="4.334"/>
                <polygon style="fill:#B54C4B;" points="283.751,530.73 279.707,517.693 279.707,513.359 283.751,526.396 "/>
                <polygon style="fill:#B53922;" points="312.668,526.396 283.751,526.396 279.707,513.343 308.624,513.343 "/>
                <polygon style="fill:#4F4C4B;" points="293.879,483.054 132.758,483.054 132.758,480.015 289.88,480.015 "/>
                <polygon style="fill:#44403F;" points="289.965,480.015 293.286,483.054 293.286,453.388 289.965,453.388 "/>
                <g>
                    <path style="fill:#EBEBEC;" d="M281.982,517.269c-4.149-10.664-10.803-18.332-15.898-18.846l-0.011-0.033l-25.982,0.01
                        l10.563,42.574h25.159C281.031,538.943,286.764,529.556,281.982,517.269z"/>
                    <path style="fill:#898989;" d="M250.654,540.974c5.218-2.031,10.951-11.418,6.169-23.705
                        c-4.781-12.289-12.888-20.604-18.104-18.574L250.654,540.974z"/>
                    <path style="fill:#666464;" d="M261.146,539.232h-3.771c4.793-1.865,9.056-10.477,4.665-21.764
                        c-3.883-9.982-9.164-17.115-13.866-17.326l4.027-0.01l0.01,0.027c4.684,0.477,9.789,7.512,13.601,17.309
                        C270.201,528.755,265.939,537.367,261.146,539.232z"/>
                    <path style="fill:#666464;" d="M273.479,539.232h-3.771c4.793-1.865,9.056-10.477,4.665-21.764
                        c-3.883-9.982-9.164-17.115-13.866-17.326l4.027-0.01l0.01,0.027c4.684,0.477,9.789,7.512,13.601,17.309
                        C282.534,528.755,278.272,537.367,273.479,539.232z"/>
                    <rect x="251.202" y="487.777" style="fill:#413D3C;" width="3.314" height="16.113"/>
                    <polygon style="fill:#AFAFB0;" points="251.283,487.777 250.452,487.328 250.452,500.652 251.283,501.103 	"/>
                    <polygon style="fill:#AFAFB0;" points="263.514,487.777 262.683,487.328 262.683,500.652 263.514,501.103 	"/>
                    <rect x="263.514" y="487.777" style="fill:#413D3C;" width="3.346" height="16.301"/>
                    <g>
                        <path style="fill:#666464;" d="M270.842,484.777c0,1.658-1.343,3-3,3h-20.5c-1.657,0-3-1.342-3-3v-1.582c0-1.658,1.343-3,3-3h20.5
                            c1.657,0,3,1.342,3,3V484.777z"/>
                        <path style="fill:#D3D3D4;" d="M247.968,484.607c0,1.273-0.678,2.307-1.514,2.307l0,0c-0.835,0-1.513-1.033-1.513-2.307v-1.242
                            c0-1.273,0.678-2.307,1.513-2.307l0,0c0.836,0,1.514,1.033,1.514,2.307V484.607z"/>
                        <g>
                            <path style="fill:#413D3C;" d="M247.266,480.582c0.715,0.084,1.204,0.761,1.421,1.408c0.237,0.666,0.281,1.375,0.281,2.066
                                c-0.021,0.689-0.088,1.394-0.31,2.061c-0.212,0.636-0.66,1.371-1.393,1.424c0.344-0.055,0.613-0.302,0.797-0.572
                                c0.194-0.271,0.319-0.588,0.41-0.91c0.18-0.648,0.239-1.326,0.249-2.006c0.021-0.678-0.029-1.359-0.213-2.004
                                C248.325,481.426,247.953,480.758,247.266,480.582z"/>
                        </g>
                    </g>
                    <path style="fill:#EBEBEC;" d="M250.745,500.898c0,0,2.689,1.613,4.302,3.785s-4.001-0.34-4.001-0.34L250.745,500.898z"/>
                    <path style="fill:#EBEBEC;" d="M262.683,500.644c0,0,2.625,1.518,4.347,3.605c1.722,2.086-3.871-0.182-3.871-0.182L262.683,500.644
                        z"/>
                </g>
                <rect x="136.167" y="475.638" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="136.167" y="472.138" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="136.167" y="468.638" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="153.771" y="468.638" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="257.395" y="457.703" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="272.651" y="457.703" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="257.395" y="465.457" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="272.651" y="465.457" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="257.395" y="472.986" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="272.651" y="472.986" style="fill:#9FA0A0;" width="13.159" height="5.754"/>
                <rect x="136.167" y="465.138" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="136.167" y="461.638" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="136.167" y="458.138" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="145.083" y="475.597" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="145.083" y="472.097" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="153.771" y="475.597" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="153.771" y="472.097" style="fill:#F7F8F8;" width="8.167" height="2.75"/>
                <rect x="234.5" y="460.796" style="fill:#68B82E;" width="3.521" height="0.842"/>
                <ellipse style="fill:#898989;" cx="105.05" cy="515.78" rx="5.134" ry="16.25"/>
                <path style="fill:#615F5F;" d="M109.57,515.329v0.25c-0.006,1.141-0.029,2.24-0.08,3.301c-0.063,1.439-0.166,2.789-0.304,4.01
                    c0,0.02,0,0.029-0.006,0.049c-0.176,1.58-0.406,2.932-0.674,3.971c-0.373,1.42-0.813,2.25-1.289,2.25
                    c-0.509,0-0.983-0.961-1.367-2.58c-0.223-0.92-0.413-2.061-0.573-3.359c-0.027-0.281-0.062-0.57-0.091-0.871v-0.01
                    c-0.098-0.939-0.171-1.93-0.223-3c-0.005-0.049-0.005-0.1-0.005-0.15c-0.063-1.189-0.097-2.439-0.097-3.74v-0.129
                    c0-0.641,0.005-1.27,0.023-1.891c0.016-0.68,0.038-1.35,0.074-1.99c0.034-0.779,0.085-1.52,0.148-2.229
                    c0.013-0.15,0.023-0.291,0.035-0.432c0.154-1.67,0.366-3.139,0.618-4.299c0.4-1.871,0.91-2.98,1.458-2.98
                    c0.47,0,0.911,0.82,1.276,2.221c0.269,1.01,0.499,2.33,0.675,3.879c0,0.021,0.006,0.041,0.006,0.061
                    c0.137,1.189,0.24,2.5,0.309,3.91v0.061c0.051,1.039,0.079,2.129,0.079,3.25C109.57,515.028,109.57,515.178,109.57,515.329z"/>
                <path style="fill:#767777;" d="M108.99,522.591c-0.916,0.102-2.397,0.119-4.027-0.429v-0.008c-1.019-0.341-2.097-0.903-3.133-1.806
                    c-0.363-0.31-0.726-0.673-1.077-1.078h-0.006c-0.392-0.458-0.772-0.966-1.129-1.544c-0.092-0.143-0.185-0.293-0.271-0.444
                    c-0.017-0.023-0.035-0.054-0.052-0.087c-0.259-0.459-0.513-0.967-0.755-1.505c-0.19-0.427-0.385-0.823-0.593-1.212
                    c-0.011-0.032-0.028-0.056-0.046-0.086c-0.057-0.111-0.121-0.223-0.185-0.325c-0.535-0.943-1.134-1.759-1.768-2.465
                    c-5.207-5.813-11.251-3.995-11.637-3.908l0.339,2.899l0.029,0.229c0.012-0.008,0.265-0.054,0.697-0.109H85.4
                    c1.729-0.206,4.575-0.583,8.101,2.403c0.667,0.57,1.296,1.243,1.86,2.059h0.005c0.035,0.048,0.07,0.097,0.104,0.152
                    c0.075,0.109,0.144,0.221,0.219,0.332c0.317,0.506,0.617,1.069,0.887,1.679c0.04,0.088,0.08,0.183,0.126,0.27
                    c0.046,0.111,0.093,0.215,0.144,0.316c0.064,0.135,0.133,0.27,0.196,0.396c0.046,0.096,0.098,0.19,0.144,0.285
                    c0.536,1.007,1.112,1.886,1.711,2.63c0.299,0.381,0.61,0.721,0.921,1.038h0.006c1.907,1.947,3.998,2.852,5.807,3.239
                    c0.91,0.198,1.757,0.262,2.471,0.262h0.202c0.271-0.823,0.501-1.894,0.68-3.146"/>
                <path style="fill:none;" d="M109.81,518.829c-0.097,0.01-0.2,0.029-0.309,0.051"/>
                <path style="fill:#1D1D1D;" d="M109.57,515.2v0.198c-0.006,0.903-0.029,1.774-0.081,2.614c-0.587,0-1.935,0.023-3.709,0.252h-0.028
                    c-0.265,0.033-0.536,0.063-0.818,0.111c-0.898,0.135-1.877,0.317-2.909,0.571c-0.945,0.236-1.929,0.522-2.932,0.887
                    c-0.351,0.127-0.703,0.262-1.06,0.411c-0.449,0.183-0.894,0.381-1.342,0.595c-4.384,2.099-8.698,2.487-11.308,2.487
                    c-1.457,0-0.709,0.083-0.807,0.067l0.161-2.201l0.069-0.952c0.035,0.008,0.607,0.1,3.74-0.288h0.006
                    c0.594-0.071,1.215-0.166,1.86-0.302h0.006c1.445-0.277,3.006-0.72,4.579-1.395c0.075-0.022,0.15-0.054,0.225-0.086
                    c0.006,0,0.006-0.008,0.012-0.008c0.236-0.104,0.466-0.206,0.697-0.317c0.483-0.229,0.967-0.452,1.451-0.642
                    c0.225-0.095,0.443-0.182,0.663-0.27h0.005c0.593-0.229,1.187-0.427,1.763-0.609c1.451-0.452,2.839-0.76,4.095-0.982h0.006
                    c0.317-0.056,0.623-0.103,0.917-0.15c2.292-0.333,4.038-0.355,4.734-0.348C109.57,514.961,109.57,515.081,109.57,515.2z"/>
                <path style="fill:#00568A;" d="M109.486,514.112l0.015,0.406c-0.88-0.137-3.745-0.527-5.887-0.74
                    c-1.777-0.167-3.794-0.305-5.752-0.294c-0.146,0.004-0.29,0-0.438,0.003c-0.554,0.01-1.107,0.03-1.639,0.06
                    c-0.15,0.011-0.294,0.023-0.439,0.036c-0.713,0.052-1.395,0.136-2.036,0.254c-0.105,0.022-0.207,0.037-0.303,0.055
                    c-0.005-0.002-0.009,0.005-0.014,0.003c-0.074,0.01-0.15,0.025-0.225,0.037c-1.967,0.312-3.086,0.214-3.969-0.185
                    c-0.282-0.128-0.539-0.287-0.793-0.48l-0.006-0.003c-0.188-0.128-0.367-0.278-0.553-0.44c-0.122-0.107-0.25-0.218-0.379-0.335
                    c-0.932-0.848-0.757-1.138-3.756-2.406l0.262-0.594l1.005-2.31c0.095,0.043,0.192,0.078,0.284,0.128l0.004,0.002
                    c2.973,1.299,2.884,1.609,3.867,2.498c0.03,0.03,0.059,0.053,0.089,0.084c0.101,0.097,0.2,0.186,0.294,0.271l0.005,0.003
                    c0.759,0.671,1.283,0.995,2.666,0.898c0.469-0.031,1.034-0.105,1.744-0.238c0.353-0.066,0.718-0.119,1.09-0.16l0.006,0.003
                    c0.197-0.031,0.383-0.053,0.58-0.067c0.824-0.09,1.677-0.129,2.544-0.146c0.142-0.006,0.289-0.009,0.432-0.006
                    c0.007-0.004,0.013-0.001,0.019,0.001c2.435-0.032,4.929,0.156,6.991,0.377c1.941,0.206,3.49,0.444,4.238,0.565
                    c0.003,0.986,0.015,1.283,0.047,2.36L109.486,514.112z"/>
                <path style="fill:#C91D1D;" d="M109.413,510.326c-0.737,0.134-1.097,0.206-2.928,0.712c-2.144,0.579-4.764,1.442-7.201,2.655
                    c-0.512,0.262-1.014,0.522-1.503,0.808c-0.253,0.15-0.501,0.3-0.743,0.452c-0.184,0.119-0.363,0.236-0.542,0.363
                    c-0.012,0.008-0.029,0.016-0.041,0.024c-0.886,0.609-1.762,1.069-2.608,1.402c-0.802,0.324-1.579,0.53-2.322,0.649
                    c-0.409,0.063-0.807,0.109-1.192,0.127c-0.185,0.008-0.363,0.016-0.542,0.016c-2.298,0-2.415-0.535-3.314-0.994
                    c-0.362-0.19-0.576-0.341-0.622-0.365l0.951-2.669l0.063-0.175c0.034,0.023,0.207,0.135,0.506,0.285
                    c0.634,0.316,0.151,0.606,1.689,0.717c1.411,0.119,3.115-0.079,4.954-0.998c0.346-0.173,0.697-0.363,1.049-0.594
                    c0.121-0.071,0.241-0.15,0.362-0.237c0.668-0.459,1.366-0.88,2.085-1.276c3.283-1.798,6.947-2.93,9.591-3.596
                    c1.146-0.284,1.356-0.327,2.013-0.454C109.269,507.978,109.375,509.098,109.413,510.326z"/>
                <path style="fill:none;" d="M109.187,522.889c0.138-1.221,0.24-2.57,0.304-4.01c0.006,0,0.006,0,0.011,0"/>
                <path style="fill:none;" d="M109.81,518.829c-0.097,0.01-0.2,0.029-0.309,0.051"/>
                <path style="fill:#C2C4C2;" d="M108.99,523.93c0.138-0.968,0.338-2.168,0.401-3.309c-0.985,0.127-0.545,0.312-1.962,0.326H107.4
                    c-0.265,0-0.542,0-0.824-0.008c-1.313-0.015-2.69-0.126-3.98-0.388h-0.006c-1.048-0.206-2.034-0.506-2.892-0.935h-0.005
                    c-0.144-0.071-0.283-0.15-0.421-0.229c-0.132-0.078-0.259-0.159-0.38-0.245h-0.005c-0.12-0.079-0.23-0.166-0.34-0.254
                    c-0.322-0.254-0.604-0.531-0.84-0.848c-0.213-0.277-0.438-0.547-0.674-0.801h-0.006c-0.08-0.102-0.167-0.189-0.253-0.269
                    c-0.081-0.087-0.161-0.174-0.248-0.254c-0.679-0.648-1.44-1.227-2.229-1.727c-3.254-2.06-5.416-2.713-7.052-2.997H87.22
                    c-0.362-0.071-0.616-0.104-0.726-0.119c-0.022-0.008-0.04-0.008-0.052-0.008l-0.207,3.152c0.017,0,0.328,0.047,0.847,0.143
                    c0.167,0.031,0.362,0.071,0.57,0.11c0.006,0,0.006,0,0.012,0.009h0.006c0.869,0.174,0.381,0.266,1.665,0.708c0,0,0,0,0.006,0
                    c1.359,0.467,2.822,1.109,4.136,1.965c0.219,0.135,0.438,0.284,0.646,0.444c0.167,0.119,0.328,0.245,0.483,0.371
                    c0.524,0.436,1.002,0.911,1.412,1.441c0.034,0.033,0.063,0.071,0.092,0.111c0.167,0.222,0.346,0.428,0.536,0.617
                    c0.012,0.018,0.023,0.033,0.035,0.041c0.83,0.855,1.86,1.48,3.001,1.947c0.633,0.262,1.296,0.469,1.981,0.627h0.006
                    c1.74,0.427,3.583,0.57,5.23,0.578h0.11c1.515,0,0.812-0.111,1.762-0.223"/>
                <g>
                    <g>
                        <g>
                            <rect x="166.551" y="458.117" style="fill:#68B82E;" width="2.01" height="3.521"/>
                            <rect x="165.041" y="459.876" style="fill:#68B82E;" width="3.521" height="1.762"/>
                        </g>
                        <g>
                            <rect x="171.911" y="458.117" style="fill:#68B82E;" width="1.005" height="3.521"/>
                            <rect x="169.394" y="458.511" style="fill:#68B82E;" width="1.761" height="3.127"/>
                        </g>
                        <g>
                            <rect x="178.061" y="460.632" style="fill:#68B82E;" width="3.521" height="1.006"/>
                            <path style="fill:#68B82E;" d="M178.061,458.117v1.76h3.127v-1.76H178.061z M180.226,459.332h-1.203v-0.678h1.203V459.332z"/>
                        </g>
                        <g>
                            <rect x="173.726" y="458.117" style="fill:#68B82E;" width="1.005" height="3.521"/>
                            <rect x="173.726" y="460.632" style="fill:#68B82E;" width="3.521" height="1.006"/>
                            <circle style="fill:#68B82E;" cx="176.361" cy="458.992" r="0.875"/>
                        </g>
                        <g>
                            <rect x="182.405" y="460.33" style="fill:#68B82E;" width="3.521" height="1.309"/>
                            <rect x="182.405" y="458.117" style="fill:#68B82E;" width="3.521" height="1.309"/>
                        </g>
                        <g>
                            <rect x="203.816" y="458.111" style="fill:#68B82E;" width="3.521" height="2.01"/>
                            <rect x="205.576" y="458.111" style="fill:#68B82E;" width="1.761" height="3.521"/>
                        </g>
                        <g>
                            <rect x="194.926" y="458.111" style="fill:#68B82E;" width="1.005" height="3.521"/>
                            <rect x="196.687" y="458.111" style="fill:#68B82E;" width="1.761" height="3.127"/>
                        </g>
                        <g>
                            <rect x="208.121" y="458.121" style="fill:#68B82E;" width="3.521" height="1.006"/>
                            <path style="fill:#68B82E;" d="M211.642,461.642v-1.76h-3.127v1.76H211.642z M209.477,460.427h1.203v0.678h-1.203V460.427z"/>
                        </g>
                        <g>
                            <rect x="193.111" y="458.111" style="fill:#68B82E;" width="1.005" height="3.521"/>
                            <rect x="190.595" y="458.111" style="fill:#68B82E;" width="3.521" height="1.006"/>
                            <circle style="fill:#68B82E;" cx="191.481" cy="460.757" r="0.875"/>
                        </g>
                        <g>
                            <rect x="199.327" y="458.123" style="fill:#68B82E;" width="3.521" height="1.307"/>
                            <rect x="199.327" y="460.335" style="fill:#68B82E;" width="3.521" height="1.307"/>
                        </g>
                        <g>
                            <rect x="216.739" y="459.623" style="fill:#68B82E;" width="3.521" height="2.01"/>
                            <rect x="216.739" y="458.113" style="fill:#68B82E;" width="1.761" height="3.52"/>
                        </g>
                        <g>
                            <rect x="228.144" y="458.113" style="fill:#68B82E;" width="1.005" height="3.52"/>
                            <rect x="225.627" y="458.507" style="fill:#68B82E;" width="1.761" height="3.125"/>
                        </g>
                        <g>
                            <rect x="212.433" y="460.619" style="fill:#68B82E;" width="3.521" height="1.004"/>
                            <path style="fill:#68B82E;" d="M212.433,458.101v1.762h3.127v-1.762H212.433z M214.598,459.316h-1.203v-0.678h1.203V459.316z"/>
                        </g>
                        <g>
                            <rect x="229.959" y="458.113" style="fill:#68B82E;" width="1.005" height="3.52"/>
                            <rect x="229.959" y="460.628" style="fill:#68B82E;" width="3.521" height="1.004"/>
                            <circle style="fill:#68B82E;" cx="232.594" cy="458.988" r="0.875"/>
                        </g>
                        <g>
                            <rect x="221.228" y="460.314" style="fill:#68B82E;" width="3.521" height="1.309"/>
                            <rect x="221.228" y="458.101" style="fill:#68B82E;" width="3.521" height="1.309"/>
                        </g>
                        <circle style="fill:#68B82E;" cx="236.261" cy="459.236" r="1.129"/>
                        <rect x="238.765" y="458.111" style="fill:#68B82E;" width="0.842" height="3.521"/>
                        <circle style="fill:#68B82E;" cx="241.167" cy="459.236" r="1.129"/>
                        <rect x="240.039" y="460.796" style="fill:#68B82E;" width="2.258" height="0.842"/>
                        <g>
                            <rect x="247.541" y="463.826" style="fill:#68B82E;" width="2.01" height="3.719"/>
                            <rect x="247.541" y="465.683" style="fill:#68B82E;" width="3.521" height="1.861"/>
                        </g>
                        <g>
                            <rect x="243.186" y="463.826" style="fill:#68B82E;" width="1.005" height="3.719"/>
                            <rect x="244.947" y="464.242" style="fill:#68B82E;" width="1.761" height="3.303"/>
                        </g>
                        <g>
                            <rect x="234.519" y="466.482" style="fill:#68B82E;" width="3.521" height="1.063"/>
                            <path style="fill:#68B82E;" d="M238.041,463.824v1.859h-3.127v-1.859H238.041z M235.875,465.107h1.203v-0.715h-1.203V465.107z"/>
                        </g>
                        <g>
                            <rect x="241.371" y="463.826" style="fill:#68B82E;" width="1.005" height="3.719"/>
                            <rect x="238.855" y="466.482" style="fill:#68B82E;" width="3.521" height="1.063"/>
                            <ellipse style="fill:#68B82E;" cx="239.741" cy="464.75" rx="0.875" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="230.176" y="466.162" style="fill:#68B82E;" width="3.521" height="1.383"/>
                            <rect x="230.176" y="463.826" style="fill:#68B82E;" width="3.521" height="1.381"/>
                        </g>
                        <g>
                            <rect x="208.765" y="463.82" style="fill:#68B82E;" width="3.521" height="2.121"/>
                            <rect x="208.765" y="463.82" style="fill:#68B82E;" width="1.761" height="3.717"/>
                        </g>
                        <g>
                            <rect x="220.17" y="463.82" style="fill:#68B82E;" width="1.005" height="3.717"/>
                            <rect x="217.654" y="463.82" style="fill:#68B82E;" width="1.761" height="3.301"/>
                        </g>
                        <g>
                            <rect x="204.459" y="463.83" style="fill:#68B82E;" width="3.521" height="1.061"/>
                            <path style="fill:#68B82E;" d="M204.459,467.548v-1.859h3.127v1.859H204.459z M206.625,466.265h-1.203v0.717h1.203V466.265z"/>
                        </g>
                        <g>
                            <rect x="221.986" y="463.82" style="fill:#68B82E;" width="1.005" height="3.717"/>
                            <rect x="221.986" y="463.82" style="fill:#68B82E;" width="3.521" height="1.061"/>
                            <ellipse style="fill:#68B82E;" cx="224.621" cy="466.613" rx="0.875" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="213.254" y="463.83" style="fill:#68B82E;" width="3.521" height="1.383"/>
                            <rect x="213.254" y="466.167" style="fill:#68B82E;" width="3.521" height="1.381"/>
                        </g>
                        <g>
                            <rect x="195.842" y="465.416" style="fill:#68B82E;" width="3.521" height="2.123"/>
                            <rect x="197.602" y="463.82" style="fill:#68B82E;" width="1.761" height="3.719"/>
                        </g>
                        <g>
                            <rect x="186.953" y="463.82" style="fill:#68B82E;" width="1.005" height="3.719"/>
                            <rect x="188.713" y="464.236" style="fill:#68B82E;" width="1.761" height="3.303"/>
                        </g>
                        <g>
                            <rect x="200.147" y="466.466" style="fill:#68B82E;" width="3.521" height="1.063"/>
                            <path style="fill:#68B82E;" d="M203.668,463.808v1.859h-3.127v-1.859H203.668z M201.503,465.091h1.203v-0.715h-1.203V465.091z"/>
                        </g>
                        <g>
                            <rect x="185.137" y="463.82" style="fill:#68B82E;" width="1.005" height="3.719"/>
                            <rect x="182.622" y="466.478" style="fill:#68B82E;" width="3.521" height="1.061"/>
                            <ellipse style="fill:#68B82E;" cx="183.507" cy="464.744" rx="0.875" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="191.353" y="466.146" style="fill:#68B82E;" width="3.521" height="1.381"/>
                            <rect x="191.353" y="463.808" style="fill:#68B82E;" width="3.521" height="1.381"/>
                        </g>
                        <ellipse style="fill:#68B82E;" cx="174.934" cy="465.006" rx="1.129" ry="1.192"/>
                    </g>
                    <g>
                        <rect x="226.274" y="469.322" style="fill:#68B82E;" width="2.01" height="3.719"/>
                        <rect x="226.274" y="471.181" style="fill:#68B82E;" width="3.521" height="1.859"/>
                    </g>
                    <g>
                        <rect x="243.186" y="469.367" style="fill:#68B82E;" width="1.006" height="3.719"/>
                        <rect x="244.948" y="469.783" style="fill:#68B82E;" width="1.76" height="3.303"/>
                    </g>
                    <g>
                        <rect x="234.52" y="472.023" style="fill:#68B82E;" width="3.521" height="1.063"/>
                        <path style="fill:#68B82E;" d="M238.042,469.365v1.859h-3.127v-1.859H238.042z M235.875,470.648h1.203v-0.715h-1.203V470.648z"/>
                    </g>
                    <g>
                        <rect x="250.057" y="469.333" style="fill:#68B82E;" width="1.004" height="3.719"/>
                        <rect x="247.542" y="471.99" style="fill:#68B82E;" width="3.52" height="1.063"/>
                        <ellipse style="fill:#68B82E;" cx="248.426" cy="470.257" rx="0.875" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="238.856" y="471.708" style="fill:#68B82E;" width="3.521" height="1.381"/>
                        <rect x="238.856" y="469.371" style="fill:#68B82E;" width="3.521" height="1.381"/>
                    </g>
                    <g>
                        <rect x="221.987" y="469.351" style="fill:#68B82E;" width="3.52" height="2.121"/>
                        <rect x="221.987" y="469.351" style="fill:#68B82E;" width="1.76" height="3.717"/>
                    </g>
                    <g>
                        <rect x="220.17" y="469.361" style="fill:#68B82E;" width="1.006" height="3.717"/>
                        <rect x="217.655" y="469.361" style="fill:#68B82E;" width="1.76" height="3.301"/>
                    </g>
                    <g>
                        <rect x="186.954" y="469.361" style="fill:#68B82E;" width="1.005" height="3.717"/>
                        <rect x="186.954" y="469.361" style="fill:#68B82E;" width="3.521" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="189.588" cy="472.154" rx="0.875" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="213.254" y="469.371" style="fill:#68B82E;" width="3.521" height="1.383"/>
                        <rect x="213.254" y="471.708" style="fill:#68B82E;" width="3.521" height="1.381"/>
                    </g>
                    <g>
                        <rect x="207.063" y="469.333" style="fill:#68B82E;" width="1.006" height="3.717"/>
                        <rect x="204.547" y="469.333" style="fill:#68B82E;" width="1.76" height="3.301"/>
                    </g>
                    <g>
                        <rect x="200.147" y="469.343" style="fill:#68B82E;" width="3.521" height="1.383"/>
                        <rect x="200.147" y="471.681" style="fill:#68B82E;" width="3.521" height="1.381"/>
                    </g>
                    <g>
                        <rect x="182.622" y="469.371" style="fill:#68B82E;" width="1.005" height="3.719"/>
                        <rect x="184.382" y="469.787" style="fill:#68B82E;" width="1.761" height="3.303"/>
                    </g>
                    <g>
                        <rect x="211.288" y="469.351" style="fill:#68B82E;" width="1.004" height="3.717"/>
                        <rect x="208.772" y="472.007" style="fill:#68B82E;" width="3.52" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="209.657" cy="470.275" rx="0.875" ry="0.924"/>
                    </g>
                    <ellipse style="fill:#68B82E;" cx="174.934" cy="470.547" rx="1.129" ry="1.192"/>
                    <g>
                        <rect x="247.542" y="474.699" style="fill:#68B82E;" width="2.01" height="3.719"/>
                        <rect x="247.542" y="476.558" style="fill:#68B82E;" width="3.52" height="1.859"/>
                    </g>
                    <g>
                        <rect x="243.186" y="474.699" style="fill:#68B82E;" width="1.006" height="3.719"/>
                        <rect x="244.948" y="475.117" style="fill:#68B82E;" width="1.76" height="3.301"/>
                    </g>
                    <g>
                        <rect x="230.176" y="477.037" style="fill:#68B82E;" width="3.521" height="1.381"/>
                        <rect x="230.176" y="474.699" style="fill:#68B82E;" width="3.521" height="1.381"/>
                    </g>
                    <g>
                        <rect x="208.766" y="474.693" style="fill:#68B82E;" width="3.52" height="2.123"/>
                        <rect x="208.766" y="474.693" style="fill:#68B82E;" width="1.76" height="3.719"/>
                    </g>
                    <g>
                        <rect x="241.383" y="474.677" style="fill:#68B82E;" width="1.004" height="3.719"/>
                        <rect x="238.866" y="474.677" style="fill:#68B82E;" width="1.762" height="3.303"/>
                    </g>
                    <g>
                        <rect x="204.459" y="474.703" style="fill:#68B82E;" width="3.521" height="1.063"/>
                        <path style="fill:#68B82E;" d="M204.459,478.423v-1.859h3.127v1.859H204.459z M206.625,477.14h-1.203v0.715h1.203V477.14z"/>
                    </g>
                    <g>
                        <rect x="221.987" y="474.693" style="fill:#68B82E;" width="1.004" height="3.719"/>
                        <rect x="221.987" y="474.693" style="fill:#68B82E;" width="3.52" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="224.622" cy="477.488" rx="0.875" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="234.467" y="474.689" style="fill:#68B82E;" width="3.52" height="1.381"/>
                        <rect x="234.467" y="477.027" style="fill:#68B82E;" width="3.52" height="1.381"/>
                    </g>
                    <g>
                        <rect x="195.842" y="476.291" style="fill:#68B82E;" width="3.521" height="2.121"/>
                        <rect x="197.602" y="474.695" style="fill:#68B82E;" width="1.762" height="3.717"/>
                    </g>
                    <g>
                        <rect x="186.954" y="474.695" style="fill:#68B82E;" width="1.004" height="3.717"/>
                        <rect x="188.713" y="475.111" style="fill:#68B82E;" width="1.762" height="3.301"/>
                    </g>
                    <g>
                        <rect x="185.137" y="474.695" style="fill:#68B82E;" width="1.006" height="3.717"/>
                        <rect x="182.622" y="477.351" style="fill:#68B82E;" width="3.521" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="183.508" cy="475.619" rx="0.875" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="191.354" y="477.021" style="fill:#68B82E;" width="3.52" height="1.381"/>
                        <rect x="191.354" y="474.683" style="fill:#68B82E;" width="3.52" height="1.381"/>
                    </g>
                    <ellipse style="fill:#68B82E;" cx="174.934" cy="475.88" rx="1.129" ry="1.193"/>
                </g>
                <g>
                    <g>
                        <g>
                            <rect x="316.187" y="458.617" style="fill:#68B82E;" width="1.849" height="3.521"/>
                            <rect x="314.797" y="460.376" style="fill:#68B82E;" width="3.238" height="1.762"/>
                        </g>
                        <g>
                            <rect x="321.117" y="458.617" style="fill:#68B82E;" width="0.924" height="3.521"/>
                            <rect x="318.801" y="459.011" style="fill:#68B82E;" width="1.62" height="3.127"/>
                        </g>
                        <g>
                            <rect x="326.773" y="461.132" style="fill:#68B82E;" width="3.239" height="1.006"/>
                            <path style="fill:#68B82E;" d="M326.773,458.617v1.76h2.877v-1.76H326.773z M328.764,459.832h-1.105v-0.678h1.105V459.832z"/>
                        </g>
                        <g>
                            <rect x="322.786" y="458.617" style="fill:#68B82E;" width="0.925" height="3.521"/>
                            <rect x="322.786" y="461.132" style="fill:#68B82E;" width="3.238" height="1.006"/>
                            <ellipse style="fill:#68B82E;" cx="325.209" cy="459.492" rx="0.805" ry="0.875"/>
                        </g>
                        <g>
                            <rect x="330.769" y="460.83" style="fill:#68B82E;" width="3.237" height="1.309"/>
                            <rect x="330.769" y="458.617" style="fill:#68B82E;" width="3.237" height="1.309"/>
                        </g>
                        <g>
                            <rect x="350.461" y="458.611" style="fill:#68B82E;" width="3.238" height="2.01"/>
                            <rect x="352.08" y="458.611" style="fill:#68B82E;" width="1.62" height="3.521"/>
                        </g>
                        <g>
                            <rect x="342.285" y="458.611" style="fill:#68B82E;" width="0.926" height="3.521"/>
                            <rect x="343.905" y="458.611" style="fill:#68B82E;" width="1.619" height="3.127"/>
                        </g>
                        <g>
                            <rect x="354.42" y="458.621" style="fill:#68B82E;" width="3.239" height="1.006"/>
                            <path style="fill:#68B82E;" d="M357.66,462.142v-1.76h-2.875v1.76H357.66z M355.668,460.927h1.107v0.678h-1.107V460.927z"/>
                        </g>
                        <g>
                            <rect x="340.616" y="458.611" style="fill:#68B82E;" width="0.924" height="3.521"/>
                            <rect x="338.301" y="458.611" style="fill:#68B82E;" width="3.238" height="1.006"/>
                            <ellipse style="fill:#68B82E;" cx="339.117" cy="461.257" rx="0.805" ry="0.875"/>
                        </g>
                        <g>
                            <rect x="346.333" y="458.623" style="fill:#68B82E;" width="3.238" height="1.307"/>
                            <rect x="346.333" y="460.835" style="fill:#68B82E;" width="3.238" height="1.307"/>
                        </g>
                        <g>
                            <rect x="362.347" y="460.123" style="fill:#68B82E;" width="3.238" height="2.01"/>
                            <rect x="362.347" y="458.613" style="fill:#68B82E;" width="1.62" height="3.52"/>
                        </g>
                        <g>
                            <rect x="372.838" y="458.613" style="fill:#68B82E;" width="0.923" height="3.52"/>
                            <rect x="370.523" y="459.007" style="fill:#68B82E;" width="1.619" height="3.125"/>
                        </g>
                        <g>
                            <rect x="358.388" y="461.119" style="fill:#68B82E;" width="3.238" height="1.004"/>
                            <path style="fill:#68B82E;" d="M358.388,458.601v1.762h2.875v-1.762H358.388z M360.379,459.816h-1.107v-0.678h1.107V459.816z"/>
                        </g>
                        <g>
                            <rect x="374.508" y="458.613" style="fill:#68B82E;" width="0.924" height="3.52"/>
                            <rect x="374.508" y="461.128" style="fill:#68B82E;" width="3.238" height="1.004"/>
                            <ellipse style="fill:#68B82E;" cx="376.932" cy="459.488" rx="0.805" ry="0.875"/>
                        </g>
                        <g>
                            <rect x="366.477" y="460.814" style="fill:#68B82E;" width="3.237" height="1.309"/>
                            <rect x="366.477" y="458.601" style="fill:#68B82E;" width="3.237" height="1.309"/>
                        </g>
                        <ellipse style="fill:#68B82E;" cx="380.304" cy="459.736" rx="1.038" ry="1.129"/>
                        <rect x="382.607" y="458.611" style="fill:#68B82E;" width="0.773" height="3.521"/>
                        <ellipse style="fill:#68B82E;" cx="384.816" cy="459.736" rx="1.037" ry="1.129"/>
                        <rect x="383.779" y="461.296" style="fill:#68B82E;" width="2.076" height="0.842"/>
                        <g>
                            <rect x="390.678" y="464.326" style="fill:#68B82E;" width="1.85" height="3.719"/>
                            <rect x="390.678" y="466.183" style="fill:#68B82E;" width="3.238" height="1.861"/>
                        </g>
                        <g>
                            <rect x="386.674" y="464.326" style="fill:#68B82E;" width="0.924" height="3.719"/>
                            <rect x="388.293" y="464.742" style="fill:#68B82E;" width="1.619" height="3.303"/>
                        </g>
                        <g>
                            <rect x="378.701" y="466.982" style="fill:#68B82E;" width="3.24" height="1.063"/>
                            <path style="fill:#68B82E;" d="M381.941,464.324v1.859h-2.877v-1.859H381.941z M379.949,465.607h1.107v-0.715h-1.107V465.607z"/>
                        </g>
                        <g>
                            <rect x="385.004" y="464.326" style="fill:#68B82E;" width="0.924" height="3.719"/>
                            <rect x="382.689" y="466.982" style="fill:#68B82E;" width="3.238" height="1.063"/>
                            <ellipse style="fill:#68B82E;" cx="383.504" cy="465.25" rx="0.805" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="374.707" y="466.662" style="fill:#68B82E;" width="3.238" height="1.383"/>
                            <rect x="374.707" y="464.326" style="fill:#68B82E;" width="3.238" height="1.381"/>
                        </g>
                        <g>
                            <rect x="355.014" y="464.32" style="fill:#68B82E;" width="3.238" height="2.121"/>
                            <rect x="355.014" y="464.32" style="fill:#68B82E;" width="1.619" height="3.717"/>
                        </g>
                        <g>
                            <rect x="365.504" y="464.32" style="fill:#68B82E;" width="0.925" height="3.717"/>
                            <rect x="363.19" y="464.32" style="fill:#68B82E;" width="1.619" height="3.301"/>
                        </g>
                        <g>
                            <rect x="351.054" y="464.33" style="fill:#68B82E;" width="3.239" height="1.061"/>
                            <path style="fill:#68B82E;" d="M351.054,468.048v-1.859h2.876v1.859H351.054z M353.045,466.765h-1.107v0.717h1.107V466.765z"/>
                        </g>
                        <g>
                            <rect x="367.174" y="464.32" style="fill:#68B82E;" width="0.924" height="3.717"/>
                            <rect x="367.174" y="464.32" style="fill:#68B82E;" width="3.238" height="1.061"/>
                            <ellipse style="fill:#68B82E;" cx="369.597" cy="467.113" rx="0.805" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="359.143" y="464.33" style="fill:#68B82E;" width="3.238" height="1.383"/>
                            <rect x="359.143" y="466.667" style="fill:#68B82E;" width="3.238" height="1.381"/>
                        </g>
                        <g>
                            <rect x="343.128" y="465.916" style="fill:#68B82E;" width="3.238" height="2.123"/>
                            <rect x="344.747" y="464.32" style="fill:#68B82E;" width="1.62" height="3.719"/>
                        </g>
                        <g>
                            <rect x="334.952" y="464.32" style="fill:#68B82E;" width="0.924" height="3.719"/>
                            <rect x="336.571" y="464.736" style="fill:#68B82E;" width="1.62" height="3.303"/>
                        </g>
                        <g>
                            <rect x="347.087" y="466.966" style="fill:#68B82E;" width="3.239" height="1.063"/>
                            <path style="fill:#68B82E;" d="M350.327,464.308v1.859h-2.876v-1.859H350.327z M348.334,465.591h1.107v-0.715h-1.107V465.591z"/>
                        </g>
                        <g>
                            <rect x="333.282" y="464.32" style="fill:#68B82E;" width="0.925" height="3.719"/>
                            <rect x="330.967" y="466.978" style="fill:#68B82E;" width="3.239" height="1.061"/>
                            <ellipse style="fill:#68B82E;" cx="331.782" cy="465.244" rx="0.805" ry="0.924"/>
                        </g>
                        <g>
                            <rect x="338.999" y="466.646" style="fill:#68B82E;" width="3.238" height="1.381"/>
                            <rect x="338.999" y="464.308" style="fill:#68B82E;" width="3.238" height="1.381"/>
                        </g>
                    </g>
                    <g>
                        <rect x="371.119" y="469.822" style="fill:#68B82E;" width="1.849" height="3.719"/>
                        <rect x="371.119" y="471.681" style="fill:#68B82E;" width="3.239" height="1.859"/>
                    </g>
                    <g>
                        <rect x="386.674" y="469.867" style="fill:#68B82E;" width="0.924" height="3.719"/>
                        <rect x="388.293" y="470.283" style="fill:#68B82E;" width="1.619" height="3.303"/>
                    </g>
                    <g>
                        <rect x="378.703" y="472.523" style="fill:#68B82E;" width="3.238" height="1.063"/>
                        <path style="fill:#68B82E;" d="M381.941,469.865v1.859h-2.877v-1.859H381.941z M379.949,471.148h1.107v-0.715h-1.107V471.148z"/>
                    </g>
                    <g>
                        <rect x="392.994" y="469.833" style="fill:#68B82E;" width="0.922" height="3.719"/>
                        <rect x="390.68" y="472.49" style="fill:#68B82E;" width="3.236" height="1.063"/>
                        <ellipse style="fill:#68B82E;" cx="391.493" cy="470.757" rx="0.806" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="382.691" y="472.208" style="fill:#68B82E;" width="3.238" height="1.381"/>
                        <rect x="382.691" y="469.871" style="fill:#68B82E;" width="3.238" height="1.381"/>
                    </g>
                    <g>
                        <rect x="367.175" y="469.851" style="fill:#68B82E;" width="3.237" height="2.121"/>
                        <rect x="367.175" y="469.851" style="fill:#68B82E;" width="1.618" height="3.717"/>
                    </g>
                    <g>
                        <rect x="365.504" y="469.861" style="fill:#68B82E;" width="0.926" height="3.717"/>
                        <rect x="363.191" y="469.861" style="fill:#68B82E;" width="1.618" height="3.301"/>
                    </g>
                    <g>
                        <rect x="334.953" y="469.861" style="fill:#68B82E;" width="0.925" height="3.717"/>
                        <rect x="334.953" y="469.861" style="fill:#68B82E;" width="3.238" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="337.376" cy="472.654" rx="0.805" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="359.143" y="469.871" style="fill:#68B82E;" width="3.239" height="1.383"/>
                        <rect x="359.143" y="472.208" style="fill:#68B82E;" width="3.239" height="1.381"/>
                    </g>
                    <g>
                        <rect x="353.449" y="469.833" style="fill:#68B82E;" width="0.925" height="3.717"/>
                        <rect x="351.135" y="469.833" style="fill:#68B82E;" width="1.618" height="3.301"/>
                    </g>
                    <g>
                        <rect x="347.087" y="469.843" style="fill:#68B82E;" width="3.239" height="1.383"/>
                        <rect x="347.087" y="472.181" style="fill:#68B82E;" width="3.239" height="1.381"/>
                    </g>
                    <g>
                        <rect x="330.967" y="469.871" style="fill:#68B82E;" width="0.926" height="3.719"/>
                        <rect x="332.587" y="470.287" style="fill:#68B82E;" width="1.619" height="3.303"/>
                    </g>
                    <g>
                        <rect x="357.334" y="469.851" style="fill:#68B82E;" width="0.923" height="3.717"/>
                        <rect x="355.02" y="472.507" style="fill:#68B82E;" width="3.237" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="355.834" cy="470.775" rx="0.805" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="390.68" y="475.199" style="fill:#68B82E;" width="1.848" height="3.719"/>
                        <rect x="390.68" y="477.058" style="fill:#68B82E;" width="3.236" height="1.859"/>
                    </g>
                    <g>
                        <rect x="386.674" y="475.199" style="fill:#68B82E;" width="0.924" height="3.719"/>
                        <rect x="388.293" y="475.617" style="fill:#68B82E;" width="1.619" height="3.301"/>
                    </g>
                    <g>
                        <rect x="374.707" y="477.537" style="fill:#68B82E;" width="3.238" height="1.381"/>
                        <rect x="374.707" y="475.199" style="fill:#68B82E;" width="3.238" height="1.381"/>
                    </g>
                    <g>
                        <rect x="355.015" y="475.193" style="fill:#68B82E;" width="3.237" height="2.123"/>
                        <rect x="355.015" y="475.193" style="fill:#68B82E;" width="1.618" height="3.719"/>
                    </g>
                    <g>
                        <rect x="385.016" y="475.177" style="fill:#68B82E;" width="0.924" height="3.719"/>
                        <rect x="382.699" y="475.177" style="fill:#68B82E;" width="1.621" height="3.303"/>
                    </g>
                    <g>
                        <rect x="351.054" y="475.203" style="fill:#68B82E;" width="3.239" height="1.063"/>
                        <path style="fill:#68B82E;" d="M351.054,478.923v-1.859h2.876v1.859H351.054z M353.046,477.64h-1.107v0.715h1.107V477.64z"/>
                    </g>
                    <g>
                        <rect x="367.175" y="475.193" style="fill:#68B82E;" width="0.923" height="3.719"/>
                        <rect x="367.175" y="475.193" style="fill:#68B82E;" width="3.237" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="369.598" cy="477.988" rx="0.805" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="378.654" y="475.189" style="fill:#68B82E;" width="3.236" height="1.381"/>
                        <rect x="378.654" y="477.527" style="fill:#68B82E;" width="3.236" height="1.381"/>
                    </g>
                    <g>
                        <rect x="343.128" y="476.791" style="fill:#68B82E;" width="3.239" height="2.121"/>
                        <rect x="344.747" y="475.195" style="fill:#68B82E;" width="1.621" height="3.717"/>
                    </g>
                    <g>
                        <rect x="334.953" y="475.195" style="fill:#68B82E;" width="0.923" height="3.717"/>
                        <rect x="336.571" y="475.611" style="fill:#68B82E;" width="1.621" height="3.301"/>
                    </g>
                    <g>
                        <rect x="333.282" y="475.195" style="fill:#68B82E;" width="0.925" height="3.717"/>
                        <rect x="330.967" y="477.851" style="fill:#68B82E;" width="3.239" height="1.061"/>
                        <ellipse style="fill:#68B82E;" cx="331.783" cy="476.119" rx="0.805" ry="0.924"/>
                    </g>
                    <g>
                        <rect x="339" y="477.521" style="fill:#68B82E;" width="3.236" height="1.381"/>
                        <rect x="339" y="475.183" style="fill:#68B82E;" width="3.236" height="1.381"/>
                    </g>
                </g>
                <g>
                    <rect x="299.21" y="287.442" style="fill:#595757;" width="13.488" height="5.758"/>
                    <rect x="299.21" y="277.706" style="fill:#595757;" width="13.488" height="5.753"/>
                </g>
                <g>
                    <g>
                        <rect x="198.188" y="253.898" style="fill:#595757;" width="13.493" height="8.374"/>
                        <rect x="204.93" y="253.898" style="fill:#595757;" width="6.751" height="14.668"/>
                    </g>
                    <g>
                        <rect x="214.683" y="253.939" style="fill:#595757;" width="13.496" height="4.187"/>
                        <path style="fill:#595757;" d="M228.179,268.611v-7.335h-11.979v7.335H228.179z M219.884,263.55h4.614v2.824h-4.614V263.55z"/>
                    </g>
                    <g>
                        <rect x="247.71" y="260.197" style="fill:#595757;" width="13.491" height="8.374"/>
                        <rect x="247.71" y="253.902" style="fill:#595757;" width="6.751" height="14.668"/>
                    </g>
                    <g>
                        <rect x="291.422" y="253.902" style="fill:#595757;" width="3.849" height="14.668"/>
                        <rect x="281.775" y="255.546" style="fill:#595757;" width="6.745" height="13.024"/>
                    </g>
                    <g>
                        <rect x="231.215" y="264.343" style="fill:#595757;" width="13.493" height="4.187"/>
                        <path style="fill:#595757;" d="M231.215,253.858v7.336h11.979v-7.336H231.215z M239.512,258.919h-4.613v-2.823h4.613V258.919z"/>
                    </g>
                    <g>
                        <rect x="298.38" y="253.902" style="fill:#595757;" width="3.85" height="14.668"/>
                        <rect x="298.38" y="264.383" style="fill:#595757;" width="13.491" height="4.187"/>
                        <path style="fill:#595757;" d="M311.833,257.548c0,2.014-1.508,3.646-3.358,3.646c-1.852,0-3.351-1.632-3.351-3.646
                            c0-2.014,1.499-3.646,3.351-3.646C310.325,253.902,311.833,255.535,311.833,257.548z"/>
                    </g>
                    <g>
                        <rect x="264.917" y="263.079" style="fill:#595757;" width="13.488" height="5.447"/>
                        <rect x="264.917" y="253.858" style="fill:#595757;" width="13.488" height="5.449"/>
                    </g>
                    <g>
                        <rect x="217.157" y="277.681" style="fill:#595757;" width="13.493" height="8.842"/>
                        <rect x="217.157" y="277.681" style="fill:#595757;" width="6.748" height="15.491"/>
                    </g>
                    <g>
                        <rect x="260.866" y="277.681" style="fill:#595757;" width="3.852" height="15.491"/>
                        <rect x="251.221" y="277.681" style="fill:#595757;" width="6.748" height="13.758"/>
                    </g>
                    <g>
                        <rect x="200.659" y="277.721" style="fill:#595757;" width="13.496" height="4.423"/>
                        <path style="fill:#595757;" d="M200.659,293.22v-7.748h11.981v7.748H200.659z M208.954,287.874h-4.614v2.981h4.614V287.874z"/>
                    </g>
                    <g>
                        <rect x="267.824" y="277.681" style="fill:#595757;" width="3.847" height="15.491"/>
                        <rect x="267.824" y="277.681" style="fill:#595757;" width="13.491" height="4.419"/>
                        <path style="fill:#595757;" d="M281.271,289.322c0-2.128-1.497-3.85-3.349-3.85c-1.861,0-3.358,1.721-3.358,3.85
                            c0,2.128,1.497,3.849,3.358,3.849C279.774,293.171,281.271,291.45,281.271,289.322z"/>
                    </g>
                    <g>
                        <rect x="234.361" y="277.727" style="fill:#595757;" width="13.491" height="5.757"/>
                        <rect x="234.361" y="287.467" style="fill:#595757;" width="13.491" height="5.753"/>
                    </g>
                </g>
                <g>
                    <g>
                        <rect x="257.257" y="402.068" style="fill:#595757;" width="13.497" height="4.424"/>
                        <path style="fill:#595757;" d="M270.754,390.993v7.747h-11.987v-7.747H270.754z M262.454,396.341h4.611v-2.983h-4.611V396.341z"/>
                    </g>
                    <g>
                        <rect x="240.645" y="390.86" style="fill:#595757;" width="7.701" height="15.493"/>
                        <rect x="240.645" y="398.604" style="fill:#595757;" width="13.488" height="7.75"/>
                    </g>
                    <g>
                        <rect x="223.956" y="390.86" style="fill:#595757;" width="3.852" height="15.493"/>
                        <rect x="230.706" y="392.598" style="fill:#595757;" width="6.746" height="13.756"/>
                    </g>
                    <g>
                        <rect x="217.049" y="390.771" style="fill:#595757;" width="3.848" height="15.489"/>
                        <rect x="207.399" y="390.771" style="fill:#595757;" width="6.754" height="13.756"/>
                    </g>
                    <g>
                        <rect x="190.545" y="390.816" style="fill:#595757;" width="13.484" height="5.756"/>
                        <rect x="190.545" y="400.557" style="fill:#595757;" width="13.484" height="5.753"/>
                    </g>
                </g>
                <g>
                    <g>
                        <rect x="297.466" y="325.69" style="fill:#595757;" width="3.852" height="15.488"/>
                        <rect x="297.466" y="325.69" style="fill:#595757;" width="13.491" height="4.418"/>
                        <ellipse style="fill:#595757;" cx="307.561" cy="337.331" rx="3.354" ry="3.85"/>
                    </g>
                    <g>
                        <rect x="348.026" y="325.62" style="fill:#595757;" width="13.494" height="5.758"/>
                        <rect x="348.026" y="335.362" style="fill:#595757;" width="13.494" height="5.753"/>
                    </g>
                    <g>
                        <rect x="280.861" y="325.734" style="fill:#595757;" width="3.857" height="15.489"/>
                        <rect x="287.612" y="327.468" style="fill:#595757;" width="6.745" height="13.756"/>
                    </g>
                    <g>
                        <rect x="331.531" y="354.562" style="fill:#595757;" width="13.497" height="8.843"/>
                        <rect x="338.271" y="347.913" style="fill:#595757;" width="6.757" height="15.491"/>
                    </g>
                    <g>
                        <rect x="297.466" y="347.913" style="fill:#595757;" width="3.844" height="15.491"/>
                        <rect x="304.207" y="349.647" style="fill:#595757;" width="6.754" height="13.757"/>
                    </g>
                    <g>
                        <rect x="290.502" y="347.913" style="fill:#595757;" width="3.854" height="15.491"/>
                        <rect x="280.861" y="358.985" style="fill:#595757;" width="13.496" height="4.419"/>
                        <path style="fill:#595757;" d="M280.905,351.763c0,2.129,1.502,3.85,3.356,3.85c1.849,0,3.353-1.721,3.353-3.85
                            s-1.504-3.85-3.353-3.85C282.407,347.913,280.905,349.634,280.905,351.763z"/>
                    </g>
                    <g>
                        <rect x="314.332" y="357.606" style="fill:#595757;" width="13.483" height="5.753"/>
                        <rect x="314.332" y="347.864" style="fill:#595757;" width="13.483" height="5.754"/>
                    </g>
                </g>
                <g>
                    <polygon style="fill:#EFD0B5;" points="479.452,470.72 407.333,467.712 416.645,421.876 484.179,435.509 	"/>
                    <polygon style="fill:#EFD0B5;" points="400.876,463.083 382.673,372.306 404.583,368.825 428.324,440.707 	"/>
                    <g>
                        <path style="fill:#405388;" d="M527.62,457.972c0.736-15.516-11.24-28.686-26.756-29.42l-67.256-3.195l-2.666,56.178l67.254,3.193
                            C513.71,485.464,526.882,473.486,527.62,457.972z"/>
                        <path style="fill:#455B9D;" d="M524.911,453.072c0.736-15.516-11.242-28.686-26.754-29.422l-67.259-3.195l-2.666,56.176
                            l67.253,3.197C511.003,480.562,524.175,468.583,524.911,453.072z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path style="fill:#4E67B0;" d="M548.817,564.06c0,2.133-1.9,3.859-4.25,3.859H468.61c-2.348,0-4.248-1.727-4.248-3.859V412.933
                            c0-2.131,1.9-3.858,4.248-3.858h75.957c2.35,0,4.25,1.727,4.25,3.858V564.06z"/>
                        <path style="fill:#606AB0;" d="M544.616,567.001c0,2.131-1.898,3.857-4.248,3.857h-75.959c-2.348,0-4.246-1.727-4.246-3.857
                            V415.875c0-2.133,1.898-3.859,4.246-3.859h75.959c2.35,0,4.248,1.727,4.248,3.859V567.001z"/>
                        <path style="fill:#5F6FB4;" d="M534.36,557.773c0,2.336-1.711,4.227-3.818,4.227h-19.1c-2.107,0-3.818-1.891-3.818-4.227V428.142
                            c0-2.338,1.711-4.23,3.818-4.23h19.1c2.107,0,3.818,1.893,3.818,4.23V557.773z"/>
                    </g>
                    <g>
                        <rect x="446.886" y="334.407" style="fill:#FBD39C;" width="114.582" height="71.25"/>
                        <rect x="443.517" y="331.652" style="fill:#FBDABE;" width="108.808" height="67.655"/>
                        <rect x="473.808" y="370.776" style="fill:#FCE6D9;" width="66.385" height="16.291"/>
                        <g>
                            <rect x="450.675" y="320.248" style="fill:#FFFFFF;" width="24.131" height="47.134"/>
                            <rect x="450.675" y="327.806" style="fill:#3E3A39;" width="18.395" height="35.926"/>
                        </g>
                        <g>
                            <rect x="471.708" y="324.418" style="fill:#595757;" width="25.953" height="50.694"/>
                            <polygon style="fill:#595757;" points="432.71,279.492 432.71,341.446 519.442,341.446 519.442,375.937 566.558,375.937 
                                566.558,341.446 566.558,281.488 566.558,279.492 			"/>
                            <polygon style="fill:#7B7A7B;" points="435.858,272.752 435.858,334.704 522.587,334.704 522.587,369.196 569.702,369.196 
                                569.702,334.704 569.702,274.75 569.702,272.752 			"/>
                            <rect x="539.991" y="280.633" style="fill:#666464;" width="22.682" height="73.507"/>
                            <rect x="441.48" y="280.633" style="fill:#666464;" width="8.153" height="40.34"/>
                            <rect x="476.077" y="327.714" style="fill:#3E3A39;" width="26.703" height="41.482"/>
                            <rect x="482.808" y="283.887" style="fill:#666464;" width="5.945" height="63.817"/>
                        </g>
                    </g>
                </g>
                <g>
                    <polygon style="fill:#FBDABE;" points="486.327,469.875 425.97,509.464 406.824,466.791 469.647,438.505 	"/>
                    <polygon style="fill:#FBDABE;" points="418.027,509.464 350.329,446.304 366.102,430.707 427.287,475.283 	"/>
                    <path style="fill:#405388;" d="M525.159,437.253c-7.418-13.646-24.492-18.691-38.135-11.273l-59.157,32.16l26.862,49.412
                        l59.154-32.162C527.53,467.97,532.575,450.896,525.159,437.253z"/>
                    <path style="fill:#4E67B0;" d="M520.3,434.466c-7.418-13.645-24.49-18.689-38.135-11.273l-59.157,32.162l26.862,49.41l59.156-32.16
                        C522.671,465.185,527.72,448.111,520.3,434.466z"/>
                </g>
                <line style="fill:#139441;" x1="87.548" y1="514.43" x2="88.516" y2="516.37"/>
                </svg>

            
            </div>
        </div>



    </div>
</x-layout>