	<div class="full_page">
		<h1>Hasil Pencarian</h1>
		<section>
			@if($jumlahCari!=0)
			<div class="products_list_list">
				<ul>
					@foreach($hasilpro as $myproduk)
					<li>
						<a href="{{url(product_url($myproduk))}}" class="thumb-product">{{HTML::image(product_image_url($myproduk->gambar1,'thumb'), $myproduk->nama, array("error" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'"))}}</a>
						<div class="product_info" id="searchprod">
							<h3><a href="{{url(product_url($myproduk))}}">{{strtoupper(short_description($myproduk->nama,50))}}</a></h3>
							<small>{{shortDescription($myproduk->deskripsi,100)}}</small><a class="black" href="{{url(product_url($myproduk))}}">Lihat Produk</a>
						</div>
					</li>
					<div id="borders"></div>
					@endforeach
				</ul>
			</div>
			<ul class="arrow_li">
				@foreach($hasilhal as $myhal)
				<a href="{{url('halaman/'.$myhal->slug)}}"><span id="halsearch" class="highlight_text">{{$myhal->judul}}</span></a>
				<div class="short-code-column">
					<li>{{shortDescription($myhal->isi,100)}}</li>
					<br>
					<div id="borders"></div>
				</div>
				@endforeach
			</ul>
			<ul>
				@foreach($hasilblog as $myblog)
				<a href="{{url(blog_url($myblog))}}"><span id="halsearch" class="highlight_text">{{$myblog->judul}}</span></a>
				<div class="short-code-column">
					<li>{{shortDescription($myblog->isi,100)}}</li>
					<br>
					<div id="borders"></div>
				</div>
				@endforeach
			</ul>
			@else
			<article id="noresult"><i>Hasil pencarian tidak ditemukan</i></article>
			@endif
		</section>
	</div>