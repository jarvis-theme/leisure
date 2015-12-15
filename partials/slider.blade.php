<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li>
                @if($slide->text == '')
                <a href="#">
                @else
                <a href="{{filter_link_url($slide->text)}}" target="_blank">
                @endif
                    <img class="gbr-slide" src="{{ slide_image_url($slide->gambar) }}" alt="Slide" />
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
