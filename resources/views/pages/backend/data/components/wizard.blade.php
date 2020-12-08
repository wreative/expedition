<div class="card-body">
    <div class="wizard-steps">
        <div class="wizard-step {{ Request::route()->getName() == 'inputData' ? 'wizard-step-active' : 
            (Request::route()->getName() == 'inputData2' ? 'wizard-step-active':
            (Request::route()->getName() == 'inputData3' ? 'wizard-step-active':'')) }}">
            <div class="wizard-step-icon">
                <i class="fas fa-info-circle"></i>
            </div>
            <div class="wizard-step-label">
                {{ __('Informasi Utama') }}
            </div>
        </div>
        <div class="wizard-step {{ Request::route()->getName() == 'inputData2' ? 'wizard-step-active' : 
        (Request::route()->getName() == 'inputData3' ? 'wizard-step-active':'') }}">
            <div class="wizard-step-icon">
                <i class="fas fa-list-alt"></i>
            </div>
            <div class="wizard-step-label">
                {{ __('Informasi Tambahan') }}
            </div>
        </div>
        <div class="wizard-step {{ Request::route()->getName() == 'inputData3' ? 'wizard-step-active' : '' }}">
            <div class="wizard-step-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="wizard-step-label">
                {{ __('Pengecekan') }}
            </div>
        </div>
    </div>
</div>