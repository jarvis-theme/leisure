	<div id="" class="full_page">
		<h1>Costumer Service</h1>        
		<div class="page_sidebar">
			<section id="main_content">
				<span class="highlight_text">Term of Service</span>
				<div class="short-code-column">
					<!-- <img src="images/girls_shopping.jpg" /> -->
					{{$service->tos}}
					<div id="borders"></div>
				</div>
				<span class="highlight_text">Refund Policy</span>
				<div class="short-code-column">
					{{$service->refund}}
					<div id="borders"></div>
				</div>
				<span class="highlight_text">Privacy Policy</span>
				<div class="short-code-column">
					{{$service->privacy}}
					<div id="borders"></div>
				</div>
			</section>
			<aside id="sidebar">            	                
				<ul class="arrow_li side_nav">
					<li><a href="{{URL::to('halaman/about-us')}}">About Us</a></li>
					<li><a href="{{URL::to('produk')}}">Product Offerings</a></li>
					<!-- <li><a href="{{URL::to('about-us')}}">Meet our Team</a></li> -->
					<!-- <li><a href="{{URL::to('service')}}">F.A.Q</a></li> -->
					<li><a href="{{URL::to('testimoni')}}">Testimonials</a></li>
					<!-- <li><a href="{{URL::to('product')}}">Brands we sell</a></li> -->
					<li><a href="{{URL::to('service')}}">Shipping terms</a></li>
				</ul>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>