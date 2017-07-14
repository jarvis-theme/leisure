		<div class="full_page">
			<h1>Kontak Kami</h1>
			<div class="col_left_main contact_page">
				@if($kontak->lat!='0' || $kontak->lng!='0')
				<iframe class="pull-right" width="565" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
				@else
				<iframe class="pull-right" width="565" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
				@endif
				
				@if($kontak->alamat!='')
				<address>
					<b>{{$kontak->nama}}</b><br/>
					{{$kontak->alamat}}<br/>
					{{$kontak->telepon}}<br/>
				</address>
				@else
				<div></div>
				@endif
				<div class="block">
					@if(isset($emailSent) && $emailSent == true)
					<p class="info">Your email was sent. Huzzah!</p>
					@else
					<form id="contact-us" action="{{url('kontak')}}" method="post">
						<h3>Hubungi Kami</h3>
						<ul id="contact_form">
							<li>
								<input type="text" name="namaKontak" id="contactName" class="txt requiredField" placeholder="Nama" required autofocus />
							</li>
							<li>
								<input type="text" name="emailKontak" id="email" class="txt requiredField email" placeholder="Email" required />
							</li>
							<li>
								<textarea name="messageKontak" id="commentsText" class="txtarea requiredField" placeholder="Pesan" rows="4" required></textarea>
							</li>
							<li>
								<button name="submit" type="submit" class="subbutton brown_btn">Kirim</button>
								<input type="hidden" name="submitted" id="submitted" value="true" />
							</li>
						</ul>
					</form>
				</div>
				@endif          
			</div>
		</div>