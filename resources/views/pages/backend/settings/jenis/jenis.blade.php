@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Jenis Barang'))
@section('titleContent', __('Jenis Barang'))
@section('breadcrumb', __('Pengaturan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Jenis Barang') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('createType') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Jenis Barang') }}</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="jenis" width="100%">
                <thead>
                    <tr>
                        <th>
                            {{ __('#') }}
                        </th>
                        <th>{{ __('Nama') }}</th>
                        <th>{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tipe as $number => $t)
                    <tr>
                        <td>
                            {{ $number+1 }}
                        </td>
                        <td>{{ $t->name }}</td>
                        <td>
                            <a href="/agen/edit/{{ $t->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
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
<script src="{{ asset('js/pages/jenis/jenis.js') }}"></script>
@endsection