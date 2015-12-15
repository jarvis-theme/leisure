<div class="counter">
    <a href="javascript:void(0);" class="minicart_link">
    	<span class="item"><b>{{Shpcart::cart()->total_items()}}</b> ITEM /</span>
    	<span class="price"><b>{{ price(Shpcart::cart()->total() )}}</b></span>
	</a>
</div>
<div class="cart_drop">
	<span class="darw"></span>
    <ul>
    	@if(Shpcart::cart())
    		@foreach (Shpcart::cart()->contents() as $key => $cart)
    		<li>
    			<a href="#">{{$cart['name']}}</a>
    			<span class="price pull-right">{{ price($cart['qty'] * $cart['price'])}}</span>
			</li>
			@endforeach
			<div class="cart_bottom">
				<div class="subtotal_menu">
					<small>Subtotal:</small><big>{{ price(Shpcart::cart()->total() )}}</big>
				</div>
				<a href="{{url('checkout')}}">Cart</a>
			</div>
		@else
			<li>
				<center><span class="price">Cart masih kosong!</span></center>
			</li>
		@endif
    </ul>
</div>