@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Nomor Resi'))
@section('titleContent', __('Nomor Resi'))
@section('breadcrumb', __('Input Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Nomor Resi') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @if(Session::get('resi') == null)
        <h4 class="mt-4 text-center">
            {{ __('Tidak ada data resi, silahkan input data terlebih dahulu') }}
        </h4>
        @else
        <div class="row">
            <div class="col-sm mb-3 text-center">
                {!!DNS2D::getBarcodeSVG(Session::get('resi'), 'QRCODE', 10, 10)!!}
            </div>
            <div class="col-sm align-self-center">
                {!!DNS1D::getBarcodeSVG(Session::get('resi'), 'C39', 1, 40)!!}
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group mb-3">
                <input type="text" id="resi" class="form-control" value="{{ Session::get('resi') }}" readonly>
                <div class="input-group-append">
                    <button onclick="getResi()" class="btn btn-primary" type="button">{{ __("Salin Resi") }}</button>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="input-group mb-3">
                <input type="text" id="transaksi" class="form-control" value="{{ Session::get('transaksi') }}" readonly>
                <div class="input-group-append">
                    <button onclick="getTransaksi()" class="btn btn-primary"
                        type="button">{{ __("Salin Kode Transaksi") }}</button>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/pages/resi.js') }}"></script>
@endsection