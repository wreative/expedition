@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Cek Data'))
@section('titleContent', __('Cek Data'))

@section('content')
<div class="card">
    <form method="POST" action="{{ route('checkData') }}">
        @csrf
        <div class="card-body pb-0">
            @if (Session::has('status'))
            <div class="alert alert-danger alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <div class="alert-title">{{ __('Error') }}</div>
                    {{ Session::get('status') }}
                </div>
            </div>
            @endif
            <p class="text-muted">
                {{ __('Untuk mengecek data masukkan nomor resi atau transaksi ke dalam kolom yang tersedia.') }}
            </p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code"
                    placeholder="Nomor Resi atau Nomor Transaksi" required autofocus>
            </div>
            @error('code')
            <span class="text-danger" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ __('Cek') }}</button>
        </div>
    </form>
</div>
@endsection