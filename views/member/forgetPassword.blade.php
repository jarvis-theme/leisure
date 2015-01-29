@if(Session::has('errorlogin'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email atau password anda salah.</p>
    </div>
@endif
@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}!!!
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif
            <div class="full_page">
                <h1>Member Area</h1>
                <!--CHECKOUT STEPS STARTS-->
                <div class="checkout_steps" style="width: 100%;">
                    <ol id="checkoutSteps">
                        <li class="section allow active" id="opc-login">
                            <div class="step-title" style="width: 96%;"> <span class="number">1</span>
                                <h2>Lupa Password</h2>
                            </div>
                            <div id="checkout-step-login">
                                <div class="col2-set">
                                    <div class="col-1">
                                        <h3>Pendaftaran</h3>
                                        <p>Daftar untuk mendapatkan keuntungan :</p>
                                        <ul class="ul">
                                            <li>Cepat dan Mudah dalam bertransaksi</li>
                                            <li>Mudah untuk mengetahui Order Histori dan Status</li>
                                        </ul>
                                    </div>
                                    <div class="col-2">
                                        <h3>Lupa Password</h3>
                                        <form class="form-horizontal" action="{{URL::to('member/forgetpassword')}}" method="post">
                                            <fieldset>
                                                <ul class="form-list">
                                                    <li>
                                                        <label class="required" for="login-email"><em>*</em>Email Address</label>
                                                        <div class="input-box">
                                                            <input type="email" name="recoveryEmail" id="inputEmail" placeholder="Email" required>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <br/>
                                                <br/>
                                            </fieldset>
                                    </div>
                                </div>
                                <br></br>
                                <div class="col2-set">
                                    <div class="col-1">
                                        <div class="buttons-set">
                                            <button onClick="parent.location='{{URL::to('member/create')}}'" class="button brown_btn" type="button">Daftar</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="buttons-set">
                                            <!-- <button onClick="parent.location='{{URL::to('member')}}'" class="button brown_btn" type="button">&larr; Login</button> -->
                                            <a class="fl_right" href="{{URL::to('member/')}}">&larr; Login</a>
                                            <button  class="button brown_btn" type="submit">Reset Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="step-title"> <span class="number">2</span>
                                <h2>Billing Information</h2>
                            </div>
                        </li>
                        <li>
                            <div class="step-title"> <span class="number">3</span>
                                <h2>Shipping Information</h2>
                            </div>
                        </li>
                        <li>
                            <div class="step-title"> <span class="number">4</span>
                                <h2>Shipping Method</h2>
                            </div>
                        </li>
                        <li>
                            <div class="step-title"> <span class="number">5</span>
                                <h2>Order Preview</h2>
                            </div>
                        </li> -->
                    </ol>
                </div>
                <!--CHECKOUT STEPS ENDS-->
                <!-- <div class="col_right">
                    <div class="block-progress">
                        <div class="block-title">Your Checkout Progress</div>
                            <ul>
                                <li>Billing Address</li>
                                <li>Shipping Address</li>
                                <li>Shipping Method</li>
                                <li>Payment Method</li>
                            </ul>
                    </div>
                    <div class="right_promo">
                    <img src="images/side_promo_banner.jpg">
                    </div>
                </div> -->
            </div>