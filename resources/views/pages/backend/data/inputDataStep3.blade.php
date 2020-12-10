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
                <thead>
                    <tr>
                        <th>{{ __('Nama') }}</th>
                        <th class="text-right">{{ __('Nominal') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ __('Gaji Pokok') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('gp')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Uang Hadir') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('h')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Tunjangan Transportasi') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('trans')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Lembur/Menit') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lmenit')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Lembur/Hari') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('lhari')) }}</td>

                    </tr>
                    <tr>
                        <th>{{ __('Lembur Libur') }}</th>
                        <td class="text-right">{{ __('Rp. ').number_format(Session::get('ll')) }}</td>

                    </tr>
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
@section('script')
<script src="{{ asset('js/pages/inputData.js') }}"></script>
@endsection