@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
    Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
    Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
    Terjadi kesalahan dalam menyimpan data.<br><br>
    @foreach($errors->all() as $message)
    -{{ $message }}<br>
    @endforeach
</ul>
</div>
@endif
 
            <div class="full_page">
                <h1>Kontak Kami</h1>
				<div class="col_left_main contact_page" style="width: 100%;">
                    <!--Google Maps Start-->
                    @if($kontak->lat!='0' || $kontak->lat!='0')
                        <iframe style="float:right" width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                    @else
                        <iframe style="float:right" width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                    @endif
                    <!--Google Maps Ends-->                   
                    <!--Contact Starts-->                    
                    @if($kontak->alamat!='')
                        <address>
                            <b>{{$kontak->nama}}</b><br/>
                            {{$kontak->alamat}}<br/>
                            {{$kontak->telepon}}<br/>
                        </address>
                    @else
                        <div></div>
                    @endif
                    <!--Block Ends-->
                    <!--Form Starts-->
                    <div class="block">
                        <?php if(isset($emailSent) && $emailSent == true) { ?>
                        <p class="info">Your email was sent. Huzzah!</p>
                        <?php } else { ?>
                        <form id="contact-us" action="{{URL::to('kontak')}}" method="post">
                            <h3>Leave a message</h3>
                            <ul id="contact_form">
                                <li>
                                    <input type="text" name="namaKontak" id="contactName" value="" class="txt requiredField" placeholder="Name:" />
                                </li>
                                <li>
                                    <input type="text" name="emailKontak" id="email" value="" class="txt requiredField email" placeholder="Email:" />
                                </li>
                                <li>
                                    <textarea name="messageKontak" id="commentsText" class="txtarea requiredField" placeholder="Message:"></textarea>
                                </li>
                                <li>
                                    <button name="submit" type="submit" class="subbutton brown_btn">Send us Mail!</button>
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--Form Ends-->
                    <?php } ?>
                    <!--Contact Ends-->
                </div>
            </div>