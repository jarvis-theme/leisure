<!--Banner Starts-->
<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach ($slideshow as $val)
            		<li>
                		<img style="max-height: 435px;" src="{{URL::to(getPrefixDomain().'/galeri/'.$val->gambar.'?'.Time())}}" />
                		@if($val->text)
				<div class="flex-caption">
                    			<h4>{{ $val->text }}</h4>
                		</div>
				@endif
            		</li>
            @endforeach
    </div>
    <!-- <div class="promo_banner">
        <div class="home_banner"><a href="#"><img style="max-height: 140px; width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width1.jpg')}}"></a></div>
        <div class="home_banner"><a href="#"><img style="max-height: 140px; width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width2.jpg')}}"></a></div>
        <div class="home_banner"><a href="#"><img style="max-height: 140px; width: 100%;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width3.jpg')}}"></a></div>
    </div> -->
</div>
<!--Banner Ends
@foreach(getBanner(2) as $banner)
    <a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}"/></a>
@endforeach-->
