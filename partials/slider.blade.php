<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li> 
                <a href="{{$slide->text=='' ? '#' : $slide->text}}">
                    <img class="gbr-slide" src="{{ url(slide_image_url($slide->gambar)) }}" alt="Slide" />
                </a>
                <!--<div class="flex-caption">
                    <h3>Explore the summer collection!</h3>
                </div>-->
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!--Banner Ends
@foreach(horizontal_banner() as $banner)
    <a href="{{URL::to($banner->url)}}"><img src="{{URL::to(banner_image_url($banner->gambar))}}"/></a>
@endforeach-->
