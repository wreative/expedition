@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Master Resi'))
@section('titleContent', __('Resi'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Resi') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="resi" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            {{ __('#') }}
                        </th>
                        <th>{{ __('Pengirim') }}</th>
                        <th>{{ __('Penerima') }}</th>
                        <th>{{ __('Nomor Resi') }}</th>
                        <th>{{ __('Nomor Transaksi') }}</th>
                        <th>{{ __('Lihat') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $number => $t)
                    <tr>
                        <td class="text-center">
                            {{ $number+1 }}
                        </td>
                        <td>{{ $t->relationDetailed->sender_name }}</td>
                        <td>{{ $t->relationDetailed->receiver_name }}</td>
                        <td>{{ $t->nomor }}</td>
                        <td>{{ $t->relationTransaction->code }}</td>
                        <td>
                            <a href="{{ asset(DNS2D::getBarcodePNGPath($t->nomor, 'QRCODE', 10, 10)) }}"
                                class="btn btn-info btn-action mb-1 mt-1 mr-1" data-toggle="tooltip"
                                title="Tampilkan Resi 2 Dimensi" id="resi">{{ __('Resi 2D') }}</a>
                            <a href="{{ asset(DNS1D::getBarcodePNGPath($t->nomor, 'C39+', 1, 40)) }}"
                                class="btn btn-info btn-action mb-1 mt-1 mr-1" data-toggle="tooltip"
                                title="Tampilkan Resi 1 Dimensi" id="resi">{{ __('Resi 1D') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/pages/resi/resi.js') }}"></script>
@endsection