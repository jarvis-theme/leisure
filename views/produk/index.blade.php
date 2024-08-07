﻿<div class="section_container">
    <section>
        <div id="side_nav">
            <div class="sideNavCategories">
                <h1>{{$name}}</h1>
                @if(count(list_category()) > 0)
                <ul class="category departments">
                    <li class="header">Kategori</li>
                    @foreach(list_category() as $key=>$menu)
                        @if($menu->parent=='0')
                            @if(count($menu->anak) == 0)
                            <li>
                                <a href="{{category_url($menu)}}" class="nobackground">{{$menu->nama}}</a>
                            </li>
                            @elseif(count($menu->anak) >= 1)
                            <li class="menu_cont">
                                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                                <ul class="side_sub_menu">
                                @foreach(list_category() as $key=>$submenu)
                                    @if($menu->id==$submenu->parent)
                                    <li>
                                        <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                                        @if($submenu->anak->count() != 0)
                                        <ul class="side_sub_menu2">
                                            @foreach($submenu->anak as $submenu2)
                                            @if($submenu2->parent == $submenu->id)
                                            <li><a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                @endforeach
                                </ul>
                            </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
                @endif
                <ul class="category collection">
                    <li class="header">Koleksi</li>
                    @foreach(list_koleksi() as $mykoleksi)
                    <li><a href="{{koleksi_url($mykoleksi)}}">{{$mykoleksi->nama}}</a></li>
                    @endforeach
                </ul>
                @if(count(vertical_banner()) > 0)
                <ul class="side-banner">
                    {{--*/ $i=0; /*--}}
                    @foreach(vertical_banner() as $item) 
                    <a href="{{url($item->url)}}">
                        {{HTML::image(url(banner_image_url($item->gambar)), 'Info '.$i++)}} 
                    </a>
                    @endforeach 
                </ul>
                @endif
            </div>
        </div>

        <div id="main_content" class="w-4/5">
            <div class="category_banner">
                @foreach(horizontal_banner() as $banner)
                <a href="{{ $banner->url }}" target="_blank">
                    <img src="{{ URL::to(banner_image_url($banner->gambar)) }}" alt="Info Promo" width="100%" style="margin-bottom: 10px;" />
                </a>
                @endforeach
            </div>  
            <div class="toolbar">
                <!-- <div class="sortby">
                    <label>Sort by :</label>
                    <select>
                        <option>PRICE</option>
                        <option>NAME</option>
                    </select>
                </div> -->

                <div class="viewby">
                    <label>View as :</label>
                    <a href="{{buatLink(URL::current(),array('view'=>'grid'))}}" class="grid" title="Grid View"></a>
                    <a href="{{buatLink(URL::current(),array('view'=>'list'))}}" class="list" title="List View"></a>
                </div>
                
                <div class="show_no opsi-item">
                    <div>                    
                        <select class="itemselect" id="show" data-rel="{{URL::current()}}">
                            <option value="0">Show Product</option>
                            <option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12 ITEMS</option>
                            <option value="24" {{Input::get('show')==24?'selected="selected"':''}}>24 ITEMS</option>
                        </select>
                    </div>
                </div>
            </div>

            @if($view=='list')
            <div class="products_list_list">
                <ul>
                    @foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
                    <li class="relateprod">
                        @if(is_outstok($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/stok-badge.png" class="outstok-badge">
                        @elseif(is_produkbaru($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/new-badge.png" class="new-badge">
                        @elseif(is_terlaris($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/terlaris-badge.png" class="best-badge">
                        @endif
                        <a href="{{product_url($myproduk)}}" class="product_image">
                            {{HTML::image(product_image_url($myproduk->gambar1, 'medium'), $myproduk->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                        </a>
                        <div class="product_info" id="detailprod">
                            <h3><a href="{{product_url($myproduk)}}">{{strtoupper($myproduk->nama)}}</a></h3>
                            <small>{{short_description($myproduk->deskripsi,200)}}</small><a class="black" href="{{product_url($myproduk)}}">Lihat Produk</a>
                        </div>
                        <div class="price_info">
                            <button class="price_add" onclick="window.location.href='{{product_url($myproduk)}}'" type="button" style="float: left;">
                                <span class="pr_price">{{price($myproduk->hargaJual)}}</span>
                                <span class="pr_add">Beli</span>
                            </button>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            @elseif($view=='' || $view=='grid')
            <div class="products_list products_slider">
                <ul>
                    @foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
                    <li class="relateprod">
                        @if(is_outstok($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/stok-badge.png" class="outstok-badge">
                        @elseif(is_produkbaru($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/terlaris-badge.png" class="best-badge">
                        @elseif(is_terlaris($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/leisure/img/new-badge.png" class="new-badge">
                        @endif
                        <a href="{{product_url($myproduk)}}" class="product_image">
                            {{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array("onerror" => "this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png';"))}}
                        </a>
                        <div class="product_info">
                            <h3><a href="{{product_url($myproduk)}}">{{short_description(strtoupper($myproduk->nama), 23)}}</a></h3>
                            <small>{{short_description($myproduk->deskripsi,30)}}</small>
                        </div>
                        @if($setting->checkoutType!=2)
                        <div class="price_info">
                            <button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add fl" type="button">
                                <span class="pr_price"> {{price($myproduk->hargaJual)}}</span>
                                <span class="pr_add">Lihat</span>
                            </button>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="show_no">
                {{list_product(Input::get('show'), @$category, @$collection)->appends(array('show' => Input::get('show')))->links()}}
            </div>
        </div>
    </section>
</div>