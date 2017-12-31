<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="image text-center">
                <img src="{{ url('img/logo.PNG') }}" class="img-circle" alt="User Image" style="max-width:120px">
            </div>
        </div>
 

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN</li>
            <li><a href="."><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-database"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/users') }}"><i class="fa fa-user-circle"></i>Users</a></li>
                    <li><a href="{{ url('/ck-admin/customer') }}"><i class="fa fa-user-plus"></i>Customers</a></li>
                    <li><a href="{{ url('/ck-admin/toko') }}"><i class="fa fa-institution"></i>Toko</a></li>
                    <li><a href="{{ url('/ck-admin/produk') }}"><i class="fa fa-shopping-bag"></i>Produk</a></li>
                    <li><a href="{{ url('/ck-admin/events') }}"><i class="fa fa-gift"></i>Events</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#"><i class="fa fa-handshake-o"></i> <span>Data Transaksi</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/transaksi') }}"><i class="fa fa-history"></i>Transaksi</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>Laporan</span>

                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{ url('/ck-admin/laporanbln') }}"><i class="fa fa-area-chart"></i>Laporan Per Bulan</a></li>
                    <li><a href="{{ url('/ck-admin/laporanproduk') }}"><i class="fa fa-bar-chart"></i>Laporan Produk</a></li>

                </ul>
            </li>
            <li >
                <a href="{{ url('/ck-admin/messages') }}">
                    <i class="fa fa-comment"></i>
                    <span>Messages</span>
                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">5</span>
                    </span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>