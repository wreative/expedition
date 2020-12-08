<!-- TODO: Barang -->
{{-- <h2 class="section-title">{{ __('Barang') }}</h2>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Volume') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right @error('panjang') is-invalid @enderror"
                            id="panjang" name="panjang" placeholder="Panjang">
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('cm') }}</div>
                        </div>
                    </div>
                    @error('panjang')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right @error('lebar') is-invalid @enderror"
                            id="lebar" name="lebar" placeholder="Lebar">
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('cm') }}</div>
                        </div>
                    </div>
                    @error('lebar')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right @error('tinggi') is-invalid @enderror"
                            id="tinggi" name="tinggi" placeholder="Tinggi">
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('cm') }}</div>
                        </div>
                    </div>
                    @error('tinggi')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="section-title">{{ __('Total') }}</div>
                <div class="form-group">
                    <label>{{ __('Volumetric Darat atau Laut') }}</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-right" id="tdl" name="tdl" placeholder="Total"
                            readonly>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('kg') }}</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{ __('Volumetric Udara') }}</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-right" id="tu" name="tu" placeholder="Total"
                            readonly>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('kg') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Berat') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-right satuan @error('berat') is-invalid @enderror"
                            id="berat" name="berat" placeholder="Berat dengan satuan" required>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('kg') }}</div>
                        </div>
                    </div>
                    @error('berat')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Jumlah') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right @error('amount') is-invalid @enderror"
                            name="amount" placeholder="Jumlah dengan satuan" required>
                        <div class="input-group-append">
                            <div class="input-group-text">{{ __('koli') }}</div>
                        </div>
                    </div>
                    @error('amount')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                    @if (Session::has('status'))
                    <span class="text-danger" role="alert">
                        {{ Session::get('status') }}
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="form-group">
                <label class="form-label">{{ __('Jenis Barang') }}</label>
                <select class="form-control select2" name="jb">
                    @foreach ($tipe as $t)
                    <option value="{{ $t->id }}">{{ $t->name}}</option>
                    @endforeach
                </select>
                @error('jb')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>
</div> --}}
<h2 class="section-title">{{ __('Barang') }}</h2>

<div class="card">
    <div class="card-header">
        <h4>{{ __('Volume') }}</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="input-group mb-2">
                <input type="number" class="form-control text-right @error('panjang') is-invalid @enderror" id="panjang"
                    name="panjang" placeholder="Panjang">
                <div class="input-group-append">
                    <div class="input-group-text">{{ __('cm') }}</div>
                </div>
            </div>
            @error('panjang')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group mb-2">
                <input type="number" class="form-control text-right @error('lebar') is-invalid @enderror" id="lebar"
                    name="lebar" placeholder="Lebar">
                <div class="input-group-append">
                    <div class="input-group-text">{{ __('cm') }}</div>
                </div>
            </div>
            @error('lebar')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group mb-2">
                <input type="number" class="form-control text-right @error('tinggi') is-invalid @enderror" id="tinggi"
                    name="tinggi" placeholder="Tinggi">
                <div class="input-group-append">
                    <div class="input-group-text">{{ __('cm') }}</div>
                </div>
            </div>
            @error('tinggi')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="section-title">{{ __('Total') }}</div>
        <div class="form-group">
            <label>{{ __('Volumetric Darat atau Laut') }}</label>
            <div class="input-group mb-2">
                <input type="text" class="form-control text-right" id="tdl" name="tdl" placeholder="Total" readonly>
                <div class="input-group-append">
                    <div class="input-group-text">{{ __('kg') }}</div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Volumetric Udara') }}</label>
            <div class="input-group mb-2">
                <input type="text" class="form-control text-right" id="tu" name="tu" placeholder="Total" readonly>
                <div class="input-group-append">
                    <div class="input-group-text">{{ __('kg') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>{{ __('Jenis Barang') }}</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <select class="form-control select2" name="jb">
                @foreach ($tipe as $t)
                <option value="{{ $t->id }}">{{ $t->name}}</option>
                @endforeach
            </select>
            @error('jb')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>
</div>