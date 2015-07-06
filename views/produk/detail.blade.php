<ul class="breadcrumb">
	{{$breadcrumb}}
</ul>
<!--PRODUCT DETAIL STARTS-->
<div id="product_detail">
	<!--Product Left Starts-->
	<div class="product_leftcol" style="text-align: center;">
		<div id="flexslider-product">
			<span class="slides">
			<a href="{{url(product_image_url($produk->gambar1,'large'))}}">
				{{HTML::image(product_image_url($produk->gambar1,'large'))}} <span class="pr_info"></span>
			</a>
			</span>
		</div>
		<ul id="flexslider-product" class="pr_gallery">
			@if($produk->gambar2)
			<li class="slides"><a href="{{url(product_image_url($produk->gambar2,'large'))}}">{{HTML::image(product_image_url($produk->gambar2,'thumb'), 'gambar2', array('width' => '95', 'heigth' => '95'))}}</a></li>
			@endif
			@if($produk->gambar3)
			<li class="slides"><a href="{{url(product_image_url($produk->gambar3,'large'))}}">{{HTML::image(product_image_url($produk->gambar3,'thumb'), 'gambar3', array('width' => '95', 'heigth' => '95'))}}</a></li>
			@endif
			@if($produk->gambar4)
			<li class="slides"><a href="{{url(product_image_url($produk->gambar4,'large'))}}">{{HTML::image(product_image_url($produk->gambar4,'thumb'), 'gambar4', array('width' => '95', 'heigth' => '95'))}}</a></li>
			@endif
		</ul>
	</div>
	<!--Product Left Ends-->
	<!--Product Right Starts-->
	<div class="product_rightcol"> <!-- <small class="pr_type">{{$produk->nama}}</small> -->
		<h1>{{$produk->nama}}</h1>
		<p class="short_dc">{{$produk->deskripsi}}</p>
		@if(@$po)
			<br>
			<div>
				<p>
					Tanggal mulai pemesanan : {{waktuDbBalik($po->tanggalmulai)}}<br>
					@if($po->kuota=='0')
						Tanggal akhir pemesanan : {{waktuDbBalik($po->tanggalakhir)}}
					@elseif($po->tanggalakhir=='0000-00-00')
						Kuota minimum proses pre-order : {{$po->kuota}}
					@endif
					<br>
					DP : {{$po->dp}}
				</p>
			</div>
		@endif
		<form action="#" id='addorder'>
		@if($setting->checkoutType!=2)
			<div class="pr_price">
				<big>{{ price($produk->hargaJual) }}</big>
				@if($produk->hargaCoret != 0)
				<small>{{ price($produk->hargaCoret) }}</small>
				@endif
			</div>
		@endif
		@if(@$po)
			@if($availablepo=='1')
				<div class="size_info">
					<div class="size_sel">
						<label>Jumlah :</label>
						<input type="text" class="qty" name='qty' value="1">
					</div>
					@if($opsiproduk->count()>0)
					<div class="" style="width:52%">
						<label>Opsi :</label>
						<select style="width:100%">
							<option value=""> Pilih Opsi </option>
							@foreach ($opsiproduk as $key => $opsi)
							<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
								{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
							</option>
							@endforeach
						</select>
					</div>
					@endif
				</div>
				<div class="add_to_buttons">
					<!-- <div class="add_cart"><input type='submit' class="add_cart" value='Add to Cart'></div> -->
					<button type="submit" class="add_cart" value=''>Pre-order</button>
				</div>
			@else
				<span>Belum memasuki periode pemesanan</span>
			@endif
		@elseif($setting->checkoutType==3 && !$po)
			<span>Belum memasuki periode pemesanan</span>
		@else
			<div class="size_info">
				<div class="size_sel">
					<label>Jumlah :</label>
					<input type="text" class="qty" name='qty' value="1">
				</div>
				@if($opsiproduk->count()>0)
				<div style="width:52%">
					<label>Opsi :</label>
					<select style="width:100%">
						<option value=""> Pilih Opsi </option>
						@foreach ($opsiproduk as $key => $opsi)
						<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
							{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
						</option>
						@endforeach
					</select>
				</div>
				@endif
			</div>
			<div class="add_to_buttons">
				<!-- <div class="add_cart"><input type='submit' class="add_cart" value='Add to Cart'></div> -->
				<button type="submit" class="add_cart" value=''>Masukan ke Keranjang</button>
			</div>
		@endif
		</form>
		<div class="product_overview">
            {{sosialShare(url(product_url($produk)))}}
		</div>
		<div class="product_overview">
			{{pluginTrustklik()}}
		</div>
	</div>
	<!--Product Right Ends-->
</div>
<!--PRODUCT DETAIL ENDS-->

@if(count(other_product($produk)) > 0)
<!--Product List Starts-->
<div class="products_list products_slider">
	<h2 class="sub_title" id="recommend">Rekomendasi Lainnya</h2>
	<ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
		@foreach(other_product($produk) as $myproduk)
		<li style="position:relative;">
			@if(is_outstok($myproduk))
			{{is_outstok($myproduk)}}
			@else
				@if(is_terlaris($myproduk))
					{{is_terlaris($myproduk)}}
				@elseif(is_produkbaru($myproduk))
					{{is_produkbaru($myproduk)}}
				@endif
			@endif
			<a href="{{slugProduk($myproduk)}}" class="product_image">
				{{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama)}}
			</a>
			<div class="product_info" style="min-height: 83px;">
				<h3 style="height: 28px;"><a href="{{url(product_url($myproduk))}}">{{$myproduk->nama}}</a></h3>
				<small>{{short_description($myproduk->deskripsi,100)}}</small>
			</div>
				
			@if($setting->checkoutType!=2)
			<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
				<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button">
					<span class="pr_price">&nbsp;{{price($myproduk->hargaJual,$matauang)}}</span>
					<span class="pr_add">Lihat</span>
				</button>
			</div>
			@endif
		</li>
		@endforeach
	</ul>
</div>
<!--Product List Ends-->
@endif