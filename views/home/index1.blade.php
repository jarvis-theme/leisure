<!--Product List Ends-->
<div class="section_container">
	<!--Mid Section Starts-->
	<section>
		<!--SIDE NAV STARTS-->
		<div id="side_nav">
			<div class="sideNavCategories">
				<ul style="border-bottom: solid 1px;border-bottom-color: #f38256; border-top: 0px;">
					{{pluginSidePowerup()}}
					<li class="header">Banner</li>
					@foreach(getBanner(1) as $banner)
					<a target="_blank" href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}"/></a>
					@endforeach
				</ul>
				<ul style="border-bottom: solid 1px; border-bottom-color: #f38256; border-top: 0px;">
					<li class="header">Hubungi Kami</li>
					@if($shop->ym)
					{{ymyahoo($shop->ym)}}
					<br>
					@endif
					@if($shop->telepon)
					<span style="line-height: 2;">Telpon : <b>{{$shop->telepon}}</b></span><br>
					@endif
					@if($shop->hp)
					<span style="line-height: 2;">SMS : <b>{{$shop->hp}}</b></i></span><br>
					@endif
					@if($shop->bb)
					<span style="line-height: 2;">BBM : <b>{{$shop->bb}}</b></span><br>
					@endif
				</ul>
				<ul style="border-bottom: solid 1px;border-bottom-color: #f38256; border-top: 0px;">
					<li class="header">Testimonial</li>
					<span>
						<ul>
							@foreach ($testimo as $items)
							<li>
								<i>"{{$items->isi}}"</i><br />
								<small style="line-height: 2;">oleh <b>{{$items->nama}}</b></small>
							</li><br><br>
							@endforeach
						</ul>
					</span>
					<b style="float:right;"><a style="text-decoration: none" href="{{URL::to('testimoni')}}">Lainnya..</a></b>
				</ul>
			</div>
		</div>
		<!--SIDE NAV ENDS-->
		<!--MAIN CONTENT STARTS-->
		<div id="main_content">
			<div class="category_banner"></div>
			<ul class="breadcrumb">
				<li><a href="{{URL::to('produk')}}">Koleksi Produk Kami</a></li>
			</ul>
			@if(count($newproduk) > 0)
			<!--Product List Starts-->
			<div class="toolbar" style="text-align: center;">
				<span style="font-weight: bold;">NEW</span>
			</div>
			<div class="products_list products_slider">
				<ul>
					@foreach($newproduk as $key=>$myproduk)
						@if($key<3)
						<li style="position:relative;">
							{{is_terlaris($myproduk, $kiri=1)}}
							{{is_produkbaru($myproduk, $kiri=1)}}
							{{is_outstok($myproduk, $kiri=1)}}
							<a href="{{slugProduk($myproduk)}}" class="product_image">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'max-height: 217px;'))}}</a>
							<div class="product_info">
								<h3><a href="{{slugProduk($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
								<small>{{shortDescription($myproduk->deskripsi,40)}}</small>
							</div>
							@if($setting->checkoutType==1)
							<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
								<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button"><span style="margin-left: -10px;" class="pr_price">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
							</div>
							@endif
						@endif
						</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Ends-->
			@endif
			@if(count($featured) > 0)
			<!--Product List Starts-->
			<div class="toolbar" style="text-align: center;">
				<span style="font-weight: bold;">FEATURED</span>
			</div>
			<div class="products_list products_slider">
				<ul>
					@foreach($featured as $myproduk)
					<li style="position:relative;">
						{{is_terlaris($myproduk, $kiri=1)}}
						{{is_produkbaru($myproduk, $kiri=1)}}
						{{is_outstok($myproduk, $kiri=1)}}
						<a href="{{slugProduk($myproduk)}}" class="product_image">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'max-height: 217px;'))}}</a>
						<div class="product_info">
							<h3><a href="{{slugProduk($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
							<small>{{shortDescription($myproduk->deskripsi,40)}}</small>
						</div>
						@if($setting->checkoutType==1)
						<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
							<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button"><span style="margin-left: -10px;" class="pr_price">{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
						</div>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Ends-->
			@endif
		</div>
		<!--MAIN CONTENT ENDS-->
	</section>
<!--Mid Section Ends-->
</div>