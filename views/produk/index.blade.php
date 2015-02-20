<div class="section_container">
	<!--Mid Section Starts-->
	<section>
		<!--SIDE NAV STARTS-->
		<div id="side_nav">
			<div class="sideNavCategories">
				<h1>{{$name}}</h1>
				<ul class="category departments">
					<li class="header">Kategori</li>
					@foreach($kategori as $key=>$menu)
					<li class="menu_cont">
						@if($menu->parent=='0')
						<a href="#">{{$menu->nama}}</a>
						<!--SUbmenu Starts-->
						<ul class="side_sub_menu">
							@foreach($kategori as $key=>$submenu)
							@if($menu->id==$submenu->parent)
							<li><a href="{{slugKategori($submenu)}}">{{$submenu->nama}}</a></li>
							@endif
							@endforeach
						</ul>
						<!--SUbmenu Ends-->
						@endif
					</li>
					@endforeach
				</ul>
				<ul class="category collection">
					<li class="header">Koleksi</li>
					@foreach($koleksi as $mykoleksi)
					<li><a href="{{slugKoleksi($mykoleksi)}}">{{$mykoleksi->nama}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
		<!--MAIN CONTENT ENDS-->
		<div id="main_content">
			<div class="category_banner">
				@foreach(getBanner(2) as $banner)
				<a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" width="100%"/></a>
				@endforeach
			</div>	
			<!--Toolbar-->
			<div class="toolbar">
				<!-- <div class="sortby">
					<label>Sort by :</label>
					<select>
						<option>PRICE</option>
						<option>NAME</option>
					</select>
				</div> -->

				<div class="viewby">
					<label>View as :</label>
					<a href="{{buatLink(URL::current(),array('view'=>'grid'))}}" class="grid" title="Grid View"></a>
					<a href="{{buatLink(URL::current(),array('view'=>'list'))}}" class="list" title="List View"></a>
					<!-- <a class="list" href="#"></a> <a class="grid" href="#"></a> -->
				</div>

				<div style="width:100px;" class="show_no">
					<label></label>
					<select style="width: 112px;" id="show" data-rel="{{URL::current()}}">
						<option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12 ITEMS</option>
						<option value="24" {{Input::get('show')==24?'selected="selected"':''}}>24 ITEMS</option>
					</select>
				</div>
			</div>
			<!--Toolbar-->

			@if($view=='list')
			<!--Product List Starts-->
			<div class="products_list_list">
				<ul>
					@foreach($produk as $myproduk)
					<li style="position:relative;">
						{{is_terlaris($myproduk, $kiri=1)}}
						{{is_produkbaru($myproduk, $kiri=1)}}
						{{is_outstok($myproduk, $kiri=1)}}
						<a href="{{slugProduk($myproduk)}}" class="product_image">
							{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'max-height: 216px;'))}}
						</a>
						<div class="product_info">
							<h3><a href="{{slugProduk($myproduk)}}">{{strtoupper($myproduk->nama)}}</a></h3>
							<small>{{shortDescription($myproduk->deskripsi,100)}}</small><a class="black" href="{{slugProduk($myproduk)}}">Lihat Produk</a>
						</div>
						<div class="price_info">
							<button class="price_add" title="" onclick="window.location.href='{{slugProduk($myproduk)}}'" type="button"><span class="pr_price">{{jadiRupiah($myproduk->hargaJual)}}</span><span class="pr_add">Beli</span></button>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Ends-->
			@elseif($view=='' || $view=='grid')
			<!--Product List Starts-->
			<div class="products_list products_slider">
				<ul>
					@foreach($produk as $myproduk)
					<li style="position:relative;">
						{{is_terlaris($myproduk, $kiri=1)}}
						{{is_produkbaru($myproduk, $kiri=1)}}
						{{is_outstok($myproduk, $kiri=1)}}
						<a href="{{slugProduk($myproduk)}}" class="product_image">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'max-height: 216px;'))}}</a>
						<div class="product_info">
							<h3><a href="{{slugProduk($myproduk)}}">{{strtoupper($myproduk->nama)}}</a></h3>
							<small>{{shortDescription($myproduk->deskripsi,80)}}</small>
						</div>
						@if($setting->checkoutType!=2)
						<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
							<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button"><span class="pr_price" style="width: auto;"> {{jadiRupiah($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
						</div>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Starts-->
			@endif
			<div class="show_no" style="margin-right: 42%;">
				{{$produk->links()}}
			</div>
		</div>
	</section>
	<!--Mid Section Ends-->
</div>