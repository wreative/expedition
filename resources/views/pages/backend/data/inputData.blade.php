@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
<h2 class="section-title">{{ $kode }}</h2>
<p class="section-lead">
    {{ __('Refrensi nomor resi yang saat ini digunakan') }}
</p>
@include('pages.backend.data.components.wizard')
<form method="POST" action="{{ route('store') }}">
    @csrf
    @include('pages.backend.data.components.receiverSender')
    @include('pages.backend.data.components.barang')
    @include('pages.backend.data.components.rincian')
    @include('pages.backend.data.components.total')
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData.js') }}"></script>
@endsection