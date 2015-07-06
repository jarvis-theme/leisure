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
@if($errors->all())
<div class="error" id='message' style='display:none'>
	@foreach($errors->all() as $message)
	<p>{{ $message }}</p>
	@endforeach
</div>  
@endif
			<div class="full_page">
				<h1>Member Area</h1>
				<!--CHECKOUT STEPS STARTS-->
				<div class="checkout_steps" style="width: 100%">
					<ol id="checkoutSteps">
						<li class="section allow active" id="opc-login">
							<div class="step-title">
								<!-- <span class="number">1</span> -->
								<h2>Login Area</h2>
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
										<h3>Masukan Password Baru Anda</h3>
										<!-- <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post"> -->
										{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
											<fieldset>
												<ul class="form-list">
													<li>
														<label class="required" for="login-email"><em>*</em>Password Baru</label>
														<div class="input-box">
															<input type="password" name="password" id="inputPassword" placeholder="password baru" required>
														</div>
													</li>
													<li>
														<label class="required" for="login-email"><em>*</em>Ulangi Password Baru</label>
														<div class="input-box">
															<input type="password" name="password_confirmation" id="inputPassword" placeholder="password baru" required>
														</div>
													</li>
												</ul>
												<br/><br/>
											</fieldset>
									</div>
								</div>
								<br></br>
								<div class="col2-set">
									<div class="col-1">
										<div class="buttons-set">
											<button onClick="parent.location='{{url('member/create')}}'" class="button brown_btn" type="button">Continue</button>
										</div>
									</div>
									<div class="col-2">
										<div class="buttons-set">
											<!-- <button onClick="parent.location='{{url('member')}}'" class="button brown_btn" type="button">&larr; Login</button> -->
											<a class="fl_right" href="{{url('member/forgetPassword')}}">&larr; Login</a>
											<button  class="button brown_btn" type="submit">Reset Password</button>
										</div>
									</div>
								</div>
							{{Form::close()}}
							<!-- </form> -->
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