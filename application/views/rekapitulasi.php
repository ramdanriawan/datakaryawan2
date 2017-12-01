<?php include 'header.php'; ?>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <?php include "menu_admin.php" ?>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $this->uri->segment(2); ?></h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="box-title">DATA TABLE</h3>
                                    <div class="table-responsive">
                                        <table class="table filter_data">
                                            <tbody>
												<tr>
													<th>Total Data Pegawai Keseluruhan</th>
													<td>:</td>
													<td><?php echo $this->db->get("tbl_profile_pegawai")->num_rows(); ?></td>
												</tr>
                                                <tr>
													<th>Total Data Pegawai PAUD</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_tempat_tugas", "PAUD")->get("tbl_profile_pegawai")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total Data Pegawai TK</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_tempat_tugas", "TK")->get("tbl_profile_pegawai")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total Data Pegawai SD</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_tempat_tugas", "SD")->get("tbl_profile_pegawai")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total Data Pegawai SMP</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_tempat_tugas", "SMP")->get("tbl_profile_pegawai")->num_rows(); ?></td>
                                                </tr>
                                                <tr style="border-top: 5px solid black;"></tr>
                                                <tr>
													<th>Total Seluruh Sekolah</th>
													<td>:</td>
													<td><?php echo $this->db->get("tbl_sekolah")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total PAUD</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_sekolah", "PAUD")->get("tbl_sekolah")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total TK</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_sekolah", "TK")->get("tbl_sekolah")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total SD</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_sekolah", "SD")->get("tbl_sekolah")->num_rows(); ?></td>
                                                </tr>
                                                <tr>
													<th>Total SMP</th>
													<td>:</td>
													<td><?php echo $this->db->where("jenjang_sekolah", "SMP")->get("tbl_sekolah")->num_rows(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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