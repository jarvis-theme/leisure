	<div id="" class="full_page">
		<h1>{{$data->judul}}</h1>        
		<div class="page_sidebar">
			<section id="main_content">
				<span class="highlight_text">{{$data->up}}</span>
				<div class="short-code-column">
					<!-- <img src="images/girls_shopping.jpg" /> -->
					{{$data->isi}}
				</div>
			</section>
			<aside id="sidebar">            	                
				<ul class="arrow_li side_nav">
					<li><a href="{{URL::to('halaman/about-us')}}">About Us</a></li>
					<li><a href="{{URL::to('produk')}}">Product Offerings</a></li>
					<!-- <li><a href="{{URL::to('service')}}">F.A.Q</a></li> -->
					<li><a href="{{URL::to('testimoni')}}">Testimonials</a></li>
					<!-- <li><a href="{{URL::to('product')}}">Brands we sell</a></li> -->
					<li><a href="{{URL::to('service')}}">Shipping terms</a></li>
				</ul>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>