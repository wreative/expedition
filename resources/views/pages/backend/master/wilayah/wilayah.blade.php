@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Master Wilayah'))
@section('titleContent', __('Wilayah'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Wilayah') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('createWilayah') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Data') }}</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="wilayah" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            {{ __('#') }}
                        </th>
                        <th>{{ __('Nama') }}</th>
                        <th>{{ __('Kode') }}</th>
                        <th>{{ __('Harga') }}</th>
                        <th>{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wilayah as $number => $w)
                    <tr>
                        <td class="text-center">
                            {{ $number+1 }}
                        </td>
                        <td>{{ $w->name }}</td>
                        <td>{{ $w->code }}</td>
                        <td>{{ __('Rp. ').number_format($w->price) }}</td>
                        <td>
                            <a href="/wilayah/edit/{{ $w->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action mb-1 mt-1" style="cursor: pointer" data-toggle="tooltip"
                                title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                data-confirm-yes="window.open('/wilayah/delete/{{ $w->id }}','_self')"><i
                                    class="fas fa-trash"></i></a>
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
<script src="{{ asset('js/pages/wilayah/wilayah.js') }}"></script>
@endsection