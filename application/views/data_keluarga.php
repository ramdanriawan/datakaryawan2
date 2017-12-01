<?php include 'header.php'; ?>

<body class="fix-header">
    <div id="wrapper">
        <?php include "menu_admin.php"; ?>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo str_replace("_", " ", $this->uri->segment(2)); ?></h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
							<div class="col-md-9">
								<div class="btn-group btn-group-sm">
									<?php 
									if($_GET["page"])
									{
										$page = $_GET["page"];
									}else 
									{
										$page = 1;
									}
									
									if($_GET["limit"])
									{
										$limit = $_GET["limit"];
									}else 
									{
										$limit = 20;
									}
									
									 ?>
									<a href="<?php echo "download_excel?table=tbl_keluarga&filename=tbl_keluarga&page=$page&limit=$limit" ?>" class="btn btn-primary" type="button" id="download_table" title="Proses Lebih Cepat" target="_blank">
										<span class="glyphicon glyphicon-download"> Download Semua Data Table Ini (xls)</span>
									</a>
									<a href="<?php echo "download_excel?table=tbl_keluarga&filename=tbl_keluarga"; ?>" class="btn btn-danger" type="button" id="download_table" title="Proses sangat berat dan lebih lama" target="_blank">
										<span class="glyphicon glyphicon-download"> Download Semua Data Sekolah (xls)</span>
									</a>
								</div>
							</div>
							<!--  input filter table -->
							<?php filter(); ?>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="box-title">Data Keluarga</h3>
                                    <div class="table-responsive">
                                        <table class="table filter_data">
                                            <thead>
                                                <tr>
                                                    <?php 
													$query = $this->db->query("select * from tbl_keluarga limit 1");
													
													foreach ($query->result_array() as $key => $value) 
													{
														foreach ($value as $key2 => $value2) 
														{
															echo "<th>" . ucwords(str_replace("_", " ", $key2)) . "</th>";
														}
													}
													
													 ?>
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
                                                
                                                $query = $this->db->query("select * from tbl_keluarga limit $mulai,20");
                                                
                                                foreach ($query->result() as $key => $value)
												{
													echo "<tr>";
                                                    foreach ($value as $key2 => $value2)
													{
                                                    	echo "<td>$value2</td>";
                                                    }
													echo "</tr>";
                                                }
                                                
                                                 ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <!--  untuk membuat pagination sendiri -->
                                <?php $this->libraries->pagination("data_keluarga", "tbl_keluarga"); ?>
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