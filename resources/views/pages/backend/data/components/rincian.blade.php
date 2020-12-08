<!-- TODO: Rincian Pengiriman -->
<h2 class="section-title">{{ __('Rincian Pengiriman') }}</h2>
<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label class="form-label">{{ __('Layanan') }}</label>
            <div class="selectgroup w-100">
                <label class="selectgroup-item">
                    <input type="radio" name="service" value="1" class="selectgroup-input">
                    <span class="selectgroup-button">{{ __('Domestik Express') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="service" value="2" class="selectgroup-input">
                    <span class="selectgroup-button">{{ __('City Courier') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="service" value="3" class="selectgroup-input">
                    <span class="selectgroup-button">{{ __('Prioritas') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="service" value="4" class="selectgroup-input" checked>
                    <span class="selectgroup-button">{{ __('Tujuan Khusus') }}</span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">{{ __('Sistem Pembayaran') }}</label>
            <div class="selectgroup w-100">
                <label class="selectgroup-item">
                    <input type="radio" name="payment" value="1" class="selectgroup-input" checked>
                    <span class="selectgroup-button">{{ __('Tunai') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="payment" value="2" class="selectgroup-input" disabled>
                    <span class="selectgroup-button">{{ __('COD') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="payment" value="3" class="selectgroup-input" disabled>
                    <span class="selectgroup-button">{{ __('Tagihan') }}</span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Kota Tujuan') }}</label>
            <select class="form-control select2" name="destination" id="destination">
                <option>{{ __('Kota') }}</option>
                @foreach ($wilayah as $w)
                <option value="{{ $w->price }}">{{ $w->name}}</option>
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
</div>