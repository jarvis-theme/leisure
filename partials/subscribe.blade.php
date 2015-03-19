<div class="subscribe_block">
    <div class="find_us">
        <h3>Find us on</h3>
        @if($sosial->fb)
            <a class="icon-facebook" target="_blank" href="{{$sosial->fb}}"></a>
        @endif
        @if($sosial->tw)
            <a class="icon-twitter" target="_blank" href="{{$sosial->tw}}"></a>
        @endif
        @if($sosial->gp)
            <a class="icon-googleplus" target="_blank" href="{{$sosial->gp}}"></a>
        @endif
        @if($sosial->pt)
            <a class="icon-pinterest" target="_blank" href="{{$sosial->pt}}"></a>
        @endif
        @if($sosial->tl)
            <a class="icon-tumblr" target="_blank" href="{{$sosial->tl}}"></a>
        @endif
        @if($sosial->ig)
            <a class="icon-instagram" target="_blank" href="{{$sosial->ig}}"></a>
        @endif
        <!-- <a class="rss" href="#"></a> -->
    </div>
    <div class="subscribe_nl" id="mc_embed_signup">
        <h3>Bergabung di Newsletter kami</h3>
        <small>Jangan lewatkan update terbaru dari toko kami dengan bergabung di mailing list kami – sign up to our newsletter now.</small>
        <form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate" target="_blank" novalidate>
            <input type="email" value="" placeholder="Enter your email" name="EMAIL" class="input-text required email" id="newsletter mce-EMAIL">
            <button class="button" title="" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}></button>
        </form>
    </div>
</div>
<!--Newsletter_subscribe Ends-->