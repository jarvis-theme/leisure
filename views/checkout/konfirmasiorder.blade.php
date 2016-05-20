        <div class="full_page">
            <h1>Konfirmasi</h1>
            <div class="table-responsive">
                <center>
                    <table class="data-table cart-table" id="shopping-cart-table" cellpadding="0" cellspacing="0">
                        <tr>
                            <th align="center">Kode Order</th>
                            <th align="center">Tanggal Order</th>
                            <th align="center">Order</th>
                            <th align="center">Jumlah</th>
                            <th align="center">No Resi</th>
                            <th align="center">Status</th>
                        </tr>
                        <tr>
                            <td>{{ prefixOrder().$order->kodeOrder }}</td>
                            <td class="align_center vline">{{ waktu($order->tanggalOrder) }}</td>
                            <td class="align_center vline">
                                <ul>
                                    <li>
                                        @foreach ($order->detailorder as $detail)
                                            <li>{{$detail->produk->nama}} {{$detail->opsiSkuId != 0 ? ( $detail->opsisku['opsi1'] == '' && $detail->opsisku['opsi2'] == '' && $detail->opsisku['opsi3'] == '' ? '' : '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')'):''}} - {{$detail->qty}}</li>
                                        @endforeach
                                    </li>
                                </ul>
                            </td>
                            <td class="align_center vline">{{price($order->total)}}</td>
                            <td class="align_center vline">{{$order->noResi}}</td>
                            <td class="align_center vline">
                                @if($order->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($order->status==1)
                                <span class="label label-important">Konfirmasi diterima</span>
                                @elseif($order->status==2)
                                <span class="label label-info">Pembayaran diterima</span>
                                @elseif($order->status==3)
                                <span class="label label-success">Terkirim</span>
                                @elseif($order->status==4)
                                <span class="label label-default">Batal</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
            <br><br>

            <div class="checkout_steps">
                <ol id="checkoutSteps">
                    <li class="active">
                        @if($order->jenisPembayaran==1 && $order->status == 0)
                        <div class="step-title">
                            <h2>Konfirmasi Form</h2>
                        </div>
                        <div id="checkout-step-login">
                            <div class="action_buttonbar">
                                <div class="well">
                                    {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}   
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail"> Nama Pengirim</label>
                                            <div class="controls">
                                                <input class="span6" type="text" name="nama" value="{{Input::old('nama')}}" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail"> No Rekening</label>
                                            <div class="controls">
                                                <input type="number" class="span6" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail"> Rekening Tujuan</label>
                                            <div class="controls" id="list-banks">
                                                <select name="bank" required>
                                                    <option value="">-- Pilih Bank Tujuan --</option>
                                                    @foreach ($banktrans as $bank)
                                                    <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - a/n {{$bank->atasNama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail"> Jumlah</label>
                                            <div class="controls">
                                                <input class="span6" type="text" name="jumlah" value="{{$order->total}}" required>
                                            </div>
                                        </div>                                          

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn theme"><i class="icon-check"></i> {{trans('content.step5.confirm_btn')}}</button>
                                            </div>
                                        </div>
                                    {{Form::close()}}
                                </div>
                                <br>
                            </div>
                        </div>
                        @endif

                        @if($paymentinfo!=null)
                        <h3><center>Paypal Payment Details</center></h3><br>
                        <hr>
                        <div class="table-responsive">
                            <table class='table table-bordered'>
                                <tr>
                                    <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                                </tr>
                                <tr>
                                    <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                                </tr>
                                <tr>
                                    <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                                </tr>
                                <tr>
                                    <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                                </tr>
                                <tr>
                                    <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                                </tr>
                                <tr>
                                    <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                                </tr>
                            </table>
                        </div>
                        <p>Thanks you for your order.</p>
                        <br>
                        @endif 
                      
                        @if($order->jenisPembayaran==2)
                        <center>
                            <h3>{{trans('content.step5.confirm_btn')}} Paypal</h3><br>
                            <p>{{trans('content.step5.paypal')}}</p><br>
                        </center>
                        <center id="paypal">{{$paypalbutton}}</center>
                        <br>
                        @elseif($order->jenisPembayaran==4) 
                            @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
                            <center>
                                <h3>{{trans('content.step5.confirm_btn')}} iPaymu</h3>
                                <hr>
                                <p>{{trans('content.step5.ipaymu')}}</p>
                                <a class="btn btn-info" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
                            </center>
                            <br>
                            @endif
                        @elseif($order->jenisPembayaran == 5 && $order->status == 0)
                        <center>
                            <h3><strong>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</strong></h3><br>
                            <p>{{trans('content.step5.doku')}}</p><br>
                            <button class="btn btn-danger" onclick="location.href='{{ $doku_button }}'">{{trans('content.step5.doku_btn')}}</button>
                        </center>
                        <br>
                        @elseif($order->jenisPembayaran == 6 && $order->status == 0)
                        <center>
                            <h3>{{trans('content.step5.confirm_btn')}} Bitcoin</h3><br>
                            <p>{{trans('content.step5.bitcoin')}}</p><br>
                            {{$bitcoinbutton}}
                        </center>
                        <br>
                        @elseif($order->jenisPembayaran == 8 && $order->status == 0)
                        <center>
                            <h3>{{trans('content.step5.confirm_btn')}} Veritrans</h3><br>
                            <p>{{trans('content.step5.veritrans')}}</p><br>
                            <button class="btn btn-info" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                        </center>
                        <br>
                        @endif
                    </li>
                </ol>
            </div>
            <!-- <div class="col_right">
                <div class="right_promo">
                    @foreach(vertical_banner() as $banners)
                    <img src="{{url(banner_image_url($banners->gambar))}}" alt="Info Promo">
                    @endforeach
                </div>
            </div> -->
        </div>