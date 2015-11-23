	<div class="full_page">
		<h1>{{$title}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
				@foreach(list_blog(null,@$blog_category) as $key=>$value)
				<a href="{{blog_url($value)}}"><span id="title-blog" class="highlight_text">{{$value->judul}}</span></a>
				<i class="icon-calendar"></i>- {{waktuTgl($value->created_at)}}
				<div class="short-code-column">
					&#187; {{blogIndex($value->isi,250)}}
					<p><a href="{{blog_url($value)}}" id="read-blog">Selengkapnya →</a></p>
					<div id="borders"></div>
				</div>
				@endforeach
				{{list_blog(null,@$blog_category)->links()}}
			</section>
			<aside id="sidebar">
				<ul class="arrow_li side_nav">
					@foreach(list_blog_category() as $key=>$value)
					<li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
					@endforeach
				</ul>
				<div class="twitter_feed"></div>
			</aside>
		</div>
	</div>