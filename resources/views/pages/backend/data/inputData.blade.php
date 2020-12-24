@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
@include('pages.backend.data.components.wizard')
@if (Session::has('available'))
<div class="alert alert-danger alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ __('Error') }}</div>
        {{ Session::get('available') }}
    </div>
</div>
@endif
<form method="POST" action="{{ route('store') }}">
    @csrf
    @include('pages.backend.data.components.resi')
    @include('pages.backend.data.components.receiverSender')
    @include('pages.backend.data.components.barang')
    @include('pages.backend.data.components.rincian')
    @include('pages.backend.data.components.total')
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/inputData.js') }}"></script>
@endsection