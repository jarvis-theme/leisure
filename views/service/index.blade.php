	<div class="full_page">
		<!-- <h1>Costumer Service</h1> -->
		<div class="page_sidebar">
			<section id="main_content">
				<span class="highlight_text">Kebijakan Layanan</span>
				<div class="short-code-column">
					{{$service->tos}}
					<div id="borders"></div>
				</div>
				<span class="highlight_text">Kebijakan Pengembalian</span>
				<div class="short-code-column">
					{{$service->refund}}
					<div id="borders"></div>
				</div>
				<span class="highlight_text">Kebijakan Privasi</span>
				<div class="short-code-column">
					{{$service->privacy}}
					<div id="borders"></div>
				</div>
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