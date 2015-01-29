	<div id="" class="full_page">
		<h1>Hasil Pencarian</h1>
			<section id="">
			  @if($jumlahCari!=0)
				<div class="products_list_list">
				  <ul>
				  @foreach($hasilpro as $myproduk)
					<li style="border-top:0px;"> <a href="{{URL::to(slugProduk($myproduk))}}" class="product_image">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'max-height: 94px;'))}}</a>
					  <div class="product_info" style="float:left; margin-left:1%;">
						<h3><a href="{{URL::to(slugProduk($myproduk))}}">{{strtoupper($myproduk->nama)}}</a></h3>
						<small>{{shortDescription($myproduk->deskripsi,100)}}</small><a class="black" href="{{URL::to(slugProduk($myproduk))}}">Lihat Produk</a> </div>
					</li>
					<div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
				  @endforeach
					</ul>
				  </div>

				  <ul class="arrow_li">
				  @foreach($hasilhal as $myhal)

				  <a href="{{URL::to('halaman/'.$myhal->slug)}}"><span style="padding-bottom: 11px;" class="highlight_text">{{$myhal->judul}}</span></a>
				  <div class="short-code-column">

					<li>{{shortDescription($myhal->isi,100)}}</li>
				  <div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
				  </div>

				  @endforeach
				  <ul>

				  <ul>
				  @foreach($hasilblog as $myblog)

				  <a href="{{URL::to('blog/'.$myblog->slug)}}"><span style="padding-bottom: 11px;" class="highlight_text">{{$myblog->judul}}</span></a>
				  <div class="short-code-column">
					<li>{{shortDescription($myblog->isi,100)}}</li>
				  <div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
				  </div>

				  @endforeach
				  </ul>

				@else
				  <article style="text-align: center; border: 0;">
					<i>Hasil tidak ditemukan</i>
				  </article>
				@endif
			</section>
	</div>
