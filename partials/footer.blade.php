<div class="footer_container">
	<footer>
		<div style="padding:10px 20px">
			<ul class="footer_links">
				@foreach($tautan as $key=>$group)	
				<li><span>{{$group->nama}}</span>                
					<ul>
						@foreach($group->link as $key=>$link)	
						<li>
							@if($link->halaman=='1')
								@if($link->linkTo == 'halaman/about-us')
								<a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a>
								@else
								<a href='{{url("halaman/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
								@endif
							@elseif($link->halaman=='2')
								<a href='{{url("blog/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
							@elseif($link->url=='1')
								<a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a>
							@else
								<a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a>
							@endif
						</li>
						@endforeach
					</ul>
				</li>
				@endforeach	
			</ul>
			<div class="footer_customblock">
			@if($kontak->alamat!='')
				<!-- <span>introducing </span><br> -->
				<div class="contact_info">Alamat : 
					<big><br>{{$kontak->alamat}}</big>
				</div>
				<div class="contact_info">Telepon : 
					<big><br>{{$kontak->telepon}}</big>
				</div>
				<div class="contact_info">Email : 
					<big><br>
						<a style="text-decoration: none; color:black;" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
					</big>
				</div>
				@if($kontak->ym)
				<div class="contact_info">YM : 
					<big><br>{{ymyahoo($kontak->ym)}}</big>
				</div>
				@endif
			@else      
				<div></div>
			@endif  
			</div>
			<div class="clear"></div>  
		</div>    
		<address>
			<p>Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. All Rights Reserved. Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a></p>
			
			@foreach(list_banks() as $bank)	
			<img src="{{bank_logo($bank)}}" alt="{{$bank->name}}" />
			@endforeach
			@foreach(list_payments() as $pay)	
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)	
                <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" />
                @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)	
                <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" />
            @endif
		</address>
	</footer>
<div>
<div class="clear"></div>    
{{pluginPowerup()}}
