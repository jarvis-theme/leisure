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
                                <div class="action_buttonbar centering">
                                    <p>Silakan masukkan kode order yang mau anda cari!</p>

                                    {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
                                        <input type="text" class="input-large" placeholder="Kode Order" name="kodeorder" required autofocus>
                                        <button type="submit" class="btn theme"><i class="icon-check"></i> Cari Kode</button>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </li>
                    </ol>
                    @else

                    <p>Anda tidak perlu melakukan konfirmasi untuk inquiry</p>
                    @endif
                </div>
            </div>