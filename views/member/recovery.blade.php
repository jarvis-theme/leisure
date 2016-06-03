			<div class="full_page">
				<h1>Member Area</h1>
				<div class="checkout_steps contact_page">
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
										{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
											<fieldset>
												<ul class="form-list">
													<li>
														<label class="required" for="login-email"><em>*</em>Password Baru</label>
														<div class="input-box">
															<input type="password" name="password" id="inputPassword" placeholder="password baru" required autofocus>
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
											<a class="fl_right" href="{{url('member')}}">&larr; Login</a>
											<button  class="button brown_btn" type="submit">Reset Password</button>
										</div>
									</div>
								</div>
							{{Form::close()}}
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
						<img src="images/side_promo_banner.jpg" alt="Info Promo">
					</div>
				</div> -->
			</div>