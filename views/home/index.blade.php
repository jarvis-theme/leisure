<!--New Product List Starts-->
@if($newproduk->count()>0)
<div class="products_list products_slider">
	<h2 class="sub_title">Produk Baru</h2>
	<ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
		@foreach($newproduk as $key=>$myproduk)
		<li style="text-align: center;"> 
			<a style="height: 225px" href="{{slugProduk($myproduk)}}" class="product_image"><img style="height: 225px" src={{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}></a>
			<div class="product_info">
				<h3 style="height: 28px;"><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h3>
				<small>{{shortDescription($myproduk->deskripsi,100)}}</small>
			</div>
			@if($setting->checkoutType!=2)
			<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
				<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button"><span class="pr_price">&nbsp;{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
			</div>
			@endif
		</li>
		@endforeach
	</ul>
</div>
@endif
<!--Product List Ends-->

<!--Product List Starts-->
<div class="products_list products_slider">
	<h2 class="sub_title">Produk</h2>
	<ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
		@foreach($produk as $key=>$myproduk)
		<li style="text-align: center; position:relative;"> 
			{{is_terlaris($myproduk)}}
			{{is_produkbaru($myproduk)}}
			{{is_outstok($myproduk)}}
			<a style="height: 225px" href="{{slugProduk($myproduk)}}" class="product_image"><img style="height: 225px" src={{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}></a>

			<div class="product_info">
				<h3 style="height: 28px;"><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h3>
				<small>{{shortDescription($myproduk->deskripsi,100)}}</small>
			</div>

			@if($setting->checkoutType!=2)
			<div class="price_info"> <!-- <a href="#">+ Add to wishlist</a> -->
				<button onclick="window.location.href='{{slugProduk($myproduk)}}'" class="price_add" title="" type="button"><span class="pr_price">&nbsp;{{jadiRupiah($myproduk->hargaJual,$matauang)}}</span><span class="pr_add">Lihat</span></button>
			</div>
			@endif
		</li>
		@endforeach
	</ul>
</div>
<!--Product List Ends-->