<div id="registerModal" class="modal fade">
	<div class="modal-dialog modal-lg" style="width: 1080px;">
		<div class="modal-content">
			 <div class="modal-header">
			 	<span data-dismiss="modal">&times;</span>
			 	<h2 class="text-center modal-title">FORMULIR REGISTRASI</h2>
			 </div>

			 <div class="modal-body">
			 	<form class="form_register" action="" method="post">
			 		<div class="row">
			 			<div class="col-md-8 col-md-offset-2">
			 				
					 		<fieldset>
					 			<legend>Data Profil Pegawai</legend>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="username" placeholder="Username" required value="<?php echo $_POST["username"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="password" name="password" placeholder="Password" required value="<?php echo $_POST["password"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="password" name="password2" placeholder="Retype Password" required value="<?php echo $_POST["password2"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama" placeholder="Nama Beserta Gelar" required value="<?php echo $_POST["nama"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nip" placeholder="Nip, Jika tidak punya isikan '-' ex: 198501012014011001" max="18" maxlength="18" required value="<?php echo $_POST["nip"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tempat_lahir" placeholder="Tempat Lahir" required value="<?php echo $_POST["tempat_lahir"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control tanggal_lahir" type="" name="tanggal_lahir" placeholder="Tanggal Lahir" required value="<?php echo $_POST["tanggal_lahir"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik" placeholder="Nik (Tidak Boleh Kosong)" required value="<?php echo $_POST["nik"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="npwp" placeholder="Npwp, Contoh: 22.333.444.5-777-000" required value="<?php echo $_POST["npwp"] ?>">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenis_kelamin" required>
					 					<option value="">--Jenis Kelamin--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenis_kelamin");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->jenis_kelamin == $_POST["jenis_kelamin"])
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->jenis_kelamin' $selected>$value->jenis_kelamin</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="status_pegawai" required>
					 					<option value="">--Status Pegawai--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_status_pegawai");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->status_pegawai == $_POST["status_pegawai"])
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->status_pegawai' $selected>$value->status_pegawai</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenjang_tempat_tugas" required>
					 					<option value="">--Jenjang Tempat Tugas--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenjang_tempat_tugas");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->jenjang_tempat_tugas == $_POST["jenjang_tempat_tugas"])
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->jenjang_tempat_tugas' $selected>$value->jenjang_tempat_tugas</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 		</fieldset>

					 		<input type="hidden" name="media" value="register">

			 		<div class="row">
			 			<div class="col-md-6">
			 				<button class="btn btn-info btn-block">
			 					<span class="glyphicon glyphicon-registration-mark"></span> 
			 					Register
			 				</button>
			 			</div>

			 			<div class="col-md-6">
			 				<button class="btn btn-warning btn-block reset" type="button">
			 					<span class="glyphicon glyphicon-refresh"></span> 
			 					Reset
			 				</button>
			 			</div>
			 		</div>
			 	</form>
			 </div>
		</div>
	</div>
</div>

<?php
//fungsi buatan untuk mengescape semua data $_POST;
$this->libraries->escape_array($_POST);

//jadikan semua post ke variabel
extract($_POST);

//cek apakah password 1 dan password 2 sama 
if($password != $password2)
{
	alert("Password dan Retype Password Tidak Sama!");
	die();
}

//cek apakah dia akan register atau tidak
if($_POST["media"] == "register")
{
	//data untuk tabel profile pegawai
	$query = $this->db->query("select username from tbl_login where username='$username'");
	
	if($query->num_rows() > 0)
	{
		alert("Username telah terdaftar, silakan ganti username yang lain!");
		die();
	}
	
	
	$query  = $this->db->query("select kode from tbl_profile_pegawai where kode='{$jenjang_tempat_tugas}001' order by id desc limit 1");
	$data   = $query->result()[0];
	$query2 = $this->db->query("select kode from tbl_profile_pegawai order by id desc limit 1");
	$data2  = $query2->result()[0];

	if($query->num_rows() < 1)
	{
		$kode = "{$jenjang_tempat_tugas}001";
	}else
	{
		$kode = ++$data2->kode;
	}

	$tbl_profile_pegawai = array(
		"kode"                 => $kode, #secara otomatis
		"username"             => $username,
		"password"             => $password,
		"nama"                 => $nama,
		"nip"                  => $nip,
		"tempat_lahir"         => $tempat_lahir,
		"tanggal_lahir"        => $tanggal_lahir,
		"nik"                  => $nik,
		"npwp"                 => $npwp,
		"jenis_kelamin"        => $jenis_kelamin,
		"status_pegawai"       => $status_pegawai,
		"jenjang_tempat_tugas" => $jenjang_tempat_tugas
	);

	$tbl_profile_pegawai_insert = $this->db->insert("tbl_profile_pegawai", $tbl_profile_pegawai);
	
	//data untuk table login 
	$tbl_login = array(
		"nama"     => $nama,
		"username" => $username,
		"password" => $password,
		"session"  => "user"
	);
	
	$tbl_login_insert = $this->db->insert("tbl_login", $tbl_login);

	if($tbl_profile_pegawai_insert && $tbl_login_insert)
	{
		alert("Berhasil Menambahkan Semua Data", time() + 1000000, "/");
	}else
	{
		alert("Gagal Menambahkan Semua Data", time() + 1000000, "/");
	}
}

 ?>
