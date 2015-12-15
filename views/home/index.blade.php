@if(count(new_product()) > 0)
<div class="products_list products_slider">
    <h2 class="sub_title">Produk Baru</h2>
    <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
        @foreach(new_product() as $key => $myproduk)
        <li class="centering"> 
            <a href="{{product_url($myproduk)}}" class="product_image">
                <img src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}">
            </a>
            <div class="product_info">
                <h3><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 50)}}</a></h3>
                <small>{{short_description($myproduk->deskripsi,60)}}</small>
            </div>
            @if($setting->checkoutType!=2)
            <div class="price_info">
                <button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="Lihat" type="button">
                    <span class="pr_price">&nbsp;{{price($myproduk->hargaJual,$matauang)}}</span>
                    <span class="pr_add">Lihat</span>
                </button>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="products_list products_slider">
    <h2 class="sub_title">Produk</h2>
    <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
        @foreach(home_product() as $key=>$myproduk)
        <li class="home-product">
            @if(is_outstok($myproduk))
            {{is_outstok($myproduk)}}
            @elseif(is_terlaris($myproduk))
            {{is_terlaris($myproduk)}}
            @elseif(is_produkbaru($myproduk))
            {{is_produkbaru($myproduk)}}
            @endif
            <a href="{{product_url($myproduk)}}" class="product_image">
                <img src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}">
            </a>
            <div class="product_info">
                <h3><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,50)}}</a></h3>
                <small>{{short_description($myproduk->deskripsi,65)}}</small>
            </div>
            @if($setting->checkoutType!=2)
            <div class="price_info">
                <button onclick="window.location.href='{{product_url($myproduk)}}'" class="price_add" title="Lihat" type="button">
                    <span class="pr_price">&nbsp;{{price($myproduk->hargaJual,$matauang)}}</span>
                    <span class="pr_add">Lihat</span>
                </button>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</div>