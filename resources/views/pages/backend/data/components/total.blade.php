<!-- TODO: Total -->
<div class="card">
    <div class="card-header">
        <h4>{{ __('Total') }}</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>{{ __('Biaya Kirim') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {{ __('Rp.') }}
                    </div>
                </div>
                <input class="form-control" type="text" id="bk" name="bk" placeholder="Total" readonly>
            </div>
            @if (Session::has('total'))
            <span class="text-danger" role="alert">
                {{ Session::get('total') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label>{{ __('Biaya Potong') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {{ __('Rp.') }}
                    </div>
                </div>
                <input class="form-control currency" id="bpo" name="bpo" placeholder="Total" readonly>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Biaya Packing') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {{ __('Rp.') }}
                    </div>
                </div>
                <input class="form-control currency" id="bpa" name="bpa" placeholder="Total" readonly>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Biaya Lain') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {{ __('Rp.') }}
                    </div>
                </div>
                <input class="form-control currency" id="bl" name="bl" placeholder="Total" readonly>
            </div>
        </div>
        <div class="form-group">
            <label>{{ __('Total Biaya') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {{ __('Rp.') }}
                    </div>
                </div>
                <input class="form-control currency" id="tb" name="tb" placeholder="Total" readonly>
            </div>
        </div>
    </div>
    <div class="card-footer bg-whitesmoke text-md-right">
        <button class="btn btn-primary" id="save-btn">{{ __('Input Data') }}</button>
    </div>
</div>