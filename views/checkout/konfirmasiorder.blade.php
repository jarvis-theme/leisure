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
                            <td class="align_center vline text-left">{{ waktu($order->tanggalOrder) }}</td>
                            <td class="align_center vline">
                                <ul id="confirm">
                                    @foreach ($order->detailorder as $detail)
                                        <li>{{$detail->produk->nama}} {{$detail->opsiSkuId != 0 ? ( $detail->opsisku['opsi1'] == '' && $detail->opsisku['opsi2'] == '' && $detail->opsisku['opsi3'] == '' ? '' : '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')'):''}} - {{$detail->qty}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="align_center vline text-left">{{price($order->total)}}</td>
                            <td class="align_center vline text-left">{{$order->noResi}}</td>
                            <td class="align_center vline text-left">
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
                            <h2>{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</h2>
                        </div>
                        <div id="checkout-step-login">
                            <div class="action_buttonbar mt0" style="max-width: 330px; padding: 15px; margin: 0 auto;">
                                <div class="well">
                                    {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}} 
                                        <div class="pad10">
                                            <div class="control-group mb10">
                                                <label class="control-label"> Nama Pengirim</label>
                                                <div class="controls">
                                                    <input class="wd100" type="text" name="nama" value="{{Input::old('nama')}}" required autofocus>
                                                </div>
                                            </div>
                                            <div class="control-group mb10">
                                                <label class="control-label"> No Rekening</label>
                                                <div class="controls">
                                                    <input class="wd100" type="number" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" required>
                                                </div>
                                            </div>
                                            <div class="control-group mb10">
                                                <label class="control-label"> Rekening Tujuan</label>
                                                <div class="input-box">
                                                    <select class="wd100" name="bank" required>
                                                        <option value="">-- Pilih Bank Tujuan --</option>
                                                        @foreach ($banktrans as $bank)
                                                        <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - a/n {{$bank->atasNama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="control-group mb30">
                                                <label class="control-label"> Jumlah</label>
                                                <div class="controls">
                                                    <input type="text" name="jumlah" value="{{ floor($order->total) }}" required>
                                                </div>
                                            </div>

                                            <div class="control-group mb10">
                                                <div class="controls">
                                                    <button type="submit" class="btn theme"><i class="icon-check"></i> {{trans('content.step5.confirm_btn')}}</button>
                                                </div>
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
                            <h3><b>{{trans('content.step5.confirm_btn')}} Paypal</b></h3>
                            <p>{{trans('content.step5.paypal')}}</p><br>
                        </center>
                        <center id="paypal">{{$paypalbutton}}</center>
                        <br>
                        @elseif($order->jenisPembayaran==4) 
                            @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
                            <center>
                                <h3><b>{{trans('content.step5.confirm_btn')}} iPaymu</b></h3>
                                <p>{{trans('content.step5.ipaymu')}}</p>
                                <br>
                                <a class="btn-pay" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
                            </center>
                            <br>
                            @endif
                        @elseif($order->jenisPembayaran == 5 && $order->status == 0)
                        <center>
                            <h3><b>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</b></h3>
                            <p>{{trans('content.step5.doku')}}</p><br>
                            {{ $doku_button }}
                        </center>
                        <br>
                        @elseif($order->jenisPembayaran == 6 && $order->status == 0)
                        <center>
                            <h3><b>{{trans('content.step5.confirm_btn')}} Bitcoin</b></h3>
                            <p>{{trans('content.step5.bitcoin')}}</p><br>
                            {{$bitcoinbutton}}
                        </center>
                        <br>
                        @elseif($order->jenisPembayaran == 8 && $order->status == 0)
                        <center>
                            <h3><b>{{trans('content.step5.confirm_btn')}} Veritrans</b></h3>
                            <p>{{trans('content.step5.veritrans')}}</p><br>
                            <button class="btn-pay" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                        </center>
                        <br>
                        @endif
                    </li>
                </ol>
            </div>
        </div>