@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Master Agen'))
@section('titleContent', __('Agen'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Master Agen') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('createAgen') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Data') }}</a>
    </div>
    <div class="card-body">
        @if (Session::has('status'))
        <div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">{{ __('Info') }}</div>
                {{ Session::get('status') }}
            </div>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped" id="agen" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            {{ __('#') }}
                        </th>
                        <th>{{ __('Nama') }}</th>
                        <th>{{ __('Alamat') }}</th>
                        <th>{{ __('No Telepon') }}</th>
                        <th>{{ __('Kode') }}</th>
                        <th>{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agen as $number => $a)
                    {{-- @if ($checkAgen->id != $a->id) --}}
                    <tr>
                        <td class="text-center">
                            {{ $number+1 }}
                        </td>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->address }}</td>
                        <td>{{ $a->tlp }}</td>
                        <td>{{ $a->code }}</td>
                        <td>
                            <a href="/agen/edit/{{ $a->id }}" class="btn btn-primary btn-action mb-1 mt-1 mr-1"
                                data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-warning btn-action mb-1 mt-1" style="cursor: pointer"
                                data-toggle="tooltip" title="Reset Password"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan untuk mereset password?"
                                data-confirm-yes="window.open('/agen/reset/{{ $a->id }}','_self')"><i
                                    class="fas fa-redo-alt"></i></a>
                        </td>
                    </tr>
                    {{-- @endif --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/pages/agen/agen.js') }}"></script>
@endsection