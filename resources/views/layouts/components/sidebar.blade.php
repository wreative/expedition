<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ __('BatuBeling Express') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">{{ __('BBE') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Dashboard') }}</li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'inputData' ? 'active' : '' }}">
                <a href="{{ route('inputData') }}" class="nav-link">
                    <i class="fas fa-plus"></i><span>{{ __('Input Data') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'check' ? 'active' : '' }}">
                <a href="{{ route('check') }}" class="nav-link">
                    <i class="fas fa-search"></i><span>{{ __('Cek Data') }}</span>
                </a>
            </li>
            <li class="menu-header">{{ __('Master') }}</li>
            <li class="{{ Request::route()->getName() == 'masterWilayah' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterWilayah') }}">
                    <i class="fas fa-map"></i><span>{{ __('Wilayah') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'masterDriver' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterDriver') }}">
                    <i class="fas fa-truck"></i><span>{{ __('Driver') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'masterKurir' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterKurir') }}">
                    <i class="fas fa-people-carry"></i><span>{{ __('Kurir') }}</span>
                </a>
            </li>
            @if (Auth::user()->previleges == '1')
            <li class="{{ Request::route()->getName() == 'masterAgen' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterAgen') }}">
                    <i class="fas fa-handshake"></i><span>{{ __('Agen') }}</span>
                </a>
            </li>
            @endif
            <li class="{{ Request::route()->getName() == 'masterResi' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterResi') }}">
                    <i class="fas fa-cube"></i><span>{{ __('Resi') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'masterTransaksi' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('masterTransaksi') }}">
                    <i class="fas fa-dolly-flatbed"></i><span>{{ __('Transaksi') }}</span>
                </a>
            </li>
            @if (Auth::user()->previleges == '1')
            <li class="menu-header">{{ __('Users') }}</li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fas fa-users"></i><span>{{ __('Users Management') }}</span>
                </a>
            </li>
            @endif
            <li class="menu-header">{{ __('Laporan') }}</li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="fas fa-file-alt"></i><span>{{ __('Cetak Laporan') }}</span>
                </a>
            </li>
            <li class="menu-header">{{ __('Pengaturan') }}</li>
            <li class="{{ Request::route()->getName() == 'settingsDelivery' ? 'active' : '' }}">
                <a href="{{ route('settingsDelivery') }}" class="nav-link">
                    <i class="fas fa-paper-plane"></i><span>{{ __('Pengiriman') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'settingsType' ? 'active' : '' }}">
                <a href="{{ route('settingsType') }}" class="nav-link">
                    <i class="fas fa-list"></i><span>{{ __('Jenis Barang') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'settingsPayment' ? 'active' : '' }}">
                <a href="{{ route('settingsPayment') }}" class="nav-link">
                    <i class="fas fa-hand-holding-usd"></i><span>{{ __('Pembayaran') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>{{ __('Harga') }}</span>
                </a>
            </li>
            <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>{{ __('System') }}</span>
                </a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('syaratKetentuan') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-info-circle"></i> {{ __('Syarat dan Ketentuan') }}
            </a>
        </div>
    </aside>
</div>