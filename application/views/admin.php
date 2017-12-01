<?php include 'header.php'; ?>

<body class="fix-header">
    <div id="wrapper">
        <?php include "menu_admin.php"; ?>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data User</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <!--  UNTUK DOWNLOAD KE EXCEL -->
                            <?php download_excel("tbl_login", "tbl_login"); ?>
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
                                                    
                                                    if(strtoupper($value->username) != strtoupper("admin"))
                                                    {
                                                        echo "<tr><td>$value->id</td><td>$value->nama</td><td>$value->username</td><td>$value->password</td><td>$value->session</td>
                                                        <td>
                                                        <a class='btn btn-primary btn-sm' href='edit_user?id=$value->id&username=$value->username' title='Edit Data $value->username'>
                                                        <span class='glyphicon glyphicon-edit'></span>
                                                        </a>
                                                        <a class='delete btn btn-danger btn-sm' href='admin?media=delete&username=$value->username' title='Delete Data $value->username'>
                                                        <span class='glyphicon glyphicon-trash'></span>
                                                        </a>
                                                        </td>";
                                                    }else 
                                                    {
                                                        echo "<tr><td>$value->id</td><td>$value->nama</td><td>$value->username</td><td>$value->password</td><td>$value->session</td>
                                                        <td>
                                                        <a class='btn btn-primary btn-sm' href='edit_admin?id=$value->id&username=$value->username' title='Edit Data $value->username'>
                                                        <span class='glyphicon glyphicon-edit'></span>
                                                        </a>
                                                        </td>";
                                                        
                                                    }
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