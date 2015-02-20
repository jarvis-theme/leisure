<div class="counter">
    <a href="javascript:void(0);" class="minicart_link" >
    	<span class="item"><b>{{Shpcart::cart()->total_items()}}</b> ITEM /</span>
    	<span class="price"><b>{{ jadiRupiah(Shpcart::cart()->total() )}}</b></span>
	</a>
</div>
<div class="cart_drop">
	<span class="darw"></span>
    <ul>
    	<!-- Item -->
    	@if(Shpcart::cart())
    		@foreach (Shpcart::cart()->contents() as $key => $cart)
    		<li>
    			<!-- <img src="images/mini_c_item1.png"> -->
    			<a href="#">{{$cart['name']}}</a>
    			<span class="price">{{ jadiRupiah($cart['qty'] * $cart['price'])}}</span>
			</li>
			<div class="cart_bottom">
				<div class="subtotal_menu">
					<small>Subtotal:</small><big>{{ jadiRupiah(Shpcart::cart()->total() )}}</big>
				</div>
				<a href="{{URL::to('checkout')}}">Cart</a>
			</div>
			@endforeach
		@else
			<li>
				<center><span class="price">Cart masih kosong!</span></center>
			</li>
		@endif
        <!-- endforeach Item shop -->       
    </ul>
</div>