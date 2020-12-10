@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
{{-- <h2 class="section-title">{{ $kode }}</h2>
<p class="section-lead">
    {{ __('Refrensi nomor resi yang saat ini digunakan') }}
</p> --}}
@include('pages.backend.data.components.wizard')
<form method="POST" action="{{ route('store2') }}">
    @csrf
    @include('pages.backend.data.components.resi')
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_name')) }}" name="sender_name">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_tlp')) }}" name="sender_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_addr')) }}" name="sender_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_name')) }}" name="receiver_name">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_tlp')) }}" name="receiver_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_addr')) }}" name="receiver_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_addr')) }}" name="office_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_tlp')) }}" name="office_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_pst')) }}" name="office_pst">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('note')) }}" name="note">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('vol_darat')) }}" name="vol_darat">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('vol_udara')) }}" name="vol_udara">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('jb')) }}" name="jb">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('service')) }}" name="service">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('payment')) }}" name="payment">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('destination')) }}" name="destination">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('jenis')) }}" name="jenis">
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
                <label class="form-label">{{ __('Berat') }}</label>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-right satuan @error('berat') is-invalid @enderror"
                            id="berat" name="berat" placeholder="Berat dengan satuan" required>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('kg') }}</div>
                        </div>
                    </div>
                    @error('berat')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">{{ __('Jumlah') }}</label>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right @error('amount') is-invalid @enderror"
                            name="amount" placeholder="Jumlah dengan satuan" required>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('koli') }}</div>
                        </div>
                    </div>
                    @error('amount')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                    @if (Session::has('status'))
                    <span class="text-danger" role="alert">
                        {{ Session::get('status') }}
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">{{ __('Layanan Pengiriman') }}</label>
                <div class="form-group">
                    <select class="form-control form-control-sm" name="lp" id="lp">
                        <option value="Regular">{{ __('Regular') }}</option>
                        <option value="SDS">{{ __('Same Day Service') }}</option>
                        <option value="ONS">{{ __('Over Night Service') }}</option>
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
                            id="doc" name="doc" placeholder="Jumlah dengan satuan" required>
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
                        <option value="Small">{{ __('Small') }}</option>
                        <option value="Medium">{{ __('Medium') }}</option>
                        <option value="Large">{{ __('Large') }}</option>
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
            <button class="btn btn-primary">{{ __('Selanjutnya') }}</button>
        </div>
    </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData2.js') }}"></script>
@endsection