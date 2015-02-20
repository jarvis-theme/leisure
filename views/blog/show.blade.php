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
					<!-- <img src="images/girls_shopping.jpg" /> -->
					{{$detailblog->isi}}
				</div>
				<div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
				<br>
				{{$fbscript}}
				{{fbcommentbox(URL::to("blog/".$detailblog->slug), '640px', '5', 'light')}}
				<br>
				<div class="navigate comments clearfix">
					@if(isset($prev))
					<!-- <div class="pull-left"><a href="{{$prev->slug}}"></a></div>-->
					<p style="text-align: right"><a href="{{$prev->slug}}" style="text-decoration: none; font-weight: bolder; color:black;">&larr; Prev post</a></p> 
					@else
					<div class="pull-right"></div>
					@endif

					@if(isset($next))
					<!-- <div style="text-align: right" class="pull-right"><a href="{{$next->slug}}">Next post &rarr;</a></div> -->
					<p style="text-align: right"><a href="{{$next->slug}}" style="text-decoration: none; font-weight: bolder; color:black;">Next post &rarr;</a></p>
					@else
					<div class="pull-right"></div>
					@endif
				</div>
			</section>
			<aside id="sidebar">
				<ul class="arrow_li side_nav">
					@foreach($categoryList as $key=>$value)
					<li><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></li>
					@endforeach
				</ul>

				<div class="twitter_feed"> </div>
			</aside>
		</div>
	</div>