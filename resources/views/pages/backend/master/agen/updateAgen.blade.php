@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Edit Agen'))
@section('titleContent', __('Agen'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Agen') }}</div>
<div class="breadcrumb-item active">{{ __('Edit Data') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="/agen/update/{{ $agen->id }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Kode Agen') }}<code>*</code></label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code"
                    value="{{ $agen->code }}" readonly required>
                @error('code')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Nama Agen') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $agen->name }}"
                    name="name" autofocus required>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Alamat') }}<code>*</code></label>
                <input type="text" class="form-control @error('addr') is-invalid @enderror" name="addr"
                    value="{{ $agen->address }}" required>
                @error('addr')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Telepon') }}<code>*</code></label>
                <input type="text" class="form-control tlp @error('tlp') is-invalid @enderror" value="{{ $agen->tlp }}"
                    name="tlp" required>
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
<script src="{{ asset('js/pages/agen/extendedAgen.js') }}"></script>
@endsection