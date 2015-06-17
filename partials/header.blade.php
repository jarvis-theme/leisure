<div class="header_container">
    <!--Header Starts-->
    <header>
        <div class="top_bar clear">
            <!--Language Switcher Starts-->
            <div class="language_switch"> <a class="active" href="#" title="BAHASA">ID</a> <!-- <a href="#" title="ENGLISH">EN</a> --> </div>
            <!--Language Switcher Ends-->
            <!--Top Links Starts-->
            <ul class="top_links">
                @if ( ! is_login() )
                    <li>{{HTML::link('member', 'Login')}}</li>
                    <li class="highlight"><a href="{{url('member/create')}}" >Sign Up</a></li>
                @else
                    <li class="highlight">{{HTML::link('member', 'My Account')}}</li>
                    <li>{{HTML::link('logout', 'Logout')}}</li>
                @endif
            </ul>
            <!--Top Links Ends-->
        </div>
        <!--Logo Starts-->
         @if(@getimagesize( url(logo_image_url()) ))
            <h1 class="logo">
                <a href="{{url('home')}}">
                    {{HTML::image(logo_image_url(),'logo',array("style"=>"max-height: 180px;"))}}
                </a>
            </h1>
        @else
            <h1 class="logo">
                <a style="text-decoration:none" href="{{url('home')}}">
                    <h1 style="padding: 25px 0px 20px 0px;color: #3D3B3B;text-decoration: none;text-transform: uppercase;font-weight: light;font-size: 32px;">{{ Theme::place('title') }}</h1>
                </a>
            </h1>
        @endif
        <!--Logo Ends-->
        <!--Responsive NAV-->            
        <div class="responsive-nav" style="display:none; margin: 0 auto; position: static;">
            <select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                <option selected="" value="">Menu...</option>
                
                <option value="{{--category_url($link)--}}"> {{--$link->nama--}}</option>
                
            </select>
        </div>
        <!--Responsive NAV-->
        <!--Search Starts-->
        <form action="{{url('search')}}" class="header_search" method="post">
            <div class="form-search">
                <input id="search" type="text" name="search" value="" class="input-text" autocomplete="off" placeholder="Search" required>
                <button type="submit" title="Search"></button>
            </div>
        </form>
        <!--Search Ends-->
    </header>
    <!--Header Ends-->
</div>
<div class="navigation_container">
    <!--Navigation Starts-->
    <nav style=" display: list-item;list-style: none; ">
        <ul class="primary_nav">
            <li class="active"><a href='{{url("/")}}'>Home</a></li>
            @if(count(category_menu()) > 0)
            @foreach(category_menu() as $key=>$menu)
            <li>
                @if($menu->parent=='0')
                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                    @if(count($menu->anak) >= 1)
                    <ul class="sub_menu">
                        <!--SUbmenu Starts-->
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
                    <!--SUbmenu Ends-->
                    @endif
                @endif
            </li>
            @endforeach
            @endif
        </ul>
        <div class="minicart" id='shoppingcartplace'>
            {{$ShoppingCart}}
        </div>
    </nav>
    <!--Navigation Ends-->
</div>