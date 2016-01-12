<div class="header_container">
    <header>
        <div class="top_bar clear">
            <div class="language_switch"> <a class="active" href="#" title="BAHASA">ID</a> <!-- <a href="#" title="ENGLISH">EN</a> --> </div>
            <ul class="top_links">
                @if ( ! is_login() )
                <li>{{HTML::link('member', 'Login')}}</li>
                <li class="highlight"><a href="{{url('member/create')}}" >Sign Up</a></li>
                @else
                <li class="highlight">{{HTML::link('member', 'My Account')}}</li>
                <li>{{HTML::link('logout', 'Logout')}}</li>
                @endif
            </ul>
        </div>
        @if( logo_image_url() )
        <h1 class="logo">
            <a href="{{url('home')}}">
                {{HTML::image(logo_image_url(),'Logo',array("class"=>"gbr-logo"))}}
            </a>
        </h1>
        @else
        <h1 class="logo">
            <a href="{{url('home')}}" class="logo-text">
                <h1 id="brandshop">{{ Theme::place('title') }}</h1>
            </a>
        </h1>
        @endif

        <div class="responsive-nav mobile-navigation">
            <select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                <option selected="" value="">Menu...</option>
                @if(count(list_category()) > 0)
                    @foreach(list_category() as $link)
                    <option value="{{category_url($link)}}"> {{$link->nama}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <form action="{{url('search')}}" class="header_search" method="post">
            <div class="form-search">
                <input id="search" type="text" name="search" class="input-text" autocomplete="off" placeholder="Search" required>
                <button type="submit" title="Search"></button>
            </div>
        </form>
    </header>
</div>
<div class="navigation_container">
    <nav class="side-nav">
        <ul class="primary_nav">
            <li class="active"><a href='{{url("/")}}'>Home</a></li>
            @if(count(category_menu()) > 0)
            @foreach(category_menu() as $key=>$menu)
            <li>
                @if($menu->parent=='0')
                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                    @if(count($menu->anak) >= 1)
                    <ul class="sub_menu">
                        @foreach(list_category() as $key1=>$submenu)
                            @if($submenu->parent == $menu->id)
                            <li>
                                <a href="{{ category_url($submenu) }}">{{ $submenu->nama }}</a>
                                @if(count($submenu->anak) >= 1)
                                    <ul>
                                    @foreach(list_category() as $key2=>$submenu2)
                                        @if($submenu->id == $submenu2->parent)        
                                        <li><a href="{{ category_url($submenu2) }}">{{ $submenu2->nama }}</a></li>
                                        @endif
                                    @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                @endif
            </li>
            @endforeach
            @endif
        </ul>
        <div class="minicart" id="shoppingcartplace">
            {{shopping_cart()}}
        </div>
    </nav>
</div>