<div class="row">
    <div class="col-lg-6">
        <!-- TODO:Pengirim -->
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Pengirim') }}</h4>
            </div>
            <input type="hidden" class="form-control" name="resi" value="{{ $kode }}">
            <input type="hidden" class="form-control" name="agen" value="{{ $agen }}">
            <div class="card-body">
                <div class="form-group">
                    <label>{{ __('Nama') }}<code>*</code></label>
                    <input type="text" class="form-control @error('sender_name') is-invalid @enderror"
                        name="sender_name" required autofocus>
                    @error('sender_name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Telepon') }}<code>*</code></label>
                    <input type="text" class="form-control tlp @error('sender_tlp') is-invalid @enderror"
                        name="sender_tlp" required>
                    @error('sender_tlp')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Alamat') }}<code>*</code></label>
                    <input type="text" class="form-control @error('sender_addr') is-invalid @enderror"
                        name="sender_addr" required>
                    @error('sender_addr')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- TODO: Penerima -->
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Penerima') }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>{{ __('Nama') }}<code>*</code></label>
                    <input type="text" class="form-control @error('receiver_name') is-invalid @enderror"
                        name="receiver_name" required>
                    @error('receiver_name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Telepon') }}<code>*</code></label>
                    <input type="text" class="form-control tlp @error('receiver_tlp') is-invalid @enderror"
                        name="receiver_tlp" required>
                    @error('receiver_tlp')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Alamat') }}<code>*</code></label>
                    <input type="text" class="form-control @error('receiver_addr') is-invalid @enderror"
                        name="receiver_addr" required>
                    @error('receiver_addr')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>{{ __('Kantor') }}</h4>
        <div class="card-header-action">
            <a data-collapse="#receiver-office" class="btn btn-icon btn-info" href="javascript:void(0)">
                <i class="fas fa-minus"></i></a>
        </div>
    </div>
    <div class="collapse" id="receiver-office">
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Alamat Kantor') }}<code>*</code></label>
                <input type="text" class="form-control @error('office_addr') is-invalid @enderror" name="office_addr">
                @error('office_addr')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Telepon Kantor') }}<code>*</code></label>
                <input type="text" class="form-control @error('office_tlp') is-invalid @enderror" name="office_tlp">
                @error('office_tlp')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Divisi/Bagian/Jabatan') }}<code>*</code></label>
                <input type="text" class="form-control @error('office_pst') is-invalid @enderror" name="office_pst">
                @error('office_pst')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            {{ __('Tambahan informasi untuk pengiriman dengan tujuan kantor, 
            alamat di tunjukkan untuk kantor bukan perorangan') }}
        </div>
    </div>
</div>
<div class="card">
    <!-- TODO: Catatan -->
    <div class="card-header">
        <h4>{{ __('Catatan') }}</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <textarea class="form-control" rows="3" style="height: 100px" name="note"></textarea>
        </div>
    </div>
</div>