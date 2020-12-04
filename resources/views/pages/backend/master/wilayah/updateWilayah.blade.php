@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Edit Wilayah'))
@section('titleContent', __('Wilayah'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Wilayah') }}</div>
<div class="breadcrumb-item active">{{ __('Edit Data') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="/wilayah/update/{{ $wilayah->id }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Kode Wilayah') }}<code>*</code></label>
                <input type="text" class="form-control kode @error('kode') is-invalid @enderror" name="kode"
                    value="{{ $wilayah->kode }}" readonly>
                @error('kode')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Nama Wilayah') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ $wilayah->name }}">
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Harga') }}<code>*</code></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ __('Rp.') }}
                        </div>
                    </div>
                    <input class="form-control currency @error('price') is-invalid @enderror"
                        value="{{ $wilayah->price }}" type="text" name="price">
                </div>
                @error('price')
                <span class="text-danger" role="alert">
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
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
@endsection
@section('script')
<script src="{{ asset('js/pages/wilayah/updateWilayah.js') }}"></script>
@endsection