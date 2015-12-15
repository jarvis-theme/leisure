			<div class="full_page">
				<h1>Member Area</h1>
				<div class="checkout_steps contact_page">
					<ol id="checkoutSteps">
						<li class="section allow active" id="opc-login">
							<div class="step-title">
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
										<div class="buttons-set">
											<button onClick="parent.location='{{URL::to('member/create')}}'" class="button brown_btn" type="button">Daftar</button>
											<br><br>
										</div>
										<br><br>
									</div>
									<div class="col-2 form-login">
										<h3>Login</h3>
										<form class="form-horizontal" action="{{URL::to('member/login')}}" method="post">
											<fieldset>
												<h4>Sudah Terdaftar ?</h4>
												<p>Silahkan login:</p>
												<ul class="form-list">
													<li>
														<label class="required" for="login-email"><em>*</em>Email</label>
														<div class="input-box">
															<input type="email" name="email" id="inputEmail" placeholder="Email" required>
														</div>
													</li>
													<li>
														<label class="required" for="login-password"><em>*</em>Password</label>
														<div class="input-box">
															<input type="password" name="password" id="inputPassword" placeholder="Password" required>
														</div>
													</li>
												</ul>
												<br/><br/>
												<div class="buttons-set"> 
													<a class="fl_right" href="{{URL::to('member/forget-password')}}">Lupa password?</a>
													<button  class="button brown_btn" type="submit">Login</button>
												</div>
											</fieldset>
										</div>
									</div>
									<div class="col2-set">
										<div class="col-1"></div>
										<div class="col-2"></div>
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
				<!--CHECKOUT STEPS ENDS
				<div class="col_right">
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
					</div>-->
			</div>