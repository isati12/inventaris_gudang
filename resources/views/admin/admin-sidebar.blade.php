<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            <span class="badge badge-warning">{{ Auth::user()->role }}</span>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
            <li class="nav-header">PENGELOLAAN TISU</li>
            <li class="nav-item">
                <a href="/pemasukan-tisu" class="nav-link">
                    <img src="/icon/barang_masuk.png" with="32" height="32">
                    <p>
                        Pemasukan Tisu
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/kanban.html" class="nav-link">
                    <img src="/icon/barang_keluiar.png" with="32" height="32">
                    <p>
                        Pengeluaran Tisu
                    </p>
                </a>
            </li>
            <li class="nav-header">HANDSOAP</li>
            <li class="nav-item">
                <a href="iframe.html" class="nav-link">
                    <img src="/icon/soap.png" with="32" height="32">
                    <p>Pemasukan Handsoap</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                    <img src="/icon/pengambilan.png" with="32" height="32">
                    <p>Seluruh Pengambilan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                    <img src="/icon/pemakaian.png" with="32" height="32">
                    <p>Seluruh Pemakaian</p>
                </a>
            </li>
            <li class="nav-header">PENDATAAN KERUSAKAN</li>
            <li class="nav-item">
                <a href="iframe.html" class="nav-link">
                <img src="/icon/kerusakan.png" with="32" height="32">
                    <p>Pendataan Kerusakan</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>