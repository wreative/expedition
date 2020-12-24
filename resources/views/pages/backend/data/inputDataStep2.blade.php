@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
{{-- <h2 class="section-title">{{ $kode }}</h2>
<p class="section-lead">
    {{ __('Refrensi nomor resi yang saat ini digunakan') }}
</p> --}}
@include('pages.backend.data.components.wizard')
@if (Session::has('status'))
<div class="alert alert-danger alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ __('Error') }}</div>
        {{ Session::get('status') }}
    </div>
</div>
@endif
<form method="POST" action="{{ route('store2') }}">
    @csrf
    @include('pages.backend.data.components.resi')
    <!-- TODO: Input Hidden -->
    <input type="hidden" value="{{ Session::get('sender_name') }}" name="sender_name">
    <input type="hidden" value="{{ Session::get('sender_tlp') }}" name="sender_tlp">
    <input type="hidden" value="{{ Session::get('sender_addr') }}" name="sender_addr">
    <input type="hidden" value="{{ Session::get('receiver_name') }}" name="receiver_name">
    <input type="hidden" value="{{ Session::get('receiver_tlp') }}" name="receiver_tlp">
    <input type="hidden" value="{{ Session::get('receiver_addr') }}" name="receiver_addr">
    <input type="hidden" value="{{ Session::get('office_addr') }}" name="office_addr">
    <input type="hidden" value="{{ Session::get('office_tlp') }}" name="office_tlp">
    <input type="hidden" value="{{ Session::get('office_pst') }}" name="office_pst">
    <input type="hidden" value="{{ Session::get('note') }}" name="note">
    <input type="hidden" value="{{ Session::get('vol_darat') }}" name="vol_darat">
    <input type="hidden" value="{{ Session::get('vol_udara') }}" name="vol_udara">
    <input type="hidden" value="{{ Session::get('berat') }}" name="berat">
    <input type="hidden" value="{{ Session::get('amount') }}" name="amount">
    {{-- <input type="hidden" value="{{ Session::get('jb')) }}" name="jb"> --}}
    <input type="hidden" value="{{ Session::get('service') }}" name="service">
    <input type="hidden" value="{{ Session::get('payment') }}" name="payment">
    <input type="hidden" value="{{ Session::get('destination') }}" name="destination">
    {{-- <input type="hidden" value="{{ Session::get('jenis')) }}" name="jenis"> --}}
    <!-- TODO: Total Dan Berat -->
    <div class="card">
        <div class="card-header">
            <h4>{{ __('Jenis Barang') }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control select2" name="jb" id="jb">
                    @foreach ($tipe as $t)
                    <option value="{{ $t->id }}">{{ $t->name}}</option>
                    @endforeach
                </select>
                @error('jb')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label class="form-label">{{ __('Layanan Pengiriman') }}</label>
                <div class="form-group">
                    <select class="form-control form-control-sm" name="lp" id="lp">
                        <option value="1">{{ __('Regular') }}</option>
                        <option value="2">{{ __('Over Night Service') }}</option>
                        <option value="3">{{ __('Same Day Service') }}</option>
                    </select>
                    @error('lp')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-none" id="doc">
                <label class="form-label">{{ __('Jumlah Document') }}</label>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-right satuan @error('doc') is-invalid @enderror"
                            name="doc" placeholder="Jumlah dengan satuan">
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('pcs') }}</div>
                        </div>
                    </div>
                    @error('doc')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-none" id="par">
                <label class="form-label">{{ __('Tipe Parcel') }}</label>
                <div class="form-group">
                    <select class="form-control form-control-sm" name="par">
                        <option value="1">{{ __('Small') }}</option>
                        <option value="2">{{ __('Medium') }}</option>
                        <option value="3">{{ __('Large') }}</option>
                    </select>
                    @error('par')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary" type="submit">{{ __('Selanjutnya') }}</button>
        </div>
    </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData2.js') }}"></script>
@endsection