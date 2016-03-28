            <div class="full_page">
                <h1>Konfirmasi</h1>
                <div class="checkout_steps">
                    @if($checkouttype!=2)
                    <ol id="checkoutSteps">
                        <li class="active">
                            <div class="step-title">
                                <h2>Konfirmasi Order</h2>
                            </div>
                            <div id="checkout-step-login">
                                <div class="action_buttonbar">
                                    <p>Silakan masukkan kode order yang mau anda cari!</p>

                                    {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
                                        <input type="text" class="input-large" placeholder="Kode Order" name="kodeorder" required>
                                        <button type="submit" class="btn theme"><i class="icon-check"></i> Cari Kode</button>
                                    {{Form::close()}}
                                </div><br>
                            </div>
                        </li>
                    </ol>
                    @else

                    <p>Anda tidak perlu melakukan konfirmasi untuk inquiry</p>
                    @endif
                </div>
                <!-- <div class="col_right">
                    <div class="right_promo">
                        @foreach(vertical_banner() as $banners)
                        <img src="{{url(banner_image_url($banners->gambar))}}">
                        @endforeach
                    </div>
                </div> -->
            </div>