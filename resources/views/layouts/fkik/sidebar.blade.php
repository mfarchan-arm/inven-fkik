<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""><p>Laboratorium FKIK<br>UNIB</p></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FKIK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manajemen</li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'barang' ? 'active' : '' }}">
                <a href="{{ route('barang.index') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Data Barang</span></a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'bahan' ? 'active' : '' }}">
                <a href="{{ route('bahan.index') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Data Bahan</span></a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'asal-barang' ? 'active' : '' }}">
                <a href="{{ route('asal-barang.index') }}" class="nav-link" ><i class="far fa-square"></i> <span>Data Asal Barang</span></a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'ruang' ? 'active' : '' }}">
                <a href="{{ route('ruang.index') }}" class="nav-link"><i class="fas fa-th"></i> <span>Data Ruangan</span></a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(2) === 'kunjungan' ? 'active' : '' }}">
                <a href="{{ route('kunjungan.index') }}" class="nav-link"><i class="fas fa-person-booth"></i> <span>Data Kunjungan</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a class="btn btn-danger btn-lg btn-block btn-icon-split" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>