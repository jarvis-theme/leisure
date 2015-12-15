    <div class="full_page">
        <h1>REGISTRASI MEMBER</h1>
        <div id="checkout-step-login">
            {{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
                <div class="col2-set">
                    <div class="col-1">
                        <fieldset>
                            <ul class="form-list">
                                <li>
                                    <label class="required" for="login-email">Nama</label>
                                    <div class="input-box">
                                        <input type="text" name="nama" value="{{Input::old('nama')}}" required  class="input-text">
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Email</label>
                                    <div class="input-box">
                                        <input type="text" name='email' value='{{Input::old("email")}}' class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Password</label>
                                    <div class="input-box">
                                        <input type="password" name="password" class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Konfirmasi Password</label>
                                    <div class="input-box">
                                        <input type="password" name="password_confirmation" class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Captcha</label>
                                    <div class="input-box">
                                        {{ HTML::image(Captcha::img(), 'Captcha image') }}<br><br>
                                        <input type="text" name="captcha" placeholder="Masukan kode yang tertera di atas" class="input-text" required>
                                    </div>
                                </li>
                            </ul>
                            <br/>
                        </fieldset>
                    </div>

                    <div class="col-2">
                        <fieldset>
                            <ul class="form-list">
                                <li>
                                    <label class="required" for="login-email">Alamat</label>
                                    <div class="input-box">
                                        <textarea name='alamat' required>{{Input::old("alamat")}}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Telp / HP</label>
                                    <div class="input-box">
                                        <input type="text" name='telp' value='{{Input::old("telp")}}' required class="input-text">
                                    </div>
                                </li>
                                <li>
                                    <label class="required" for="login-password">Negara</label>
                                    <div class="input-box">
                                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old("negara"), array('required', "style"=>"width: 100%", "name"=>"negara", "id"=>"negara", "data-rel"=>"chosen", "onchange"=>"searchProvinsi(this.value)"))}}
                                    </div>
                                </li>
                                <li>
                                    <div class="clear"></div>
                                    <label class="required" for="login-password">Provinsi</label>
                                    <div class="input-box" id="provinsiPlace">
                                        {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', "style"=>"width: 100%", "name"=>"provinsi", "id"=>"provinsi", "data-rel"=>"chosen", "onchange"=>"searchKabupaten(this.value)"))}}
                                    </div>
                                </li>
                                <li>
                                    <div class="clear"></div>
                                    <label class="required" for="login-password">Kota</label>
                                    <div class="input-box" id="kotaPlace">
                                        {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array("style"=>"width: 100%;", "required", "name"=>"kota", "id"=>"kota", "data-rel"=>"chosen"))}}
                                    </div>
                                </li>
                                <li>
                                    <div class="clear"></div>
                                    <label class="required" for="login-password">Kodepos</label>
                                    <div class="input-box">
                                        <input type="number" name="kodepos" value="{{Input::old("kodepos")}}" class="input-text">
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                </div>

                <div class="clear"></div><br>

                <input class="autowidth" type="checkbox" name="readme" value="1" required> Saya telah membaca dan menyetujui <a class="rules" target="_blank" href="{{URL::to('service')}}">(Persyaratan Member)</a>

                <div class="clear"></div><br>

                <button type="submit" class="button brown_btn" type="button">Daftar</button>
                <br/>
            {{Form::close()}}
        </div>
    </div>