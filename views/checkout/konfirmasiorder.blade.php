@if($errors->all())
<div class="error" id='message' style='display:none'>
	We encountered the following errors:
	<br>
    @foreach($errors->all() as $message)
    {{ $message }}<br>
    @endforeach
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, konfirmasi anda sudah terkirim.</p>
</div>
@endif

@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif

            <div class="full_page">
                <h1>Konfirmasi</h1>
                <div class="">
	            	<center>
	                	<table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
				            <tr>
				             	<th align="center" >Kode Order</th>
								<th align="center" >Tanggal Order</th>
								<th align="center" >Order</th>
								<th align="center" >Jumlah</th>
								<th align="center" >Jumlah yg belum di bayar</th>
								<th align="center" >No Resi</th>
								<th align="center" >Status</th>
				            </tr>
				            <tr>
								<td>
									@if($checkouttype==1)
										{{prefixOrder().$order->kodeOrder}}
									@else
										{{prefixOrder().$order->kodePreorder}}
									@endif
								</td>
								<td>
									@if($checkouttype==1)
										{{waktu($order->tanggalOrder)}}
									@else
										{{waktu($order->tanggalPreorder)}}
									@endif
								</td>
								<td>
									<ul>
										<li>
											@if ($checkouttype==1)
												@foreach ($order->detailorder as $detail)
													<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
												@endforeach
											@else
												{{$order->preorderdata->produk->nama}} 
												({{$order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'')}})
												 - {{$order->jumlah}}
											@endif
										</li>
									</ul>
								</td>
								<td>{{price($order->total)}}</td>
								<td class="align_center vline">
									@if($checkouttype==1)
									- {{price($order->total)}}
									
									@else 
										@if($order->status < 2)
										- {{price($order->total)}}								
										@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
										- {{price($order->total - $order->dp)}}
										@else
										0
										@endif
									@endif
								</td>
								<td class="align_center vline">
									{{$order->noResi}}
								</td>
								<td class="align_center vline">
									@if($checkouttype==1)
										@if($order->status==0)
										<span class="label label-warning">Pending</span>
										@elseif($order->status==1)
										<span class="label label-important">Konfirmasi diterima</span>
										@elseif($order->status==2)
										<span class="label label-info">Pembayaran diterima</span>
										@elseif($order->status==3)
										<span class="label label-success">Terkirim</span>
										@elseif($order->status==4)
										<span class="label label-default">Batal</span>
										@endif
									@else 
										@if($order->status==0)
										<span class="label label-warning">Pending</span>
										@elseif($order->status==1)
										<span class="label label-important">Konfirmasi DP diterima</span>
										@elseif($order->status==2)
										<span class="label label-info">DP terbayar</span>
										@elseif($order->status==3)
										<span class="label label-info">Menunggu pelunasan</span>
										@elseif($order->status==4)
										<span class="label label-info">Pembayaran lunas</span>
										@elseif($order->status==5)
										<span class="label label-success">Terkirim</span>
										@elseif($order->status==6)
										<span class="label label-default">Batal</span>
										@elseif($order->status==7)
										<span class="label label-info">Konfirmasi Pelunasan diterima</span>
										@endif
									@endif
								</td>
				            </tr>
				        </table>
				    </center>
			    </div>
			    <br><br>

                <!--CHECKOUT STEPS STARTS-->
                <div class="checkout_steps" style="width: 100%;">
                    <ol id="checkoutSteps">
                        <li class="active">
                            <div class="step-title">
                                <h2>Konfirmasi Form</h2>
                            </div>
                            <div id="checkout-step-login" style="width: 96.3%;">
                                <div class="action_buttonbar">
						            <div class="well">
						            	@if($checkouttype==1)
						            	{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}

						            	@else
						            	{{Form::open(array('url'=> 'konfirmasipreorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}	
						            	@endif
						            	
										<div class="control-group">
											<label class="control-label" for="inputEmail" > Nama Pengirim</label>
											<div class="controls">
											  	<input class="span6" type="text" name='nama' value='{{Input::old("nama")}}' required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail"> No Rekening</label>
											<div class="controls">
											  	<input type="text" class="span6" name='noRekPengirim' value='{{Input::old("noRekPengirim")}}' required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail"> Rekening Tujuan</label>
											<div class="controls" style="width: 40%;">
												<select name='bank' style="width: 100%;">
													<option value=''>-- Pilih Bank Tujuan --</option>
													@foreach ($banktrans as $bank)
														<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
													@endforeach
												</select>
											</div>
										</div>
										<br><br>
										<div class="control-group">
											<label class="control-label" for="inputEmail" style=""> Jumlah</label>
											<div class="controls">
												@if($checkouttype==1)
													<input class="span6" type="text" name='jumlah' value='{{$order->total}}' required>
								            	@else
								            		@if($order->status < 2)
													<input class="span6" type="text" name='jumlah' value='{{$order->dp}}' required>
													
													@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
													<input class="span6" type="text" name='jumlah' value='{{$order->total - $order->dp}}' required>
													@endif
								            	@endif
											</div>
										</div>											

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn theme"><i class="icon-check"></i> Konfirmasi Order</button>
											</div>
										</div>
										{{Form::close()}}
                      	        	</div><br>
                        	    </div>
                    	    </div>
                    	</li>
                	</ol>
            	</div>
            	<!--CHECKOUT STEPS ENDS-->

                <!-- <div class="col_right">
	                <div class="right_promo">
	                	@foreach(vertical_banner() as $banners)
	                    <img src="{{url(banner_image_url($banners))}}">
	                    @endforeach
	                </div>
                </div> -->
            </div>