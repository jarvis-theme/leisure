<!--Product List Ends-->
<div class="section_container">
	<!--Mid Section Starts-->
	<section>
		<!--SIDE NAV STARTS-->
		<div id="side_nav">
			<div class="sideNavCategories">
				@if(pluginSidePowerUp())
				<ul>
					{{pluginSidePowerup()}}
				</ul>
				@endif
				<ul>
					<li class="header">Banner</li>
					@foreach(vertical_banner() as $banner)
					<a target="_blank" href="{{ $banner->url }}">
						<img src="{{ banner_image_url($banner->gambar) }}"/>
					</a>
					@endforeach
				</ul>
				<ul>
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
				<ul>
					<li class="header">Testimonial</li>
					<span>
						<ul>
							@foreach (list_testimonial() as $items)
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
			{{--*/ $newproducts = new_product() /*--}}
			@if(count($newproducts) > 0)
			<!--Product List Starts-->
			<div class="toolbar" style="text-align: center;">
				<span style="font-weight: bold;">NEW</span>
			</div>
			<div class="products_list products_slider">
				<ul>
					@foreach($newproducts as $key=>$myproduk)
						@if($key<3)
						<li style="position:relative;">
							{{is_terlaris($myproduk, $kiri=1)}}
							{{is_produkbaru($myproduk, $kiri=1)}}
							{{is_outstok($myproduk, $kiri=1)}}
							<a href="{{product_url($myproduk)}}" class="product_image">
								{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('style' => 'max-height: 217px;'))}}
							</a>
							<div class="product_info" style="min-height: 83px;">
								<h3><a href="{{product_url($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
								<small>{{short_description($myproduk->deskripsi,40)}}</small>
							</div>
							@if($setting->checkoutType==1)
							<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
								<button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="" type="button">
									<span class="pr_price">{{price($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span>
									</button>
							</div>
							@endif
						@endif
						</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Ends-->
			@endif
			@if(count(featured_product()) > 0)
			<!--Product List Starts-->
			<div class="toolbar" style="text-align: center;">
				<span style="font-weight: bold;">FEATURED</span>
			</div>
			<div class="products_list products_slider">
				<ul>
					@foreach(featured_product() as $myproduk)
					<li style="position:relative;">
						{{is_terlaris($myproduk, $kiri=1)}}
						{{is_produkbaru($myproduk, $kiri=1)}}
						{{is_outstok($myproduk, $kiri=1)}}
						<a href="{{product_url($myproduk)}}" class="product_image">
							{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('style' => 'max-height: 217px;'))}}
						</a>
						<div class="product_info" style="min-height: 83px;">
							<h3><a href="{{product_url($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
							<small>{{short_description($myproduk->deskripsi,65)}}</small>
						</div>
						@if($setting->checkoutType==1)
						<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
							<button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="" type="button"><span class="pr_price">{{price($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
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