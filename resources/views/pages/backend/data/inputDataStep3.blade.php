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
            <h2 class="section-title">{{ __('Pengirim') }}</h2>
            <table class="table-hover table">
                <tbody>
                    <tr>
                        <th>{{ __('Nama') }}</th>
                        <td class="text-right">{{ Session::get('sender_name') }}</td>
                        <input type="hidden" value="{{ Session::get('sender_name') }}" name="sender_name">
                    </tr>
                    <tr>
                        <th>{{ __('Telepon') }}</th>
                        <td class="text-right">{{ Session::get('sender_tlp') }}</td>
                        <input type="hidden" value="{{ Session::get('sender_tlp') }}" name="sender_tlp">
                    </tr>
                    <tr>
                        <th>{{ __('Alamat') }}</th>
                        <td class="text-right">{{ Session::get('sender_addr') }}</td>
                        <input type="hidden" value="{{ Session::get('sender_addr') }}" name="sender_addr">
                    </tr>
                </tbody>
            </table>
            <h2 class="section-title">{{ __('Penerima') }}</h2>
            <table class="table-hover table">
                <tbody>
                    <tr>
                        <th>{{ __('Nama') }}</th>
                        <td class="text-right">{{ Session::get('receiver_name') }}</td>
                        <input type="hidden" value="{{ Session::get('receiver_name') }}" name="receiver_name">
                    </tr>
                    <tr>
                        <th>{{ __('Telepon') }}</th>
                        <td class="text-right">{{ Session::get('receiver_tlp') }}</td>
                        <input type="hidden" value="{{ Session::get('receiver_tlp') }}" name="receiver_tlp">
                    </tr>
                    <tr>
                        <th>{{ __('Alamat') }}</th>
                        <td class="text-right">{{ Session::get('receiver_addr') }}</td>
                        <input type="hidden" value="{{ Session::get('receiver_addr') }}" name="receiver_addr">
                    </tr>
                    <tr>
                        <th>{{ __('Note') }}</th>
                        <td class="text-right">
                            @if(Session::get('note') != null)
                            {{ Session::get('note') }}
                            @else
                            {{ __('Tidak Ada') }}
                            @endif
                        </td>
                        <input type="hidden" value="{{ Session::get('note') }}" name="note">
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
                    <input type="hidden" value="{{ Session::get('office_addr') }}" name="office_addr">
                    <input type="hidden" value="{{ Session::get('office_tlp') }}" name="office_tlp">
                    <input type="hidden" value="{{ Session::get('office_pst') }}" name="office_pst">
                </tbody>
            </table>
            <table class="table-hover table">
                <h2 class="section-title">{{ __('Informasi Detail') }}</h2>
                <tbody>
                    <tr>
                        <th>{{ __('Volumetric Darat atau Laut') }}</th>
                        <td class="text-right">{{ Session::get('vol_darat').__('Kg') }}</td>
                        <input type="hidden" value="{{ Session::get('vol_darat') }}" name="vol_darat">
                    </tr>
                    <tr>
                        <th>{{ __('Volumetric Udara') }}</th>
                        <td class="text-right">{{ Session::get('vol_udara').__('Kg') }}</td>
                        <input type="hidden" value="{{ Session::get('vol_udara') }}" name="vol_udara">
                    </tr>
                    <tr>
                        <th>{{ __('Layanan') }}</th>
                        <td class="text-right">{{ Session::get('service')->name }}</td>
                        <input type="hidden" value="{{ Session::get('service')->id }}" name="service">
                    </tr>
                    <tr>
                        <th>{{ __('Sistem Pembayaran') }}</th>
                        <td class="text-right">{{ Session::get('payment')->name }}</td>
                        <input type="hidden" value="{{ Session::get('payment')->id }}" name="payment">
                    </tr>
                    <tr>
                        <th>{{ __('Kota Asal') }}</th>
                        <td class="text-right">{{ __('Surabaya') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Kota Tujuan') }}</th>
                        <td class="text-right">{{ Session::get('destination')->name }}</td>
                        <input type="hidden" value="{{ Session::get('destination')->id }}" name="destination">
                    </tr>
                    <tr>
                        <th>{{ __('Jenis Barang') }}</th>
                        <td class="text-right">{{ Session::get('jb')->name }}</td>
                        <input type="hidden" value="{{ Session::get('jb')->id }}" name="jb">
                    </tr>
                </tbody>
            </table>
            <table class="table-hover table">
                <h2 class="section-title">{{ __('Total') }}</h2>
                <tbody>
                    <tr>
                        <th>{{ __('Biaya Kirim') }}</th>
                        <td class="text-right">{{ Session::get('bk') }}</td>
                        <input type="hidden" value="{{ Session::get('bk') }}" name="bk">
                    </tr>
                    <tr>
                        <th>{{ __('Biaya Potong') }}</th>
                        <td class="text-right">{{ Session::get('vol_udara').__('Kg') }}</td>
                        <input type="hidden" value="{{ Session::get('bpo') }}" name="bpo">
                    </tr>
                    <tr>
                        <th>{{ __('Biaya Packing') }}</th>
                        <td class="text-right">{{ Session::get('service')->name }}</td>
                        <input type="hidden" value="{{ Session::get('bpa') }}" name="bpa">
                    </tr>
                    <tr>
                        <th>{{ __('Biaya Lain') }}</th>
                        <td class="text-right">{{ Session::get('payment')->name }}</td>
                        <input type="hidden" value="{{ Session::get('bl') }}" name="bl">
                    </tr>
                    <tr>
                        <th>{{ __('Total Biaya') }}</th>
                        <td class="text-right">{{ __('Surabaya') }}</td>
                        <input type="hidden" value="{{ Session::get('tb') }}" name="tb">
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button class="btn btn-primary" type="submit">{{ __('Input Data') }}</button>
        </div>
    </div>
</form>
@endsection