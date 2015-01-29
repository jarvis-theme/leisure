	<!-- Default css-->
	{{HTML::style(dirTemaToko().'leisure/assets/css/styles.css')}}
	@if($tema->isiCss=='')

	{{HTML::style(dirTemaToko().'leisure/assets/css/base.css')}}
	@else

	{{HTML::style(dirTemaToko().'leisure/assets/css/editbase.css')}}
	@endif	
	{{HTML::style(dirTemaToko().'leisure/assets/css/responsive.css')}}
	{{HTML::style(dirTemaToko().'leisure/assets/css/bootstrap.min.css')}}
	{{createFavicon($toko)}}
	<!-- Other -->