@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
@include('pages.backend.data.components.wizard')
<form method="POST" action="{{ route('store3') }}">
    @csrf
    @include('pages.backend.data.components.resi')
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table-hover table">
                <tbody>
                    <tr>
                        <th>{{ __('Nama Pengirim') }}</th>
                        <td class="text-right">{{ Session::get('sender_name') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Telepon Pengirim') }}</th>
                        <td class="text-right">{{ Session::get('sender_tlp') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Alamat Pengirim') }}</th>
                        <td class="text-right">{{ Session::get('sender_addr') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Nama Penerima') }}</th>
                        <td class="text-right">{{ Session::get('receiver_name') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Telepon Penerima') }}</th>
                        <td class="text-right">{{ Session::get('receiver_tlp') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Alamat Penerima') }}</th>
                        <td class="text-right">{{ Session::get('receiver_addr') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Note') }}</th>
                        <td class="text-right">
                            @if(Session::get('note') != null)
                            {{ Session::get('note') }}
                            @endif
                            {{ __('Tidak Ada') }}
                        </td>
                    </tr>
                    @if(Session::get('office_addr') != null)
                    <tr>
                        <th>{{ __('Alamat Kantor') }}</th>
                        <td class="text-right">{{ Session::get('office_addr') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Telepon Kantor') }}</th>
                        <td class="text-right">{{ Session::get('office_tlp') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Posisi/Jabatan/Divisi') }}</th>
                        <td class="text-right">{{ Session::get('office_pst') }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>{{ __('Volumetric Darat atau Laut') }}</th>
                        <td class="text-right">{{ Session::get('vol_darat') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Volumetric Udara') }}</th>
                        <td class="text-right">{{ Session::get('vol_udara') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Layanan') }}</th>
                        <td class="text-right">{{ Session::get('service') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Sistem Pembayaran') }}</th>
                        <td class="text-right">{{ Session::get('payment') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Kota Asal') }}</th>
                        <td class="text-right">{{ __('Surabaya') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Kota Tujuan') }}</th>
                        <td class="text-right">{{ Session::get('destination') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary">{{ __('Input Data') }}</button>
        </div>
    </div>
</form>
@endsection