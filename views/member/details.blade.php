	<div class="full_page">
		<h1>Member Area</h1>
		<ul id="myTab" class="nav nav-tabs">
			<li class="active"><a href="#history" data-toggle="tab">History Transaksi</a></li>
			<li><a href="#profil" data-toggle="tab">Profil</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane active" id="history">
			@if($setting->checkoutType==1)
				<table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
					<tr>
						<th>Tentang</th>
						<th class="align_center" width="6%"></th>
						<th class="align_left" width="25%">Detail Order</th>
						<th class="align_center" width="15%"></th>
					</tr>
					@foreach (list_order() as $item)
					<tr>
						<td class="align_left" width="44%">
							<a class="pr_name" href="#">ID: {{prefixOrder().$item->kodeOrder}}</a>
							<span class="pr_info">Tanggal Order: {{waktu($item->tanggalOrder)}}</span><br><br>
							<span class="price">Total: {{ price($item->total)}}</span><br><br>
							<span class="price">No Resi: {{ $item->noResi}}</span><br><br>
							<span class="price">STATUS: </span>

							@if($item->status==0)
							<span class="label label-warning">Pending</span>
							@elseif($item->status==1)
							<span class="label label-important">Konfirmasi diterima</span>
							@elseif($item->status==2)
							<span class="label label-info">Pembayaran diterima</span>
							@elseif($item->status==3)
							<span class="label label-success">Terkirim</span>
							@elseif($item->status==4)
							<span class="label label-default">Batal</span>
							@endif
							<!-- <span class="price oranje">BARANG TERKIRIM </span> -->
							<br><br>
						</td>
						<td class="align_center"><a href="#" class="edit"></a></td>
						<td class="align_left">
							<ul class="check_li">
								@foreach ($item->detailorder as $detail)
								<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
								@endforeach
							</ul>
						</td>
						@if($item->status==0)
						<td class="align_center vline"><a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="sc-button small blue" target="_self"> Konfirmasi Pembayaran </a></td>
						@endif
					</tr>
					@endforeach
				</table>
				<div>{{list_order()->links()}}</div>
			@elseif($setting->checkoutType==2)
				<table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
					<tr>
						<th>Detail Inquiry</th>
						<th class="align_center" width="6%"></th>
						<th class="align_left" width="25%">Detail Produk</th>
						<th class="align_center" width="15%"></th>
					</tr>
					@foreach ($inquiry as $item)
					<tr>
						<td class="align_left" width="44%">
							<a class="pr_name" href="#">ID: {{prefixOrder().$item->kodeInquiry}}</a>
							<span class="pr_info">Tanggal Pesan: {{waktu($item->created_at)}}</span><br><br>
							<span class="price">STATUS: </span>
							@if($item->status==0)
							<span class="label label-warning">Pending</span>
							@elseif($item->status==1)
							<span class="label label-important">Inquiry diterima</span>
							@elseif($item->status==2)
							<span class="label label-default">Batal</span>
							@endif
						</td>
						<td class="align_center"><a href="#" class="edit"></a></td>
						<td class="align_left">
							<ul class="check_li">
							@foreach ($item->detailInquiry as $detail)
								<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
							@endforeach
							</ul>
						</td>
					</tr>
					@endforeach
					@if ($inquiry->count()==0)
					<tr>
						<td colspan="2">Inquiry anda masih kosong.</td>
					</tr>
					@endif
				</table>
			@elseif($setting->checkoutType==3)
				<table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
					<tr>
						<th>Tentang</th>
						<th class="align_center" width="6%"></th>
						<th class="align_left" width="25%">Detail Pre-order</th>
						<th class="align_center" width="15%"></th>
					</tr>
					@foreach (list_order() as $item)
					<tr>
						<td class="align_left" width="44%">
							<a class="pr_name" href="#">ID: {{prefixOrder().$item->kodePreorder}}</a>
							<span class="pr_info">Tanggal Order: {{waktu($item->tanggalPreorder)}}</span><br><br>
							<span class="price">Total: {{ price($item->total)}}</span><br><br>
							<span class="price">No Resi: {{ $item->noResi}}</span><br><br>
							<span class="price">STATUS: </span>
							@if($item->status==0)
							<span class="label label-warning">Pending</span>
							@elseif($item->status==1)
							<span class="label label-important">Konfirmasi DP diterima</span>
							@elseif($item->status==2)
							<span class="label label-info">DP terbayar</span>
							@elseif($item->status==3)
							<span class="label label-info">Menunggu pelunasan</span>
							@elseif($item->status==4)
							<span class="label label-info">Pembayaran lunas</span>
							@elseif($item->status==5)
							<span class="label label-success">Terkirim</span>
							@elseif($item->status==6)
							<span class="label label-default">Batal</span>
							@elseif($item->status==7)
							<span class="label label-info">Konfirmasi Pelunasan diterima</span>
							@endif
							<!-- <span class="price oranje">BARANG TERKIRIM </span> -->
							<br><br>
						</td>
						<td class="align_center"><a href="#" class="edit"></a></td>
						<td class="align_left">
							<ul class="check_li">
								<li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}</li>
							</ul>
						</td>
						@if($item->status < 4)	
						<td class="align_center vline">
							<a href="{{URL::to('konfirmasipreorder/'.$item->id)}}" class="sc-button small blue" target="_self"> Konfirmasi Pembayaran </a>
						</td>
						@endif	
					</tr>
					@endforeach	
				</table>
			@endif	
			</div>

			<div class="tab-pane" id="profil">
				<div id="checkout-step-login">
					{{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
						<div class="col2-set">
							<div class="col-1">
								<fieldset>
									<ul class="form-list">
										<li>
											<label class="required" for="login-email">Nama</label>
											<div class="input-box">
												<input type="text" name='nama' value='{{$user->nama}}'  class="input-text">
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Email</label>
											<div class="input-box">
												<input type="text" name='email' value='{{$user->email}}' class="input-text">
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Telp / HP</label>
											<div class="input-box">
												{{Form::input('text', 'telp', $user->telp, array('class'=>'span4'))}}
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Note</label>
											<div class="input-box">
												<textarea class="note" name='catatan'>{{$user->catatan}}</textarea>
											</div>
										</li>
									</ul><br/>								
								</fieldset>
							</div>
							<div class="col-2">
								<fieldset>
									<ul class="form-list">
										<li>
											<label class="required" for="login-email">Alamat</label>
											<div class="input-box">
												<textarea name='alamat'>{{$user->alamat}}</textarea>
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Negara</label>
											<div class="input-box">
												{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara'))}}
											</div>
										</li>
										<li>
											<div class="clear"></div>
											<label class="required" for="login-password">Provinsi</label>
											<div class="input-box">
												{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi'))}}
											</div>
										</li>
										<li>
											<div class="clear"></div>
											<label class="required" for="login-password">Kota</label>
											<div class="input-box">
												{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota'))}}
											</div>
										</li>
										<li>
											<div class="clear"></div>
											<label class="required" for="login-password">Kodepos</label>
											<div class="input-box">
												<input type="text" name='kodepos' value='{{$user->kodepos}}' class="input-text">
											</div>
										</li>
									</ul>
								</fieldset>
							</div>
						</div>
						<div class="clear"></div>
						<div class="input-box action_buttonbar">
							<h4>Ubah Password?</h4>
							<i class="oranje">Biarkan kosong jika tidak ingin mengubah password</i><br><br>
							<div class="clear"></div>
							
							<div class="col-1">
								<fieldset>
									<ul class="form-list">
										<li>
											<label class="required" for="login-email">Password Lama</label>
											<div class="input-box">
												<input type="password" value="" name='oldpassword' class="input-text">
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Password Baru</label>
											<div class="input-box">
												<input type="password" name='password' class="input-text">
											</div>
										</li>
										<li>
											<label class="required" for="login-password">Konfirmasi Password Baru</label>
											<div class="input-box">
												<input type="password" name='password_confirmation' class="input-text">
											</div>
										</li>
									</ul><br/>									
								</fieldset>
							</div>
						</div>

						<div class="clear"></div><br>

						<button  class="button brown_btn" type="submit">Update</button><br/>
					{{Form::close()}}
				</div>
			</div>
		</div>
