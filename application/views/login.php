<?php error_reporting(0); ?>
<?php include 'header_biasa.php'; ?>


<div class="container">
	<div class="">
		<div class="col-md-6 col-md-offset-3">
			<form class="" action="select" method="post">

				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Login user dan admin</h2>
						</div>
					</div>
				</div>

				<fieldset>
					<legend>Login Form:</legend>
					<div class="form-group">
						<input class="form-control" type="" name="username" placeholder="Username" maxlength="30">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password" maxlength="30">
					</div>

					<input type="hidden" name="table" value="tbl_login">

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<button class="btn btn-primary btn-block" type="submit">
									Login
									<span class="glyphicon glyphicon-log-in"></span>
								</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-info btn-block" type="button" data-toggle="modal" data-target="#registerModal">
									Register
							</button>
							</div>
							<div class="col-md-4">
								<button class="btn btn-warning btn-block" type="reset">
									Reset
									<span class="glyphicon glyphicon-refresh"></span>
								</button>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>



<?php include "footer_biasa.php"; ?>
<?php 
if($_COOKIE["pesan_insert"])
{
	echo "<script>alert('$_COOKIE[pesan_insert]');</script>";
	setcookie("pesan_insert", "", time() - 1, "/");
}

 ?>

<?php include_once "tambah_karyawan.php";?>