<div class="counter">
    <a href="javascript:void(0);" class="minicart_link" >
    	<span class="item"><b>{{Shpcart::wishlist()->total_items()}}</b> ITEM(s)</span>
    </a>
</div>
<div class="cart_drop"> <span class="darw"></span>
    <ul>
    	<!-- Item -->
		@if (Shpcart::wishlist()->contents())
			@foreach (Shpcart::wishlist()->contents() as $key => $cart)
				<li><!-- <img src="images/mini_c_item1.png"> -->
					<a href="#">{{$cart['name']}}</a> -
					<span class="price">{{ $cart['qty'] }} Item(s)</span>
				</li>
				<div class="cart_bottom">
				<a href="{{url('checkout')}}">Checkout</a></div>
			@endforeach
		@else
			<li>
            <center><span class="price">Cart masih kosong!</span></center>
			</li>
		@endif
        <!-- endforeach Item shop -->        
    </ul>
</div>