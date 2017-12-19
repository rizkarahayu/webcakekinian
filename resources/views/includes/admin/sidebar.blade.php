<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="image text-center">
                <img src="{{ url('img/logo.png') }}" class="img-circle" alt="User Image" style="max-width:120px">
            </div>
        </div>
 

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN</li>
            <li class="active"><a href="."><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
<<<<<<< HEAD
<<<<<<< HEAD
            <li class="active"><a href="{{url('/tes')}}"><i class="fa fa-link"></i> <span>Tes</span></a></li>
=======
            <li class="active"><a href="{{ url('/test') }}"><i class="fa fa-link"></i> <span>Test</span></a></li>

>>>>>>> e2b2cd60687a203b1deaf360b020760943c3a99e
=======
>>>>>>> b085adb4dcb7fcba9f9e18423931c0cae44b14f3
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/users') }}">Users</a></li>
                    <li><a href="{{ url('/ck-admin/customer') }}">Customer</a></li> 
                    <li><a href="{{ url('/ck-admin/toko') }}">Toko</a></li>
                    <li><a href="{{ url('/ck-admin/produk') }}">Produk</a></li>
                    <li><a href="{{ url('/ck-admin/events') }}">Events</a></li>
                    

                </ul>
            </li>
             <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Data Transaksi</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/transaksi') }}">Transaksi</a></li>
                    <li><a href="{{ url('/ck-admin/detailtransaksi') }}">Detail Transaksi</a></li> 
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/laporanbln') }}">Laporan Perbulan</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>