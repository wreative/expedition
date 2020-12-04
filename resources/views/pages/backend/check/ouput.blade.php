@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Hasil Data'))
@section('titleContent', __('Hasil Data'))
@section('breadcrumb', __('Cek Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Hasil') }}</div>
@endsection

@section('content')
<div class="invoice">
    <div class="invoice-print">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-title">
                    <h4>{!!DNS2D::getBarcodeSVG($result->code, 'QRCODE')!!}</h4>
                    <div class="invoice-number">{{ __('Transaksi #').$result->code }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>{{ __('Dikirim Oleh:') }}</strong><br>
                            {{ $result->sender_name }}<br>
                            {{ $result->sender_addr }}<br>
                            {{ $result->sender_tlp }}<br>
                        </address>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <address>
                            <strong>{{ __('Diterima Oleh:') }}</strong><br>
                            {{ $result->receiver_name }}<br>
                            {{ $result->receiver_addr }}<br>
                            {{ $result->receiver_tlp }}<br>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>{{ __('Dibuat Pada:') }}</strong><br>
                            {{ date('d-m-Y',strtotime($result->created_at)) }}<br>
                        </address>
                    </div>
                    @if ($result->office_addr != null)
                    <div class="col-md-6 text-md-right">
                        <address>
                            <strong>{{ __('Kantor:') }}</strong><br>
                            {{ $result->office_addr }}<br>
                            {{ $result->office_tlp }}<br>
                            {{ $result->office_pst }}<br>
                        </address>
                    </div>
                    @endif
                </div>
                <blockquote class="blockquote">
                    <p class="mb-0">{{ $result->note }}</p>
                    <footer class="blockquote-footer">{{ __('Catatan') }}</footer>
                </blockquote>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="section-title">{{ __('Nomor Resi') }}</div>
                <p class="section-lead">{{ $result->nomor }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-md">
                        <tbody>
                            <tr>
                                <th data-width="40" style="width: 40px;">{{ __('Nama') }}</th>
                                <th>Item</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-right">Totals</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mouse Wireless</td>
                                <td class="text-center">$10.99</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$10.99</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Keyboard Wireless</td>
                                <td class="text-center">$20.00</td>
                                <td class="text-center">3</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Headphone Blitz TDR-3000</td>
                                <td class="text-center">$600.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$600.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="section-title">Payment Method</div>
                        <p class="section-lead">The payment method that we provide is to make it easier for you
                            to pay invoices.</p>
                        <div class="d-flex">
                            <div class="mr-2 bg-visa" data-width="61" data-height="38"
                                style="width: 61px; height: 38px;"></div>
                            <div class="mr-2 bg-jcb" data-width="61" data-height="38"
                                style="width: 61px; height: 38px;"></div>
                            <div class="mr-2 bg-mastercard" data-width="61" data-height="38"
                                style="width: 61px; height: 38px;"></div>
                            <div class="bg-paypal" data-width="61" data-height="38" style="width: 61px; height: 38px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                            <div class="invoice-detail-name">Subtotal</div>
                            <div class="invoice-detail-value">$670.99</div>
                        </div>
                        <div class="invoice-detail-item">
                            <div class="invoice-detail-name">Shipping</div>
                            <div class="invoice-detail-value">$15</div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                            <div class="invoice-detail-name">Total</div>
                            <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-md-right">
        <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
    </div>
</div>
@endsection