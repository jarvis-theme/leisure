	<!-- Default css-->
	{{generate_theme_css('leisure/assets/css/styles.css')}}
	@if($tema->isiCss=='')

	{{generate_theme_css('leisure/assets/css/base.css')}}
	@else

	{{generate_theme_css('leisure/assets/css/editbase.css')}}
	@endif	
	{{generate_theme_css('leisure/assets/css/responsive.css')}}
	{{generate_theme_css('leisure/assets/css/bootstrap.min.css')}}
	{{generate_theme_css('leisure/assets/css/sosmed.css')}}
	{{createFavicon($toko)}}
	<!-- Other -->