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

            <li class="treeview">
                <a href="#"><i class="fa fa-database"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/users') }}"><i class="fa fa-user-circle">  Users</i></a></li>
                    <li><a href="{{ url('/ck-admin/customer') }}"><i class="fa fa-user-o">  Customer</i></a></li> 
                    <li><a href="{{ url('/ck-admin/toko') }}"><i class="fa fa-shopping-bag">  Toko </i></a></li>
                    <li><a href="{{ url('/ck-admin/produk') }}"><i class="fa fa-birthday-cake">  Produk</i></a></li>
                    <li><a href="{{ url('/ck-admin/events') }}"><i class="fa fa-link">  Events </i></a></li>
                    

                </ul>
            </li>
             <li class="treeview">
                <a href="#"><i class="fa fa-cc-mastercard"></i> <span>Data Transaksi</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/transaksi') }}"><i class="fa fa-cc-paypal">  Transaksi</i></a></li>
                    <li><a href="{{ url('/ck-admin/detailtransaksi') }}"><i class="fa fa-credit-card-alt">  Detail Transaksi</i></a></li> 
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span><i class="fa fa-line-chart"> Laporan</i></span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/ck-admin/laporanbln') }}"><i class="fa fa-bar-chart-o"> Laporan Perbulan</i></a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>