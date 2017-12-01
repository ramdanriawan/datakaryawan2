<?php include 'header.php'; ?>
<?php include "menu_admin.php" ?>

<body class="fix-header">
    <div id="wrapper">
        <?php include "menu_admin.php"; ?>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data User</h4> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Data User <?php echo $_GET["username"]; ?></h3>
                                        </div>
                                        <div class="panel-body">
											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<form class="form_register" action="" method="post">
														<?php
														$query = $this->db->where("username", $_GET["username"])->get("tbl_login")->result()[0];
														input("Nama", "form-control", "nama_admin", "text", "required", $query->nama); 
														input("Password", "form-control", "password1_admin", "text", "required", $query->password); 
														input("Retype Password", "form-control", "password2_admin", "text", "required", $query->password);
														?>
														
														<input type="hidden" name="media" value="register">
														
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<button class="btn btn-info btn-block">
																		<span class="glyphicon glyphicon-floppy-saved"></span> 
																		Simpan
																	</button>
																</div>
																
																<div class="col-md-3">
																	<button class="btn btn-warning btn-block" type="reset">
																		<span class="glyphicon glyphicon-refresh"></span> 
																		Reset
																	</button>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
                                        </div>
                                    </div>            
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
		<?php 
		if($_GET["username"] == "admin" && $_POST["nama_admin"])
		{
			if($_POST["password1_admin"] != $_POST["password2_admin"])
			{
				alert("Password dan Retype Password tidak sama");
				die();
			}else 
			{
				$this->libraries->escape_array($_POST);
				$this->libraries->escape_array($_GET);
				
				$_POST["password_admin"] = $_POST["password1_admin"];
				unset($_POST["password1"], $_POST["password2_admin"]);
			}
			
			$this->db->where("username", $_GET["username"]);
			
			$tbl_login_admin = array(
				"nama" => $_POST["nama_admin"],
				"username" => $_POST["nama_admin"],
				"password" => $_POST["password_admin"],
			);
			
			if($this->db->update("tbl_login", $tbl_login_admin))
			{
				alert("Berhasil Mengubah Data Admin");
				location("admin");
			}else 
			{
				alert("Gagal Mengubah Data Admin");
				location("{$this->uri->segment(2)}?id=$_GET[id]&username=$_GET[username]");
			}
		}
		
		
		?>
		
<?php include "footer.php" ?>
<?php include 'tambah_karyawan.php'; ?>
