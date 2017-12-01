<?php include 'header_user.php'; ?>

<body class="fix-header">
    <div id="wrapper">
        <?php include "menu_user.php"; ?>
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
							<!--  download excel -->
							<?php  download_excel("tbl_pendidikan", "tbl_pendidikan_$_COOKIE[username]", "", "&new_sql=where username='$_COOKIE[username]'"); ?>
							<!--  download excel -->
							<!--  input filter table -->
							<?php filter(); ?>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="box-title">Data Pendidikan User</h3>
                                    <?php $this->libraries->table("tbl_pendidikan", 20, "where username='$_COOKIE[username]'") ?>
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
<?php include "edit_modal.php"; ?>