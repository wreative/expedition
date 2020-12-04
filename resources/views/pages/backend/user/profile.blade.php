@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Profile'))
@section('titleContent', __('Profile'))
@section('breadcrumb', __('Dashboard'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Profile') }}</div>
@endsection

@section('content')
<div class="mt-5">
    <div class="card profile-widget">
        {{-- <div class="profile-widget-header text-center">
            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle" style="float: unset">
    </div> --}}
    <div class="profile-widget-header">
        <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
        <div class="profile-widget-items">
            <div class="profile-widget-item">
                <div class="profile-widget-item-label">{{ __('Email') }}</div>
                <div class="profile-widget-item-value">{{ Auth::user()->email }}</div>
            </div>
            <div class="profile-widget-item">
                <div class="profile-widget-item-label">{{ __('Dibuat Tanggal') }}</div>
                <div class="profile-widget-item-value">{{ date_format(Auth::user()->created_at,"d-m-Y") }}</div>
            </div>
        </div>
    </div>
    <div class="profile-widget-description">
        <div class="profile-widget-name">{{ Auth::user()->name }} <div class="text-muted d-inline font-weight-normal">
                <div class="slash"></div>
                @if (Auth::user()->previleges == '1')
                {{ __('Administrator') }}
                @else
                {{ __('Agen BatuBeling Express') }}
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection