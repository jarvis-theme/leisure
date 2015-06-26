{{--*/ $products =  ''/*--}}
<div class="section_container">
	<!--Mid Section Starts-->
	<section>
		<!--SIDE NAV STARTS-->
		<div id="side_nav">
			<div class="sideNavCategories">
				<h1>{{$name}}</h1>
				@if(count(list_category()) > 0)
				<ul class="category departments">
					<li class="header">Kategori</li>
					@foreach(list_category() as $key=>$menu)
						@if($menu->parent=='0')
							@if(count($menu->anak) == 0)
							<li>
								<a href="{{slugKategori($menu)}}" style="background-image: none;">{{$menu->nama}}</a>
							</li>
							@elseif(count($menu->anak) >= 1)
							<li class="menu_cont">
								<a href="{{slugKategori($menu)}}">{{$menu->nama}}</a>
								<!--SUbmenu Starts-->
								<ul class="side_sub_menu">
								@foreach(list_category() as $key=>$submenu)
									@if($menu->id==$submenu->parent)
									<li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
									@endif
								@endforeach
								</ul>
								<!--SUbmenu Ends-->
							</li>
							@endif
						@endif
					@endforeach
				</ul>
				@endif
				<ul class="category collection">
					<li class="header">Koleksi</li>
					@foreach(list_koleksi() as $mykoleksi)
					<li><a href="{{slugKoleksi($mykoleksi)}}">{{$mykoleksi->nama}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
		<!--MAIN CONTENT ENDS-->
		<div id="main_content">
			<div class="category_banner">
				@foreach(horizontal_banner() as $banner)
				<a href="{{ $banner->url }}" target="_blank">
					<img src="{{ URL::to(banner_image_url($banner->gambar)) }}" width="100%"/>
				</a>
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
						<option value="">Show Product</option>
						<option value="2" {{Input::get('show')==2?'selected="selected"':''}}>12 ITEMS</option>
						<option value="4" {{Input::get('show')==4?'selected="selected"':''}}>24 ITEMS</option>
					</select>
				</div>
			</div>
			<!--Toolbar-->

			@if($view=='list')
			<!--Product List Starts-->
			<div class="products_list_list">
				<ul>
        			@foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
					<li style="position:relative;">
						@if(is_outstok($myproduk))    
                            {{is_outstok($myproduk, $kiri=1)}}
                        @else
                            @if(is_produkbaru($myproduk))
                                {{is_produkbaru($myproduk, $kiri=1)}}
                            @elseif(is_terlaris($myproduk))
                                {{is_terlaris($myproduk, $kiri=1)}}
                            @endif
                        @endif
						<a href="{{product_url($myproduk)}}" class="product_image">
							{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('style' => 'max-height: 216px; max-width: 190px; width: 190px;'))}}
						</a>
						<div class="product_info" style="width: 500px; float: left; margin-left: 5px;">
							<h3><a href="{{product_url($myproduk)}}">{{strtoupper($myproduk->nama)}}</a></h3>
							<small>{{short_description($myproduk->deskripsi,200)}}</small><a class="black" href="{{product_url($myproduk)}}">Lihat Produk</a>
						</div>
						<div class="price_info">
							<button class="price_add" title="" onclick="window.location.href='{{product_url($myproduk)}}'" type="button"><span class="pr_price">{{price($myproduk->hargaJual)}}</span><span class="pr_add">Beli</span></button>
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
					@foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
					<li style="position:relative;">
						@if(is_outstok($myproduk))    
                            {{is_outstok($myproduk, $kiri=1)}}
                        @else
                            @if(is_produkbaru($myproduk))
                                {{is_produkbaru($myproduk, $kiri=1)}}
                            @elseif(is_terlaris($myproduk))
                                {{is_terlaris($myproduk, $kiri=1)}}
                            @endif
                        @endif
						<a href="{{product_url($myproduk)}}" class="product_image" style="min-height:222px;">
							{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('style' => 'max-height: 216px;'))}}
						</a>
						<div class="product_info">
							<h3><a href="{{product_url($myproduk)}}">{{short_description(strtoupper($myproduk->nama), 23)}}</a></h3>
							<small>{{short_description($myproduk->deskripsi,30)}}</small>
						</div>
						@if($setting->checkoutType!=2)
						<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
							<button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="" type="button"><span class="pr_price" style="width: auto;"> {{price($myproduk->hargaJual)}}</span><span class="pr_add">Lihat</span></button>
						</div>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
			<!--Product List Starts-->
			@endif
			<div class="show_no" style="margin-right: 42%;">
				{{list_product(Input::get('show'), @$category, @$collection)->appends(array('show' => Input::get('show')))->links()}}
			</div>
		</div>
	</section>
	<!--Mid Section Ends-->
</div>
