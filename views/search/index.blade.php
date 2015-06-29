	<div id="" class="full_page">
		<h1>Hasil Pencarian</h1>
		<section id="">
			@if($jumlahCari!=0)
			<div class="products_list_list">
				<ul>
					@foreach($hasilpro as $myproduk)
					<li style="border-top:0px;">
						<a href="{{url(product_url($myproduk))}}" class="product_image">{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('style' => 'max-height: 94px;'))}}</a>
						<div class="product_info" style="float:left; margin-left:1%;">
							<h3><a href="{{url(product_url($myproduk))}}">{{strtoupper($myproduk->nama)}}</a></h3>
							<small>{{shortDescription($myproduk->deskripsi,100)}}</small><a class="black" href="{{url(product_url($myproduk))}}">Lihat Produk</a>
						</div>
					</li>
					<div id="borders"></div>
					@endforeach
				</ul>
			</div>
			<ul class="arrow_li">
				@foreach($hasilhal as $myhal)
				<a href="{{url('halaman/'.$myhal->slug)}}"><span style="padding-bottom: 11px;" class="highlight_text">{{$myhal->judul}}</span></a>
				<div class="short-code-column">
					<li>{{shortDescription($myhal->isi,100)}}</li>
					<div id="borders"></div>
				</div>
				@endforeach
			</ul>
			<ul>
				@foreach($hasilblog as $myblog)
				<a href="{{url(blog_url($myblog))}}"><span style="padding-bottom: 11px;" class="highlight_text">{{$myblog->judul}}</span></a>
				<div class="short-code-column">
					<li>{{shortDescription($myblog->isi,100)}}</li>
					<div id="borders"></div>
				</div>
				@endforeach
			</ul>
			@else
			<article style="text-align: center; border: 0;">
				<i>Hasil pencarian tidak ditemukan</i>
			</article>
			@endif
		</section>
	</div>