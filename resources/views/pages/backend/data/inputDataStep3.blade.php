@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Input Data'))
@section('titleContent', __('Input Data'))

@section('content')
@include('pages.backend.data.components.wizard')
<form method="POST" action="{{ route('store3') }}">
    @csrf
    @include('pages.backend.data.components.resi')
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_name')) }}" name="sender_name">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_tlp')) }}" name="sender_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('sender_addr')) }}" name="sender_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_name')) }}" name="receiver_name">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_tlp')) }}" name="receiver_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('receiver_addr')) }}" name="receiver_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_addr')) }}" name="office_addr">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_tlp')) }}" name="office_tlp">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('office_pst')) }}" name="office_pst">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('note')) }}" name="note">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('vol_darat')) }}" name="vol_darat">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('vol_udara')) }}" name="vol_udara">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('service')) }}" name="service">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('payment')) }}" name="payment">
    <input type="hidden" value="{{ Crypt::encryptString(Session::get('destination')) }}" name="destination">
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table-hover table">
                <tbody>
                    <tr>
                        <th>{{ __('Nama Pengirim') }}</th>
                        <td class="text-right">{{ Crypt::decryptString(Session::get('sender_name')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Telepon Pengirim') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('h')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Alamat Pengirim') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('trans')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Nama Penerima') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lmenit')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Telepon Penerima') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lhari')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Alamat Penerima') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('ll')) }}</td>

                    </tr>
                    @if(Session::get('office_addr') == nullA)
                    <tr>
                        <th>{{ __('Alamat Kantor') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lmenit')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Telepon Kantor') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lhari')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Posisi/Jabatan/Divisi') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('ll')) }}</td>

                    </tr>
                    @endif
                    <tr>
                        <th>{{ __('Lembur Proyek/Menit') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lpm')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Lembur Proyek/Libur') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lph')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Hadir Luar Kota/Pulau') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('hlkp')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Lembur/Menit Luar Kota atau Pulau') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('llkp')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Loyalitas') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('l')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Dedikasi') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('d')) }}</td>

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