<?php include 'header.php'; ?>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <h3 class="text-center">Admin Panel</h3>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="search">
                            <input type="text" name="cari" placeholder="Cari Nama Karyawan..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="admin" class="waves-effect"><span class="glyphicon glyphicon-user"></span> Data User</a>
                    </li>
                    <li>
                        <a href="rekapitulasi" class="waves-effect"><span class="glyphicon glyphicon-record"></span> Rekapitulasi Data</a>
                    </li>
                    <li >
                        <a href="pegawai" class="waves-effect"><span class="glyphicon glyphicon-th-list"></span> Data Pegawai</a>
                    </li>
                    <li >
                        <a href="sekolah" class="waves-effect"><span class="glyphicon glyphicon-th-list"></span> Data Sekolah</a>
                    </li>
                    <li >
                        <a href="admin" class="waves-effect"><span class="glyphicon glyphicon-off"></span> Nonaktifkan Fiture Edit Data Pegawai</a>
                    </li>
                    <li>
                        <a class="waves-effect" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-plus"></span> Tambah Karyawan  </a>
                    </li>
                </ul>
                <div class="center p-20">
                     <a href="logout" class="btn btn-danger btn-block waves-effect waves-light">Logout</a>
                 </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pegawai</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <!--  input filter table -->
                            <?php filter(); ?>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="box-title">Data User</h3>
                                    <div class="table-responsive">
                                        <table class="table filter_data">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>NAMA</th>
                                                    <th>USERNAME</th>
                                                    <th>PASSWORD</th>
                                                    <th>SESSION</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if($_GET["page"])
                                                {
                                                    $mulai = ($_GET["page"] * 20) - 20;
                                                }else 
                                                {
                                                    $mulai = 0;
                                                }
                                                
                                                $query = $this->db->query("select * from tbl_login limit $mulai,20");
                                                
                                                foreach ($query->result() as $key => $value) {
                                                    echo "<tr><td>$value->id</td><td>$value->nama</td><td>$value->username</td><td>$value->password</td><td>$value->session</td>
                                                        <td>
                                                            <a class='btn btn-info btn-sm' href='edit_login/$value->id' title='Lihat Semua Data $value->username'>
                                                                <span class='glyphicon glyphicon-eye-open'></span>
                                                            </a>
                                                            <a class='btn btn-primary btn-sm' href='edit_login/$value->id' title='Edit Data $value->username'>
                                                                <span class='glyphicon glyphicon-edit'></span>
                                                            </a>
                                                            <a class='delete btn btn-danger btn-sm' href='admin?media=delete&id=$value->id' title='Delete Data $value->username'>
                                                                <span class='glyphicon glyphicon-trash'></span>
                                                            </a>
                                                        </td>";
                                                }
                                                
                                                 ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <!--  untuk membuat pagination sendiri -->
                                <?php $this->libraries->pagination("admin", "tbl_login"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
<?php include 'footer.php'; ?>
<?php include_once "tambah_karyawan.php"; ?>