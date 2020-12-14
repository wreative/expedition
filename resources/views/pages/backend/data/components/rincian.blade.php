<!-- TODO: Rincian Pengiriman -->
<h2 class="section-title">{{ __('Rincian Pengiriman') }}</h2>
<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label class="form-label">{{ __('Layanan') }}</label>
            <div class="selectgroup w-100">
                @foreach ($layanan as $l)
                <label class="selectgroup-item">
                    <input type="radio" name="service" value="{{ $l->id }}" class="selectgroup-input"
                        {{ $l->id == '4' ? 'checked' : 'checked' }}>
                    <span class="selectgroup-button">{{ $l->name }}</span>
                </label>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">{{ __('Sistem Pembayaran') }}</label>
            <div class="selectgroup w-100">
                @foreach ($pembayaran as $p)
                <label class="selectgroup-item">
                    <input type="radio" name="payment" value="{{ $p->id }}" class="selectgroup-input"
                        {{ $p->id == '2' ? 'disabled' : ($p->id == '3' ? 'disabled' : 'checked') }}>
                    <span class="selectgroup-button">{{ $p->name }}</span>
                </label>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Kota Tujuan') }}</label>
            <select class="form-control select2" name="destination" id="destination">
                @foreach ($wilayah as $w)
                <option value="{{ $w->id }}">{{ $w->name}}</option>
                @endforeach
            </select>
            <input type="hidden" name="dst" id="dst">
            @error('destination')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>
    <div class="card-footer bg-whitesmoke text-md-right">
        <button class="btn btn-primary" type="submit">{{ __('Selanjutnya') }}</button>
    </div>
</div>