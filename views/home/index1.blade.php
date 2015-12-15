<div class="section_container">
	<section>
		<div id="side_nav">
			<div class="sideNavCategories">
				@if(pluginSidePowerUp())
				<ul>{{pluginSidePowerup()}}</ul>
				@endif
				<ul>
					<!-- <li class="header">Banner</li> -->
					@foreach(vertical_banner() as $banner)
					<a target="_blank" href="{{ $banner->url }}">
						<img src="{{ banner_image_url($banner->gambar) }}" alt="Info Promo" />
					</a><br>
					@endforeach
				</ul>
				<ul>
					<li class="header">Hubungi Kami</li>
					@if($shop->ym)
					{{ymyahoo($shop->ym)}}
					<br>
					@endif
					@if($shop->telepon)
					<span class="side-info">Telpon : <b>{{$shop->telepon}}</b></span><br>
					@endif
					@if($shop->hp)
					<span class="side-info">SMS : <b>{{$shop->hp}}</b></i></span><br>
					@endif
					@if($shop->bb)
					<span class="side-info">BBM : <b>{{$shop->bb}}</b></span><br>
					@endif
				</ul>
				<ul>
					<li class="header">Testimonial</li>
					<span>
						<ul>
							@foreach (list_testimonial() as $items)
							<li>
								<i>"{{$items->isi}}"</i><br />
								<small class="side-info">oleh <b>{{$items->nama}}</b></small>
							</li><br><br>
							@endforeach
						</ul>
					</span>
					<b><a href="{{URL::to('testimoni')}}">Selengkapnya..</a></b>
				</ul>
			</div>
		</div>

		<div id="main_content">
			<div class="category_banner"></div>
			<ul class="breadcrumb">
				<li><a href="{{URL::to('produk')}}">Koleksi Produk Kami</a></li>
			</ul>
			@if(count(new_product()) > 0)
			<div class="toolbar"><span>Produk Terbaru</span></div>
			<div class="products_list products_slider">
				<ul>
					@foreach(new_product() as $key=>$myproduk)
						@if($key < 3)
						<li class="home-item">
							@if(is_outstok($myproduk))
							{{is_outstok($myproduk, $kiri=1)}}
							@elseif(is_terlaris($myproduk))
							{{is_terlaris($myproduk, $kiri=1)}}
							@elseif(is_produkbaru($myproduk))
							{{is_produkbaru($myproduk, $kiri=1)}}
							@endif
							<a href="{{product_url($myproduk)}}" class="product_image">
								{{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama)}}
							</a>
							<div class="product_info">
								<h3><a href="{{product_url($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
								<small>{{short_description($myproduk->deskripsi,40)}}</small>
							</div>
							@if($setting->checkoutType==1)
							<div class="price_info">
								<button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="Lihat" type="button">
									<span class="pr_price">{{price($myproduk->hargaJual)}}</span><span class="pr_add">Lihat</span>
								</button>
							</div>
							@endif
						@endif
						</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(count(home_product()) > 0)
			<div class="toolbar"><span>Produk Kami</span></div>
			<div class="products_list products_slider">
				<ul>
					{{-- */ $i = 1 /* --}}
					@foreach(home_product() as $myproduk)
					<li class="home-item">
						@if(is_outstok($myproduk))
						{{is_outstok($myproduk, $kiri=1)}}
						@elseif(is_terlaris($myproduk))
						{{is_terlaris($myproduk, $kiri=1)}}
						@elseif(is_produkbaru($myproduk))
						{{is_produkbaru($myproduk, $kiri=1)}}
						@endif

						<a href="{{product_url($myproduk)}}" class="product_image">
							{{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama)}}
						</a>
						<div class="product_info">
							<h3><a href="{{product_url($myproduk)}}">{{strtoupper(shortName($myproduk->nama,24))}}</a></h3>
							<small>{{short_description($myproduk->deskripsi,65)}}</small>
						</div>
						@if($setting->checkoutType==1)
						<div class="price_info">
							<button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="Lihat" type="button"><span class="pr_price">{{price($myproduk->hargaJual)}}</span><span class="pr_add">Lihat</span></button>
						</div>
						@endif
					</li>
					@if($i % 3 == 0)
					<div class="clr"></div>
					@endif
					{{-- */ $i++ /* --}}
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</section>
</div>