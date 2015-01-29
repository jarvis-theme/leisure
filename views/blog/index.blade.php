﻿	<div id="" class="full_page">
		<h1>{{$title}}</h1>
		<div class="page_sidebar">
			<section id="main_content">
			@foreach($data as $key=>$value)
				<a href={{"'".URL::to("blog/".$value->slug)."'"}}><span style="padding-bottom: 11px;" class="highlight_text">{{$value->judul}}</span></a>
				<i class="icon-calendar"></i>- {{waktuTgl($value->updated_at)}}</img>
				<div class="short-code-column">
					<!-- <img src="images/girls_shopping.jpg" /> -->
					&#187; {{blogIndex($value->isi,250)}}
					<p style="text-align: right"><a href="{{URL::to('blog/'.$value->slug)}}" style="text-decoration: none; font-weight: bolder; color:black;">Read More →</a></p>
					<div style="border-bottom: solid 1px #EBEBEB; margin-bottom: 11px;"></div>
			  	</div>
		  	@endforeach
			{{$data->links()}}
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