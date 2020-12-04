@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Master Transaksi'))
@section('titleContent', __('Transaksi'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Transaksi') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="transaksi" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            {{ __('#') }}
                        </th>
                        <th>{{ __('Tanggal') }}</th>
                        <th>{{ __('Nomor Transaksi') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Tracking') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $number => $t)
                    <tr>
                        <td class="text-center">
                            {{ $number+1 }}
                        </td>
                        <td>{{ date("d-m-Y", strtotime($t->created_at)) }}</td>
                        <td>{{ $t->code }}</td>
                        <td>
                            @if ($t->status =='1')
                            <span class="badge badge-info">
                                {{ __('Menunggu Dijemput Kurir') }}
                            </span>
                            @else
                            __{{ ('Selesai') }}
                            @endif
                        </td>
                        <td>
                            @if ($t->track =='1')
                            <span class="badge badge-info">
                                {{ __('Barang Berada Di Agen BatuBeling') }}
                            </span>
                            @else
                            {{ __('Barang Telah Diterima Penerima') }}
                            @endif
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
<script src="{{ asset('js/pages/transaksi/transaksi.js') }}"></script>
@endsection