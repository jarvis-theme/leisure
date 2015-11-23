	<div class="full_page">
		<h1>{{$nama}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
				@foreach(list_testimonial() as $key=>$value)
				<a href="#"><span id="halsearch" class="highlight_text">{{$value->nama}}</span></a>
				<p><i class="date">{{waktuTgl($value->created_at)}}</i></p>
				<div class="short-code-column">
					&#187; {{($value->isi)}}
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
					<label>Nama</label><br><input id="testimoni" type="text" name="nama" class="input-text" required><br><br>
					<label>Testimonial</label><br><textarea id="testimoni" name="testimonial" class="textarea" required></textarea><br><br>
					<input type="submit" class="subbutton brown_btn pull-right" value="Kirim Testimonial">
					<br><br>
				</form>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>