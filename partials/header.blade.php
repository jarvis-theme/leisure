<div class="header_container">
    <!--Header Starts-->
    <header>
        <div class="top_bar clear">
            <!--Language Switcher Starts-->
            <div class="language_switch"> <a class="active" href="#" title="BAHASA">ID</a> <!-- <a href="#" title="ENGLISH">EN</a> --> </div>
            <!--Language Switcher Ends-->
            <!--Top Links Starts-->
            <ul class="top_links">
                @if ( ! Sentry::check())
                    <li>{{HTML::link('member', 'Login')}}</li>
                    <li class="highlight"><a href="{{URL::to('member/create')}}" >Sign Up</a></li>
                @else
                    <li class="highlight">{{HTML::link('member', 'My Account')}}</li>
                    <li>{{HTML::link('logout', 'Logout')}}</li>
                @endif
            </ul>
            <!--Top Links Ends-->
        </div>
        <!--Logo Starts-->
         @if(@getimagesize(URL::to(getPrefixDomain().'/galeri/'.$toko->logo)))
            <h1 class="logo"> <a href="{{URL::to('home')}}"><img style="max-height: 180px;" src="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}" /></a> </h1>
        @else
            <h1 class="logo"> <a style="text-decoration:none" href="{{URL::to('home')}}"><h1 style="padding: 25px 0px 20px 0px;color: #3D3B3B;text-decoration: none;text-transform: uppercase;font-weight: light;font-size: 32px;">{{ Theme::place('title') }}</h1></a> </h1>
        @endif
        <!--Logo Ends-->
        <!--Responsive NAV-->            
        <div class="responsive-nav" style="display:none; margin: 0 auto; position: static;">
            <select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                <option selected="" value="">Menu...</option>
                @foreach($katMenu as $key=>$link)
                <option value={{slugKategori($link)}}> {{$link->nama}}</option>
                @endforeach
            </select>
        </div>
        <!--Responsive NAV-->
        <!--Search Starts-->
        <form action="{{URL::to('search')}}" class="header_search" method="post">
            <div class="form-search">
                <input id="search" type="text" name="search" value="" class="input-text" autocomplete="off" placeholder="Search">
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
            <li class="active"><a href={{"'".URL::to("/")."'"}}>Home</a></li>
            @foreach($katMenu as $key=>$menu)
            <li>
                @if($menu->parent=='0')
                <a href={{slugKategori($menu)}}>{{$menu->nama}}</a>
                <ul class="sub_menu">
                    <!--SUbmenu Starts-->
                    @foreach($anMenu as $key1=>$submenu)
                    @if($submenu->parent==$menu->id)
                    <li><a href={{slugKategori($submenu)}}>{{$submenu->nama}}</a>
                        <ul>
                            @foreach($anMenu as $key2=>$submenu2)
                            @if($submenu->id==$submenu2->parent)
                            <li><a href={{slugKategori($submenu2)}}>{{$submenu2->nama}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    @endforeach
                </ul>
                <!--SUbmenu Ends-->
            </li>
            @endif
            @endforeach
        </ul>
        <div class="minicart" id='shoppingcartplace'>
            {{$ShoppingCart}}
        </div>
    </nav>
    <!--Navigation Ends-->
</div>