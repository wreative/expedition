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
    <input type="hidden" value="{{ $sender_name }}">
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData.js') }}"></script>
@endsection