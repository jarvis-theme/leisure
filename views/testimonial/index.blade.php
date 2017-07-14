	<div class="full_page">
		<h1>{{$nama}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
				@foreach(list_testimonial() as $key=>$value)
				<div class="mb30">
					<h5><span class="highlight_text">{{ ucwords($value->nama) }}</span></h5>
					<div class="short-code-column">
						&#187; {{ ucfirst($value->isi) }}
					</div>
					<br>
					<div id="borders"></div>
				</div>
				@endforeach
				{{list_testimonial()->links()}} 
			</section>
			<aside id="sidebar">
				<ul class="arrow_li side_nav">
					<li><b>Buat Testimonial</b></li>
				</ul>
				<form action="{{url('testimoni')}}" method="post">
					<div class="form-group">
						<label class="labels">Nama</label>
						<input id="testimoni" type="text" name="nama" class="input-text" required>
					</div>
					<div class="form-group">
						<label class="labels">Testimonial</label>
						<textarea id="testimoni" name="testimonial" class="textarea" required></textarea>
					</div>
					<input type="submit" class="subbutton brown_btn pull-right" value="Kirim Testimonial">
				</form>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>