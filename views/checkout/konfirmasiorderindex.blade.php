@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>
</div>
@endif

            <div class="full_page">
                <h1>Konfirmasi</h1>
                <!--CHECKOUT STEPS STARTS-->
                <div class="checkout_steps" style="width: 100%;">
                    @if($checkouttype!=2)
                    <ol id="checkoutSteps">
                        <li class="active">
                            <div class="step-title">
                                <h2>Konfirmasi Order</h2>
                            </div>
                            <div id="checkout-step-login">
                                <div class="action_buttonbar">
                                    <p>Silakan masukkan kode order yang mau anda cari!</p>
                                    @if($checkouttype==1)
                                    {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
                                    @elseif($checkouttype==3)
                                    {{Form::open(array('url'=>'konfirmasipreorder','method'=>'post','class'=>'form-inline'))}}
                                    @endif

                                    <input type="text" class="input-large" placeholder="Kode Order" name='kodeorder'>
                                    <button type="submit" class="btn theme"><i class="icon-check"></i> Cari Kode</button>
                                    {{Form::close()}}
                                </div><br>
                            </div>
                        </li>
                    </ol>
                    @else
                    <p>Anda tidak perlu melakukan konfirmasi untuk inquiry</p>
                    @endif                  
                </div>

                <!--CHECKOUT STEPS ENDS-->
                <!-- <div class="col_right">
                    <div class="right_promo">
                    <img src="images/side_promo_banner.jpg">
                    </div>
                </div> -->
            </div>