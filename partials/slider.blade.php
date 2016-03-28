<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li>
                @if(!empty($slide->url))
                <a href="{{filter_link_url($slide->url)}}" target="_blank">
                @else
                <a href="#">
                @endif
                    <img class="gbr-slide" src="{{ slide_image_url($slide->gambar) }}" alt="{{$slide->title}}" />
                </a>
                @if(!empty($slide->text))
                <div class="flex-caption">
                    <h3>{{$slide->text}}</h3>
                </div>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!--Banner Ends
@foreach(horizontal_banner() as $banner)
    <a href="{{URL::to($banner->url)}}"><img src="{{URL::to(banner_image_url($banner->gambar))}}"/></a>
@endforeach-->
