	<div class="full_page">
		<h1>{{$data->judul}}</h1>        
		<div class="page_sidebar">
			<section id="main_content">
				<!-- <span class="highlight_text">{{--$data->up--}}</span> -->
				<div class="short-code-column">{{$data->isi}}</div>
			</section>
			<aside id="sidebar">            	                
				<ul class="arrow_li side_nav">
					<li><a href="{{URL::to('produk')}}">Koleksi Produk</a></li>
					<li><a href="{{URL::to('testimoni')}}">Testimonial</a></li>
					<li><a href="{{URL::to('service')}}">Syarat dan Ketentuan</a></li>
					<li><a href="{{URL::to('konfirmasiorder')}}">Konfirmasi Pembayaran</a></li>
				</ul>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>