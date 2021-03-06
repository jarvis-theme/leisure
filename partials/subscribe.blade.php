﻿<div class="subscribe_block">
    <div class="find_us">
        <div class="follow">
            <h3>Ikuti Kami</h3>
            @if($sosial->fb)
                <a class="icon-facebook" target="_blank" href="{{$sosial->fb}}" title="Facebook"></a>
            @endif
            @if($sosial->tw)
                <a class="icon-twitter" target="_blank" href="{{$sosial->tw}}" title="Twitter"></a>
            @endif
            @if($sosial->gp)
                <a class="icon-googleplus" target="_blank" href="{{$sosial->gp}}" title="Google+"></a>
            @endif
            @if($sosial->pt)
                <a class="icon-pinterest" target="_blank" href="{{$sosial->pt}}" title="Pinterest"></a>
            @endif
            @if($sosial->tl)
                <a class="icon-tumblr" target="_blank" href="{{$sosial->tl}}" title="Tumblr"></a>
            @endif
            @if($sosial->ig)
                <a class="icon-instagram" target="_blank" href="{{$sosial->ig}}" title="Instagram"></a>
            @endif
            @if($sosial->picmix)
                <a target="_blank" href="{{url($sosial->picmix)}}" title="Picmix">
                    <img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                </a>
            @endif 
        </div>
    </div>
    <div class="subscribe_nl" id="mc_embed_signup">
        <div class="subscribe-news">
            <h3>Bergabung di Newsletter kami</h3>
            <small>Dapatkan info produk terbaru & penawaran menarik lainnya.</small>
            <form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate" target="_blank" novalidate>
                <input type="email" placeholder="Masukkan email anda" name="email" class="input-text required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
                <button class="button" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}></button>
            </form>
        </div>
    </div>
</div>