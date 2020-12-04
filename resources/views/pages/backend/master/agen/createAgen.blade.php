@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Tambah Agen'))
@section('titleContent', __('Agen'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Agen') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Data') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="{{ route('storeAgen') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Kode Agen') }}<code>*</code></label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code"
                    value="{{ $code }}" readonly required>
                @error('code')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Nama Agen') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus
                    required>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Email') }}<code>*</code></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" name="email" required autocomplete="email">
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Password') }}<code>*</code></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Konfirmasi Password') }}<code>*</code></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label>{{ __('Alamat') }}<code>*</code></label>
                <input type="text" class="form-control @error('addr') is-invalid @enderror" name="addr" required>
                @error('addr')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Telepon') }}<code>*</code></label>
                <input type="text" class="form-control tlp @error('tlp') is-invalid @enderror" name="tlp" required>
                @error('tlp')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
@endsection
@section('script')
<script src="{{ asset('js/pages/agen/createAgen.js') }}"></script>
@endsection