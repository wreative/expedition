@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
<h2 class="section-title">{{ $kode }}</h2>
<p class="section-lead">
    {{ __('Refrensi nomor resi yang saat ini digunakan') }}
</p>
<form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <!-- TODO:Pengirim -->
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Pengirim') }}</h4>
                </div>
                <input type="hidden" class="form-control" name="resi" value="{{ $kode }}">
                <input type="hidden" class="form-control" name="agen" value="{{ $agen }}">
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ __('Nama') }}<code>*</code></label>
                        <input type="text" class="form-control @error('sender_name') is-invalid @enderror"
                            name="sender_name" required autofocus>
                        @error('sender_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Telepon') }}<code>*</code></label>
                        <input type="text" class="form-control tlp @error('sender_tlp') is-invalid @enderror"
                            name="sender_tlp" required>
                        @error('sender_tlp')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Alamat') }}<code>*</code></label>
                        <input type="text" class="form-control @error('sender_addr') is-invalid @enderror"
                            name="sender_addr" required>
                        @error('sender_addr')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- TODO: Penerima -->
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Penerima') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ __('Nama') }}<code>*</code></label>
                        <input type="text" class="form-control @error('receiver_name') is-invalid @enderror"
                            name="receiver_name" required>
                        @error('receiver_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Telepon') }}<code>*</code></label>
                        <input type="text" class="form-control tlp @error('receiver_tlp') is-invalid @enderror"
                            name="receiver_tlp" required>
                        @error('receiver_tlp')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Alamat') }}<code>*</code></label>
                        <input type="text" class="form-control @error('receiver_addr') is-invalid @enderror"
                            name="receiver_addr" required>
                        @error('receiver_addr')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>{{ __('Kantor') }}</h4>
            <div class="card-header-action">
                <a data-collapse="#receiver-office" class="btn btn-icon btn-info" href="javascript:void(0)">
                    <i class="fas fa-minus"></i></a>
            </div>
        </div>
        <div class="collapse" id="receiver-office">
            <div class="card-body">
                <div class="form-group">
                    <label>{{ __('Alamat Kantor') }}<code>*</code></label>
                    <input type="text" class="form-control @error('office_addr') is-invalid @enderror"
                        name="office_addr">
                    @error('office_addr')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Telepon Kantor') }}<code>*</code></label>
                    <input type="text" class="form-control @error('office_tlp') is-invalid @enderror" name="office_tlp">
                    @error('office_tlp')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Divisi/Bagian/Jabatan') }}<code>*</code></label>
                    <input type="text" class="form-control @error('office_pst') is-invalid @enderror" name="office_pst">
                    @error('office_pst')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                {{ __('Tambahan informasi untuk pengiriman dengan tujuan kantor, 
                alamat di tunjukkan untuk kantor bukan perorangan') }}
            </div>
        </div>
    </div>
    <div class="card">
        <!-- TODO: Catatan -->
        <div class="card-header">
            <h4>{{ __('Catatan') }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <textarea class="form-control" rows="3" style="height: 100px" name="note"></textarea>
            </div>
        </div>
    </div>
    <!-- TODO: Barang -->
    <h2 class="section-title">{{ __('Barang') }}</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Volume') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="number" class="form-control text-right @error('panjang') is-invalid @enderror"
                                id="panjang" name="panjang" placeholder="Panjang">
                            <div class="input-group-append">
                                <div class="input-group-text">{{ __('cm') }}</div>
                            </div>
                        </div>
                        @error('panjang')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="number" class="form-control text-right @error('lebar') is-invalid @enderror"
                                id="lebar" name="lebar" placeholder="Lebar">
                            <div class="input-group-append">
                                <div class="input-group-text">{{ __('cm') }}</div>
                            </div>
                        </div>
                        @error('lebar')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="number" class="form-control text-right @error('tinggi') is-invalid @enderror"
                                id="tinggi" name="tinggi" placeholder="Tinggi">
                            <div class="input-group-append">
                                <div class="input-group-text">{{ __('cm') }}</div>
                            </div>
                        </div>
                        @error('tinggi')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="section-title">{{ __('Total') }}</div>
                    <div class="form-group">
                        <label>{{ __('Volumetric Darat atau Laut') }}</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control text-right" id="tdl" name="tdl" placeholder="Total"
                                readonly>
                            <div class="input-group-append">
                                <div class="input-group-text">{{ __('kg') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('Volumetric Udara') }}</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control text-right" id="tu" name="tu" placeholder="Total"
                                readonly>
                            <div class="input-group-append">
                                <div class="input-group-text">{{ __('kg') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Berat') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="text"
                                class="form-control text-right satuan @error('berat') is-invalid @enderror" id="berat"
                                name="berat" placeholder="Berat dengan satuan" required>
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
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Jumlah') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="number" max="50"
                                class="form-control text-right @error('amount') is-invalid @enderror" name="amount"
                                placeholder="Jumlah dengan satuan" required>
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
            </div>
            <div class="card card-body">
                <div class="form-group">
                    <label class="form-label">{{ __('Jenis Barang') }}</label>
                    <select class="form-control select2" name="jb">
                        @foreach ($tipe as $t)
                        <option value="{{ $t->id }}">{{ $t->name}}</option>
                        @endforeach
                    </select>
                    {{-- <div class="selectgroup w-100">
                        @foreach ($tipe as $t)
                        <label class="selectgroup-item">
                            <input type="radio" name="jb" value="{{ $t->id }}" class="selectgroup-input">
                    <span class="selectgroup-button">{{ $t->name }}</span>
                    </label>
                    @endforeach --}}
                    {{-- <label class="selectgroup-item">
                            <input type="radio" name="jb" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('Paket') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="jb" value="2" class="selectgroup-input">
                        <span class="selectgroup-button">{{ __('Dokumen') }}</span>
                    </label> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- TODO: Rincian Pengiriman -->
    <h2 class="section-title">{{ __('Rincian Pengiriman') }}</h2>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label class="form-label">{{ __('Layanan') }}</label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="service" value="1" class="selectgroup-input">
                        <span class="selectgroup-button">{{ __('Domestik Express') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="service" value="2" class="selectgroup-input">
                        <span class="selectgroup-button">{{ __('City Courier') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="service" value="3" class="selectgroup-input">
                        <span class="selectgroup-button">{{ __('Prioritas') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="service" value="4" class="selectgroup-input" checked>
                        <span class="selectgroup-button">{{ __('Tujuan Khusus') }}</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">{{ __('Sistem Pembayaran') }}</label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="payment" value="1" class="selectgroup-input" checked>
                        <span class="selectgroup-button">{{ __('Tunai') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="payment" value="2" class="selectgroup-input" disabled>
                        <span class="selectgroup-button">{{ __('COD') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="payment" value="3" class="selectgroup-input" disabled>
                        <span class="selectgroup-button">{{ __('Tagihan') }}</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Kota Tujuan') }}</label>
                <select class="form-control select2" name="destination" id="destination">
                    <option>{{ __('Kota') }}</option>
                    @foreach ($wilayah as $w)
                    <option value="{{ $w->price }}">{{ $w->name}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="dst" id="dst">
            </div>
        </div>
    </div>
    <!-- TODO: Total -->
    <div class="card">
        <div class="card-header">
            <h4>{{ __('Total') }}</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Biaya Kirim') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control" type="text" id="bk" name="bk" placeholder="Total" readonly>
                </div>
                @if (Session::has('total'))
                <span class="text-danger" role="alert">
                    {{ Session::get('total') }}
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>{{ __('Biaya Potong') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control currency" id="bpo" name="bpo" placeholder="Total" readonly>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Biaya Packing') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control currency" id="bpa" name="bpa" placeholder="Total" readonly>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Biaya Lain') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control currency" id="bl" name="bl" placeholder="Total" readonly>
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Total Biaya') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control currency" id="tb" name="tb" placeholder="Total" readonly>
                </div>
            </div>
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary" id="save-btn">{{ __('Input Data') }}</button>
        </div>
    </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData.js') }}"></script>
@endsection