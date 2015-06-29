@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

	<div id="" class="full_page">
		<h1>{{$nama}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
				@foreach(list_testimonial() as $key=>$value)
				<a href="#"><span style="padding-bottom: 11px;" class="highlight_text">{{$value->nama}}</span></a>
				<p><i class="date">{{waktuTgl($value->created_at)}}</i></p>
				<div class="short-code-column">
					<!-- <img src="images/girls_shopping.jpg" /> -->
					&#187;{{($value->isi)}}
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
					<input type="submit" style="float:right" class="subbutton brown_btn" value="Kirim Testimonial">
					<br><br>
				</form>
				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>