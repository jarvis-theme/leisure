	<div id="" class="full_page">
		<h1>{{$detailblog->judul}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
				<span class="highlight_text">{{$detailblog->kategori->nama}}</span>
				<p>
					<span class="date">
						<i class="icon-calendar"></i> {{date("d M Y", strtotime($detailblog->updated_at))}}
						<i class="icon-tag"></i><a href="#"></a>
					</span>
				</p>
				<div class="short-code-column">
					{{$detailblog->isi}}
				</div>
				<div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
				<br>
				{{$fbscript}}
				{{fbcommentbox(blog_url($detailblog), '640px', '5', 'light')}}
				<br>
				<div class="navigate comments clearfix">
					@if(isset($prev))
					<p style="float:left"><a href="{{$prev->slug}}" style="text-decoration: none; font-weight: bolder; color:black;">&larr; Prev post</a></p>
					@endif

					@if(isset($next))
					<p style="float:right"><a href="{{$next->slug}}" style="text-decoration: none; font-weight: bolder; color:black;">Next post &rarr;</a></p>
					@endif
				</div>
			</section>
			<aside id="sidebar">
				<ul class="arrow_li side_nav">
					@foreach(list_blog_category() as $key=>$value)
					<li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
					@endforeach
				</ul>

				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>