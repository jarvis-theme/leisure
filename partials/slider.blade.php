<!--Banner Starts-->
<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">

            @foreach(slideshow() as $slide)
            <li> 
                <img style="max-height: 435px;" src="{{ url(slide_image_url($slide->gambar)) }}" />
                <!--<div class="flex-caption">
                    <h3>Explore the summer collection!</h3>
                </div>-->
            </li>
            @endforeach
        </ul>
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
