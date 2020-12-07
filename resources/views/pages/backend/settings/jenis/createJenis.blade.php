@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Tambah Jenis Barang'))
@section('titleContent', __('Tambah Jenis Barang'))
@section('breadcrumb', __('Pengaturan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Jenis Barang') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Jenis Barang') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="{{ route('storeType') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Nama') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('Tambah') }}</button>
        </div>
    </form>
</div>
@endsection