<?php 
if($this->libraries->toggle_edit("tbl_toggle_edit") === false)
{
	die();
}

 ?>

<div id="editModal" class="modal fade">
	<div class="modal-dialog modal-lg" style="width: 1080px;">
		<div class="modal-content">
			 <div class="modal-header">
			 	<span data-dismiss="modal">&times;</span>
			 	<h2 class="text-center modal-title">EDIT DATA USER</h2>
			 </div>

			 <div class="modal-body">
			 	<form class="form_register" action="" method="post" enctype="multipart/form-data">
			 		<div class="row">
			 			<div class="col-md-6">
			 				
							<?php 
							$data = $this->db->where("username", $_COOKIE["username"])->get("tbl_profile_pegawai")->result()[0];
							
							 ?>
					 		<fieldset>
					 			<legend>Data Profil Pegawai</legend>
					 			<div class="form-group">
					 				<input class="form-control" type="password" name="password" placeholder="Password"  value="<?php echo $data->password; ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="password" name="password2" placeholder="Retype Password"  value="<?php echo $data->password ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama" placeholder="Nama Beserta Gelar"  value="<?php echo $data->nama ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nip" placeholder="Nip, Jika tidak punya isikan '-' ex: 198501012014011001" max="18" maxlength="18"  value="<?php echo $data->nip ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="tempat_lahir" placeholder="Tempat Lahir"  value="<?php echo $data->tempat_lahir ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control tanggal_lahir" type="" name="tanggal_lahir" placeholder="Tanggal Lahir"  value="<?php echo $data->tanggal_lahir ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik" placeholder="Nik (Tidak Boleh Kosong)"  value="<?php echo $data->nik ?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="npwp" placeholder="Npwp, Contoh: 22.333.444.5-777-000"  value="<?php echo $data->npwp ?>">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jenis_kelamin" >
					 					<option value="">--Jenis Kelamin--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenis_kelamin");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->jenis_kelamin == $data->jenis_kelamin)
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
					 				<select class="form-control" name="status_pegawai" >
					 					<option value="">--Status Pegawai--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_status_pegawai");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->status_pegawai == $data->status_pegawai)
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
					 				<select class="form-control" name="jenjang_tempat_tugas" >
					 					<option value="">--Jenjang Tempat Tugas--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jenjang_tempat_tugas");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->jenjang_tempat_tugas == $data->jenjang_tempat_tugas)
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
							
							<?php 
							$data = $this->db->where("username", $_COOKIE["username"])->get("tbl_pegawai")->result()[0];

							 ?>
					 		<fieldset>
					 			<legend>Edit Data Kepegawaian</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="pangkat_golongan" >
					 					<option value="">--Pangkat Golongan---</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_pangkat_golongan");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->pangkat_golongan == $data->pangkat_golongan)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->pangkat_golongan' $selected>$value->pangkat_golongan</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control datepicker" type="" name="tmt_golongan"  placeholder="Tmt Golongan" value="<?php echo $data->tmt_golongan;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="sk_pengangkatan_awal"  placeholder="Sk Pengangkatan Awal" value="<?php echo $data->sk_pengangkatan_awal;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control tmt_pengangkatan_awal" type="" name="tmt_pengangkatan_awal" placeholder="Tmt pengangkatan awal"  value="<?php echo $data->tmt_pengangkatan_awal;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="mengampu_mata_pelajaran" placeholder="Mengampu Mata Pelajaran"  value="<?php echo $data->mengampu_mata_pelajaran;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="number" name="jumlah_jam_mengajar" placeholder="Jumlah Jam Mengajar, ex: 24"  max="24" value="<?php echo $data->jumlah_jam_mengajar;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="pejabat_yang_mengangkat" placeholder="Pejabat Yang Mengangkat"   value="<?php echo $data->pejabat_yang_mengangkat;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_cpns" placeholder="No Sk CPNS"   value="<?php echo $data->no_sk_cpns;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_cpns" placeholder="Tmt Sk CPNS"  value="<?php echo $data->tmt_sk_cpns;?>" >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_pns" placeholder="NO SK PNS"  value="<?php echo $data->no_sk_cpns;?>" >
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_pns" placeholder="TMT SK PNS"   value="<?php echo $data->tmt_sk_pns;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sk_pangkat_terakhir" placeholder="No Sk Pangkat Terakhir"   value="<?php echo $data->no_sk_pangkat_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_sk_pangkat_terakhir" placeholder="Tmt Sk Pangkat Terakhir"   value="<?php echo $data->tmt_sk_pangkat_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_nuptk" placeholder="No Nuptk (Jika Tidak Punya Isi '-')"  max="16" value="<?php echo $data->no_nuptk;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_karpeg" placeholder="No Karpeg"   value="<?php echo $data->no_karpeg;?>">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="jabatan" >
					 					<option value="">--Jabatan--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_jabatan");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->jabatan == $data->jabatan)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->jabatan' $selected>$value->jabatan</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="unit_kerja" placeholder="Unit Kerja"    value="<?php echo $data->unit_kerja;?>">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control sk_pengangkatan_jabatan_fungsional_tertentu" name="sk_pengangkatan_jabatan_fungsional_tertentu" >
					 					<option value="">--Sk Pengangkatan Jabatan Fungsional Tertentu--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_sk_pengangkatan_jabatan_fungsional_tertentu");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->sk_pengangkatan_jabatan_fungsional_tertentu == $data->sk_pengangkatan_jabatan_fungsional_tertentu)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value=\"$value->sk_pengangkatan_jabatan_fungsional_tertentu\" $selected>$value->sk_pengangkatan_jabatan_fungsional_tertentu</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<label>Dokumen Sertifikat Diklat:
						 				<input class="form-control" type="file" name="dokument_sertifikat_diklat" >
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control datepicker" type="" name="tmt_jabatan" placeholder="Tmt Jabatan"   value="<?php echo $data->tmt_jabatan;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="masa_kerja_terakhir" placeholder="Masa Kerja (Sesuai SK Terakhir)" value="<?php echo $data->masa_kerja_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="masa_kerja_pengangkatan" placeholder="Masa Kerja (Dari Awal Pengangkatan)"   value="<?php echo $data->masa_kerja_pengangkatan;?>">
					 			</div>
					 			<div class="form-group">
					 				<label>Tahun Pensiun
										<?php 
										$data1  = $this->db->where("username", $_COOKIE["username"])->get("tbl_profile_pegawai")->result()[0];
										$data2 = $this->db->where("username", $_COOKIE["username"])->get("tbl_pegawai")->result()[0];
										
										if($data2->tahun_pensiun == "")
										{
											$tahun_pensiun = substr($data1->tanggal_lahir, -4, 4) + 60;
										}else 
										{
											$tahun_pensiun = $data2->tahun_pensiun;
										}
										
										 ?>
						 				<input  class="form-control tahun_pensiun" type="" name="tahun_pensiun" placeholder="Tahun Pensiun"   value="<?php echo $tahun_pensiun;?>">
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control gaji_terakhir" type="" name="gaji_terakhir" placeholder="Gaji Terakhir"   value="<?php echo $data->gaji_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<select class="form-control" name="sertifikasi" >
					 					<option value="">--Sertifikasi--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_sertifikasi");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->sertifikasi == $data->sertifikasi)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->sertifikasi' $selected>$value->sertifikasi</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_sertifikasi" placeholder="No Sertifikasi"   value="<?php echo $data->no_sertifikasi;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="berkala_terakhir" placeholder="Berkala Terakhir (Bulan Tahun)"  value="<?php echo $data->berkala_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="tahun_sertifikasi" placeholder="Tahun Sertifikasi"  value="<?php echo $data->tahun_sertifikasi;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="berkala_terakhir" placeholder="Berkala Terkahir (Bulan Tahun)"   value="<?php echo $data->berkala_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_berkala_terakhir" placeholder="No Berkala Terkahir"  value="<?php echo $data->no_berkala_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="tanggal_berkala_berikutnya" placeholder="Tanggal Berkala Berikutnya"  value="<?php echo $data->tanggal_berkala_berikutnya;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="" name="no_berkala_berikutnya" placeholder="No Berkala Berikutnya (isi dgn '-')"  value="<?php echo $data->no_berkala_berikutnya;?>">
					 			</div>
					 			<div class="form-group">
					 				<input  class="form-control" type="number" name="no_hp" placeholder="No Hp"  value="<?php echo $data->no_hp;?>">
					 			</div>
					 		</fieldset>
			 			</div>

			 			<div class="col-md-6">
			 				<?php 
							$data = $this->db->where("username", $_COOKIE["username"])->get("tbl_pendidikan")->result()[0];
							
							 ?>
					 		<fieldset>
					 			<legend>Edit Data Pendidikan</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="pendidikan_terakhir">
					 					<option value="">--Pendidikan Terakhir--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_pendidikan_terakhir");

					 					foreach ($query->result() as $key => $value) {
											if($value->pendidikan_terakhir == $data->pendidikan_terakhir)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}
					 						echo "<option value='$value->pendidikan_terakhir' $selected>$value->pendidikan_terakhir</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_terakhir" placeholder="No Ijazah Terakhir" value="<?php echo $data->no_ijazah_terakhir;?>">
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Terakhir (max 1MB):
						 				<input class="form-control"  type="file" name="foto_ijazah_terakhir" >
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="universitas" placeholder="Universitas" value="<?php echo $data->universitas;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="fakultas" placeholder="Fakultas" value="<?php echo $data->fakultas;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="jurusan" placeholder="Jurusan" value="<?php echo $data->jurusan;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="number" name="tahun_lulus" placeholder="Tahun Lulus"  value="<?php echo $data->tahun_lulus;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_sd" placeholder="Riwayat Pendidikan Sd"  value="<?php echo $data->riwayat_pendidikan_sd;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_sd" placeholder="No Ijazah Sd"  value="<?php echo $data->no_ijazah_sd;?>">
					 			</div>
					 			<div class="form-group">
					 				<label>Ijazah Sd:
						 				<input class="form-control"  type="file" name="foto_ijazah_sd" >
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_smp" placeholder="Riwayat Pendidikan SMP"  placeholder="Riwayat Pendidikan SMP" value="<?php echo $data->riwayat_pendidikan_smp;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_smp" placeholder="No Ijazah SMP"  value="<?php echo $data->no_ijazah_smp;?>">
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Smp: 
						 				<input class="form-control"  type="file" name="foto_ijazah_smp" >
					 				</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="riwayat_pendidikan_sma" placeholder="Riwayat Pendidikan SMA/SMK"  value="<?php echo $data->riwayat_pendidikan_sma;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control"  type="" name="no_ijazah_sma" placeholder="No Pendidikan SMA/SMK"  value="<?php echo $data->no_ijazah_sma;?>">
					 			</div>
					 			<div class="form-group">
					 				<label>
					 					Ijazah Sma: 
						 				<input class="form-control"  type="file" name="foto_ijazah_sma" placeholder="No Pendidikan SMA/SMK" >
					 				</label>
					 			</div>
					 		</fieldset>
							<?php 
							$data = $this->db->where("username", $_COOKIE["username"])->get("tbl_keluarga")->result()[0];
							
							 ?>
					 		<fieldset>
					 			<legend>Edit Data Keluarga</legend>
					 			<div class="form-group">
					 				<select class="form-control" name="status_perkawinan" >
					 					<option value="">--Status Perkawinan--</option>
					 					<?php 
					 					$query = $this->db->query("select * from tbl_status_perkawinan");

					 					foreach ($query->result() as $key => $value) {
					 						if($value->status_perkawinan == $data->status_perkawinan)
					 						{
					 							$selected = "selected";
					 						}else
					 						{
					 							$selected = "";
					 						}

					 						echo "<option value='$value->status_perkawinan' $selected>$value->status_perkawinan</option>";
					 					}

					 					 ?>
					 				</select>
					 			</div>

					 			<div class="form-group">
									<label>
										Foto Ktp Suami Istri:
										<input class="form-control" type="file" name="foto_ktp_suami_istri" >
									</label>
					 			</div>
					 			<div class="form-group">
									<label>
										Foto Kartu Keluarga:
										<input class="form-control" type="file" name="foto_kartu_keluarga" >
									</label>
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_suami_istri"  placeholder="Nama Suami / Istri" value="<?php echo $data->nama_suami_istri;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_suami_istri"  placeholder="Nik Suami Atau Istri 16 digit" value="<?php echo $data->nik_suami_istri;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="jumlah_anak"  placeholder="Jumlah Anak" value="<?php echo $data->jumlah_anak;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nama_anak_pertama"  placeholder="Nama Anak Pertama" value="<?php echo $data->nama_anak_pertama;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_pertama"  placeholder="Nik Anak Pertama 16 digit" value="<?php echo $data->nik_anak_pertama;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nama_anak_kedua"  placeholder="Nama Anak Kedua" value="<?php echo $data->nama_anak_kedua;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_kedua"  placeholder="Nik Anak Kedua" value="<?php echo $data->nik_anak_kedua;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_anak_ketiga"  placeholder="Nama Anak Ketiga" value="<?php echo $data->nama_anak_ketiga;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nik_anak_ketiga"  placeholder="Nik Anak Ketiga" value="<?php echo $data->nik_anak_ketiga;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_ayah_kandung"  placeholder="Nama Ayah Kandung" value="<?php echo $data->nama_ayah_kandung;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nik_ayah_kandung"  placeholder="Nik Ayah Kandung" value="<?php echo $data->nik_ayah_kandung;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nama_ibu_kandung"  placeholder="Nama Ibu Kandung" value="<?php echo $data->nama_ibu_kandung;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="nik_ibu_kandung"  placeholder="Nik Ibu Kandung" value="<?php echo $data->nik_ibu_kandung;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="pekerjaan_suami_istri"  placeholder="Pekerjaan Suami Atau Istri" value="<?php echo $data->pekerjaan_suami_istri;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="nip_suami_istri"  placeholder="Nip Suami Atau Istri (18 angka jika tidak punya isi '-')" value="<?php echo $data->nip_suami_istri;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control penghasilan_suami_istri" type="" name="penghasilan_suami_istri"  placeholder="Penghasilan Suami Istri" value="<?php echo $data->penghasilan_suami_istri;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="alamat_rumah"  placeholder="Alamat Rumah" value="<?php echo $data->alamat_rumah;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="desa_kelurahan"  placeholder="Desa Atau Kelurahan" value="<?php echo $data->desa_kelurahan;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="kecamatan"  placeholder="Kecamatan" value="<?php echo $data->kecamatan;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="kabupaten"  placeholder="Kabupaten" value="<?php echo $data->kabupaten;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="" name="provinsi"  placeholder="Provinsi" value="<?php echo $data->provinsi;?>">
					 			</div>
					 			<div class="form-group">
					 				<input class="form-control" type="number" name="kode_pos"  placeholder="Kode Pos" value="<?php echo $data->kode_pos;?>">
					 			</div>
					 		</fieldset>
			 			</div>
					</div>
						
						<?php 
							$data = $this->db->where("username", $_COOKIE["username"])->get("tbl_sekolah")->result()[0];
							
							 ?>
					<div class="row">
			 			<div class="col-md-12 data_sekolah">
					 		<fieldset>
					 			<legend>Edit Data Sekolah</legend>
								<div class="row">
									<div class="col-md-6">
							 			<div class="form-group">
							 				<input class="form-control" type="" name="unit_kerja" placeholder="Unit Kerja" value="<?php echo $data->unit_kerja;?>">
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="jenjang_sekolah" >
							 					<option value="">--Jenjang Sekolah--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_jenjang_sekolah");

							 					foreach($query->result() as $key => $value)
							 					{
							 						if($value->jenjang_sekolah == $data->jenjang_sekolah)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->jenjang_sekolah' $selected>$value->jenjang_sekolah</option>";
							 					}


							 					 ?>
							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="nama_sekolah"  placeholder="Nama Sekolah" value="<?php echo $data->nama_sekolah;?>">
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="uppk" >
							 					<option value="">--UPPK--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_uppk");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->uppk == $data->uppk)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->uppk' $selected>$value->uppk</option>";
							 					}

							 					 ?>
							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="nama_kepala_sekolah" placeholder="Nama Kepala Sekolah" value="<?php echo $data->nama_kepala_sekolah;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="nip_nama_kepala_sekolah" placeholder="Nip Nama Kepala Sekolah (18 angka jika tidak punya isi '-'" minlength="18" value="<?php echo $data->nip_nama_kepala_sekolah;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="tempat_lahir_kepala_sekolah" placeholder="Tempat Lahir Kepala Sekolah" value="<?php echo $data->tempat_lahir_kepala_sekolah;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control datepicker" type="" name="tanggal_lahir_kepala_sekolah" placeholder="Tanggal Lahir Kepala Sekolah" value="<?php echo $data->tanggal_lahir_kepala_sekolah;?>">
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="jenis_kelamin_kepala_sekolah" >
							 					<option value="">--Jenis Kelamin Kepala Sekolah--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_jenis_kelamin");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->jenis_kelamin == $data->jenis_kelamin_kepala_sekolah)
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
								 			<select class="form-control" name="pangkat_kepala_sekolah" >
								 				<option value="">--Pangkat Golongan Kepala Sekolah--</option>
								 				<?php 

								 				$query = $this->db->query("select * from tbl_pangkat_golongan");

								 				foreach ($query->result() as $key => $value) {
								 					if($value->pangkat_golongan == $data->pangkat_kepala_sekolah)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

								 					echo "<option value='$value->pangkat_golongan' $selected>$value->pangkat_golongan</option>";
								 				}

								 				 ?>
								 			</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="pendidikan_terakhir_kepala_sekolah" >
							 					<option value="">--Pendidikan Terakhir Kepala Sekolah--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_pendidikan_terakhir");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->pendidikan_terakhir == $data->pendidikan_terakhir_kepala_sekolah)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->pendidikan_terakhir' $selected>$value->pendidikan_terakhir</option>";
							 					}

							 					 ?>
							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_pertama" placeholder="Tmt Kepala Sekolah Periode Pertama" value="<?php echo $data->tmt_kepala_sekolah_periode_pertama;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_kedua" placeholder="Tmt Kepala Sekolah Periode Kedua" value="<?php echo $data->tmt_kepala_sekolah_periode_kedua;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="tmt_kepala_sekolah_periode_ketiga" placeholder="Tmt Kepala Sekolah Periode Ketiga" value="<?php echo $data->tmt_kepala_sekolah_periode_ketiga;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="no_sk_kepala_sekolah_pertama" placeholder="No Sk Kepala Sekolah Pertama" value="<?php echo $data->no_sk_kepala_sekolah_pertama;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="no_sk_kepala_sekolah_kedua" placeholder="No Sk Kepala Sekolah Kedua" value="<?php echo $data->no_sk_kepala_sekolah_kedua;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="no_sk_kepala_sekolah_ketiga" placeholder="No Sk Kepala Sekolah Ketiga" value="<?php echo $data->no_sk_kepala_sekolah_ketiga;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="no_sertifikat_nuk" placeholder="No Sertifikat Nuk" value="<?php echo $data->no_sertifikat_nuk;?>">
							 			</div>
							 			<div class="form-group">
							 				<label>
							 					Dokumen Nuk: 
								 				<input class="form-control" type="file" name="foto_dokumen_nuk" >
							 				</label>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="akreditasi_sekolah" >
							 					<option value="">--Akreditasi Sekolah--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_akreditasi_sekolah");

							 					foreach ($query->result() as $key => $value) {
													if($value->akreditasi_sekolah == $data->akreditasi_sekolah)
													{
														$selected = "selected";
													}else
													{
														$selected = "";
													}
							 						echo "<option value='$value->akreditasi_sekolah' $selected>$value->akreditasi_sekolah</option>";
							 					}
							 					 ?>
							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="nss" placeholder="Nss" value="<?php echo $data->nss;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="npsn" placeholder="Npsn" value="<?php echo $data->npsn;?>">
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="status_sekolah">
							 					<option value="">--Status Sekolah--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_status_sekolah");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->status_sekolah == $data->status_sekolah)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->status_sekolah' $selected>$value->status_sekolah</option>";
							 					}
							 					 ?>
							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<label>
							 					Foto Sekolah: 
								 				<input class="form-control" type="file" name="foto_sekolah">
							 				</label>
							 			</div>
							 			<div class="form-group">
							 				<label>
							 					Dokumen Kegiatan Sekolah: 
								 				<input class="form-control" type="file" name="foto_dokumen_kegiatan_sekolah">
							 				</label>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_rombel" placeholder="Jumlah Rombel" value="<?php echo $data->jumlah_rombel;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_tenaga_pengajar" placeholder="Jumlah Tenaga Pengajar" value="<?php echo $data->jumlah_tenaga_pengajar;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_siswa_laki_laki" placeholder="Jumlah Siswa Laki-Laki" value="<?php echo $data->jumlah_siswa_laki_laki;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_siswa_perempuan" placeholder="Jumlah Siswa Perempuan" value="<?php echo $data->jumlah_siswa_perempuan;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_siswa_keseluruhan" placeholder="Jumlah Siswa Keseluruhan" value="<?php echo $data->jumlah_siswa_keseluruhan;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="kebutuhan_guru" placeholder="Kebutuhan Guru" value="<?php echo $data->kebutuhan_guru;?>">
							 			</div>
									</div>
									<div class="col-md-6">
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="guru_yang_tersedia" placeholder="Guru Yang Tersedia" value="<?php echo $data->guru_yang_tersedia;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="kekurangan_guru" placeholder="Kekurangan Guru" value="<?php echo $data->kekurangan_guru;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="kelebihan_guru" placeholder="Kelebihan Guru" value="<?php echo $data->kelebihan_guru;?>">
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control" name="ruang_keterampilan"  value="<?php echo $data->ruang_keterampilan;?>">
							 					<option value="">--Ruang Keterampilan--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->ruang_keterampilan)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="lab_bahasa" >
							 					<option value="">--Lab Bahasa--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->lab_bahasa)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="lab_komputer" >
							 					<option value="">--Lab Komputer--</option>
												<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->lab_komputer)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>
											 </select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="lab_ipa"  >
							 					<option value="">--Lab Ipa--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->lab_ipa)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="perpustakaan"  >
							 					<option value="">--Perpustakaan--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->perpustakaan)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="ruang_kelas"  >
							 					<option value="">--Ruang Kelas--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->ruang_kelas)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="kondisi_ruangan"  >
							 					<option value="">--Kondisi Ruangan--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->kondisi_ruangan)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<select class="form-control"  name="alat_pembelajaran"  >
							 					<option value="">--Alat Pembelajaran--</option>
							 					<?php 
							 					$query = $this->db->query("select * from tbl_ada_tidak");

							 					foreach ($query->result() as $key => $value) {
							 						if($value->ada_tidak == $data->alat_pembelajaran)
							 						{
							 							$selected = "selected";
							 						}else
							 						{
							 							$selected = "";
							 						}

							 						echo "<option value='$value->ada_tidak' $selected>$value->ada_tidak</option>";
							 					}
							 					 ?>

							 				</select>
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_matematika" placeholder="Jumlah Guru Matematika" value="<?php echo $data->jumlah_guru_matematika;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_ipa" placeholder="Jumlah Guru Ipa" value="<?php echo $data->jumlah_guru_ipa;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_ips"  placeholder="Jumlah Guru Ips" value="<?php echo $data->jumlah_guru_ips;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_sbk"  placeholder="Jumlah Guru Sbk" value="<?php echo $data->jumlah_guru_sbk;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_bahasa_indonesia" placeholder="Jumlah Guru Bahasa Indonesia" value="<?php echo $data->jumlah_guru_bahasa_indonesia;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_bahasa_inggris" placeholder="Jumlah Guru Bahasa Inggris" value="<?php echo $data->jumlah_guru_bahasa_inggris;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_pjok" placeholder="Jumlah Guru Pjok" value="<?php echo $data->jumlah_guru_pjok;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_pkn" placeholder="Jumlah Guru Pkn" value="<?php echo $data->jumlah_guru_pkn;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_prakarya" placeholder="Jumlah Guru Prakarya" value="<?php echo $data->jumlah_guru_prakarya;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_agama_islam" placeholder="Jumlah Guru Agama Islam" value="<?php echo $data->jumlah_guru_agama_islam;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_agama_katolik" placeholder="Jumlah Guru Agama Katolik" value="<?php echo $data->jumlah_guru_agama_katolik;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_agama_protestan"  placeholder="Jumlah Guru Agama Protestan" value="<?php echo $data->jumlah_guru_agama_protestan;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_agama_budha" placeholder="Jumlah Guru Agama Budha" value="<?php echo $data->jumlah_guru_agama_budha;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_guru_agama_hindu"  placeholder="Jumlah Guru Agama Hindu" value="<?php echo $data->jumlah_guru_agama_hindu;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_pns"  placeholder="Jumlah Pns" value="<?php echo $data->jumlah_pns;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_gty" placeholder="Jumlah Gty" value="<?php echo $data->jumlah_gty;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_gtk"  placeholder="Jumlah Gtk" value="<?php echo $data->jumlah_gtk;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_gtt"  placeholder="Jumlah Gtt" value="<?php echo $data->jumlah_gtt;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="number" name="jumlah_gdd" placeholder="Jumlah Gdd" value="<?php echo $data->jumlah_gdd;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="kepala_dinas_sekarang" placeholder="Kepala Dinas Sekarang" value="<?php echo $data->kepala_dinas_sekarang;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="nip_kepala_dinas" placeholder="Nip Kepala Dinas" value="<?php echo $data->nip_kepala_dinas;?>">
							 			</div>
							 			<div class="form-group">
							 				<input class="form-control" type="" name="keterangan_lain" placeholder="Keterangan Lain" value="<?php echo $data->keterangan_lain;?>">
							 			</div>
									</div>
								</div>
					 		</fieldset>
						</div>
		 			</div>

			 		<input type="hidden" name="media" value="register">

			 		<div class="row">
			 			<div class="col-md-6">
			 				<button class="btn btn-info btn-block">
			 					<span class="glyphicon glyphicon-floppy-saved"></span> 
			 					Simpan
			 				</button>
			 			</div>

			 			<div class="col-md-6">
			 				<button class="btn btn-warning btn-block" type="reset">
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
	
	$tbl_profile_pegawai = array( "username" => $_COOKIE["username"],
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

	
	$tbl_profile_pegawai_insert = $this->db->replace("tbl_profile_pegawai", $tbl_profile_pegawai);
	$allowed = array("jpg", "png");
	
	if($_FILES["dokument_sertifikat_diklat"]["name"] == "")
	{
		$dokument_sertifikat_diklat = "";
	}
	elseif($_FILES["dokument_sertifikat_diklat"]["size"] > 1048576)
	{
		alert("Dokument Sertifikasi Diklat Melebihi 1MB");
		die();
	}
	elseif(!preg_match("/image/", $_FILES["dokument_sertifikat_diklat"]["type"]))
	{
		alert("Dokumen Sertifikat Diklat Haruslah Gambar Jpg/png!");
		die();
	}
	else
	{
		$dokumen_sertifikat_diklat = "{$this->config->item('base_url')}/dokumen_sertifikat_diklat/{$_FILES["dokument_sertifikat_diklat"]["name"]}";
	}
	
	//data untuk table login 
	$tbl_login = array( "username" => $_COOKIE["username"],

		"nama"     => $nama,
		"password" => $password,
		"session"  => "user"
	);
	
	$tbl_login_insert = $this->db->replace("tbl_login", $tbl_login);
	
	//data untuk table Edit pegawai
	$tbl_pegawai = array( "username" => $_COOKIE["username"],
		"nama"                                        => $nama,
		"nip"                                         => $nip,
		"pangkat_golongan"                            => $pangkat_golongan,
		"tmt_golongan"                                => $tmt_golongan,
		"sk_pengangkatan_awal"                        => $sk_pengangkatan_awal,
		"tmt_pengangkatan_awal"                       => $tmt_pengangkatan_awal,
		"mengampu_mata_pelajaran"                     => $mengampu_mata_pelajaran,
		"jumlah_jam_mengajar"                         => $jumlah_jam_mengajar,
		"pejabat_yang_mengangkat"                     => $pejabat_yang_mengangkat,
		"no_sk_cpns"                                  => $no_sk_cpns,
		"tmt_sk_cpns"                                 => $tmt_sk_cpns,
		"no_sk_pns"                                   => $no_sk_pns,
		"tmt_sk_pns"                                  => $tmt_sk_pns,
		"no_sk_pangkat_terakhir"                      => $no_sk_pangkat_terakhir,
		"tmt_sk_pangkat_terakhir"                     => $tmt_sk_pangkat_terakhir,
		"no_nuptk"                                    => $no_nuptk,
		"no_karpeg"                                   => $no_karpeg,
		"jabatan"                                     => $jabatan,
		"unit_kerja"                                  => $unit_kerja,
		"sk_pengangkatan_jabatan_fungsional_tertentu" => $sk_pengangkatan_jabatan_fungsional_tertentu,
		"dokument_sertifikat_diklat"                  => $dokumen_sertifikat_diklat,
		"tmt_jabatan"                                 => $tmt_jabatan,
		"masa_kerja_terakhir"                         => $masa_kerja_terakhir,
		"masa_kerja_pengangkatan"                     => $masa_kerja_pengangkatan,
		"tahun_pensiun"                               => $tahun_pensiun,
		"gaji_terakhir"                               => $gaji_terakhir,
		"sertifikasi"                                 => $sertifikasi,
		"no_sertifikasi"                              => $no_sertifikasi,
		"tahun_sertifikasi"                           => $tahun_sertifikasi,
		"berkala_terakhir"                            => $berkala_terakhir,
		"no_berkala_terakhir"                         => $no_berkala_terakhir,
		"tanggal_berkala_berikutnya"                  => $tanggal_berkala_berikutnya,
		"no_berkala_berikutnya"                       => $no_berkala_berikutnya,
		"no_hp"                                       => $no_hp
	);

	
	$tbl_pegawai_insert = $this->db->replace("tbl_pegawai", $tbl_pegawai);

	//foto ijazah terakhir
	if($_FILES["foto_ijazah_terakhir"]["name"] == "")
	{
		$foto_ijazah_terakhir = "";
	}
	elseif($_FILES["foto_ijazah_terakhir"]["size"] > 1048576)
	{
		alert("Dokumen Ijazah Terakhir Melebihi 1MB!");
		die();
	}
	elseif(!preg_match("/image/", $_FILES["foto_ijazah_terakhir"]["type"]))
	{
		alert("Foto Ijazah Terakhir Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_ijazah_terakhir = "{$this->config->item('base_url')}/foto_ijazah_terakhir/{$_FILES["foto_ijazah_terakhir"]["name"]}";
	}
	
	//foto ijazah sd
	if($_FILES["foto_ijazah_sd"]["name"] == "")
	{
		$foto_ijazah_sd = "";
	}
	elseif($_FILES["foto_ijazah_sd"]["size"] > 1048576)
	{
		alert("Dokumen Ijazah Sd Melebihi 1MB");
		die();
	}elseif(!preg_match("/image/", $_FILES["foto_ijazah_sd"]["type"]))
	{
		alert("Foto Ijazah Sd Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_ijazah_sd = "{$this->config->item('base_url')}/foto_ijazah_sd/{$_FILES["foto_ijazah_sd"]["name"]}";
	}
	
	//foto ijazah smp
	if($_FILES["foto_ijazah_smp"]["name"] == "")
	{
		$foto_ijazah_smp = "";
	}
	elseif($_FILES["foto_ijazah_smp"]["size"] > 1048576)
	{
		alert("Dokumen Ijazah Smp Melebihi 1MB");
		die();
	}elseif(!preg_match("/image/", $_FILES["foto_ijazah_smp"]["type"]))
	{
		alert("Foto Ijazah Smp Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_ijazah_smp = "{$this->config->item('base_url')}/foto_ijazah_smp/{$_FILES["foto_ijazah_smp"]["name"]}";
	}
	
	//foto ijazah sma
	if($_FILES["foto_ijazah_sma"]["name"] == "")
	{
		$foto_ijazah_sma = "";
	}
	elseif($_FILES["foto_ijazah_sma"]["size"] > 1048576)
	{
		alert("Dokumen Ijazah Sma Melebihi 1MB");
		die();
	}elseif(!preg_match("/image/", $_FILES["foto_ijazah_sma"]["type"]))
	{
		alert("Foto Ijazah Sma Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_ijazah_sma = "{$this->config->item('base_url')}/foto_ijazah_sma/{$_FILES["foto_ijazah_sma"]["name"]}";
	}

	//data untuk tabel data pendidikan
	$tbl_pendidikan = array( "username" => $_COOKIE["username"],
		"nama"                   => $nama,
		"nip"                    => $nip,
		"pendidikan_terakhir"    => $pendidikan_terakhir,
		"no_ijazah_terakhir"     => $no_ijazah_terakhir,
		"foto_ijazah_terakhir"   => $foto_ijazah_terakhir,
		"universitas"            => $universitas,
		"fakultas"               => $fakultas,
		"jurusan"                => $jurusan,
		"tahun_lulus"            => $tahun_lulus,
		"riwayat_pendidikan_sd"  => $riwayat_pendidikan_sd,
		"no_ijazah_sd"           => $no_ijazah_sd,
		"foto_ijazah_sd"         => $foto_ijazah_sd,
		"riwayat_pendidikan_smp" => $riwayat_pendidikan_smp,
		"no_ijazah_smp"          => $no_ijazah_smp,
		"foto_ijazah_smp"        => $foto_ijazah_smp,
		"riwayat_pendidikan_sma" => $riwayat_pendidikan_sma,
		"no_ijazah_sma"          => $no_ijazah_sma,
		"foto_ijazah_sma"        => $foto_ijazah_sma
	);
	
	
	$tbl_pendidikan_insert = $this->db->replace("tbl_pendidikan", $tbl_pendidikan);
	
	if($_FILES["foto_ktp_suami_istri"]["name"] == "")
	{
		$foto_ktp_suami_istri = "";
	}
	elseif($_FILES["foto_ktp_suami_istri"]["size"] > 1048576)
	{
		alert("Dokumen Foto Suami Istri Melebihi 1MB");
		die();
	}elseif(!preg_match("/image/", $_FILES["foto_ktp_suami_istri"]["type"]))
	{
		alert("Foto Ktp Suami Istri Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_ktp_suami_istri = "{$this->config->item('base_url')}/foto_ktp_suami_istri/{$_FILES["foto_ktp_suami_istri"]["name"]}";
	}
	
	//fiti kartu keluarga
	if($_FILES["foto_kartu_keluarga"]["name"] == "")
	{
		$foto_kartu_keluarga = "";
	}
	elseif($_FILES["foto_kartu_keluarga"]["size"] > 1048576)
	{
		alert("Dokumen Foto Kartu Keluarga Melebihi 1MB");
		die();
	}elseif(!preg_match("/image/", $_FILES["foto_kartu_keluarga"]["type"]))
	{
		alert("Foto Kartu Keluarga Haruslah Gambar Jpg/png!");
		die();
	}else
	{
		$foto_kartu_keluarga = "{$this->config->item('base_url')}/foto_kartu_keluarga/{$_FILES["foto_kartu_keluarga"]["name"]}";
	}

	//data untuk tabel data keluarga
	$tbl_keluarga = array( "username" => $_COOKIE["username"],
		"nama"                    => $nama,
		"nip"                     => $nip,
		"status_perkawinan"       => $status_perkawinan,
		"foto_ktp_suami_istri"    => $foto_ktp_suami_istri,
		"foto_kartu_keluarga"     => $foto_kartu_keluarga,
		"nama_suami_istri"        => $nama_suami_istri,
		"nik_suami_istri"         => $nik_suami_istri,
		"jumlah_anak"             => $jumlah_anak,
		"nama_anak_pertama"       => $nama_anak_pertama,
		"nik_anak_pertama"        => $nik_anak_pertama,
		"nama_anak_kedua"         => $nama_anak_kedua,
		"nik_anak_kedua"          => $nik_anak_kedua,
		"nama_anak_ketiga"        => $nama_anak_ketiga,
		"nik_anak_ketiga"         => $nik_anak_ketiga,
		"nama_ayah_kandung"       => $nama_ayah_kandung,
		"nik_ayah_kandung"        => $nik_ayah_kandung,
		"nama_ibu_kandung"        => $nama_ibu_kandung,
		"nik_ibu_kandung"         => $nik_ibu_kandung,
		"pekerjaan_suami_istri"   => $pekerjaan_suami_istri,
		"nip_suami_istri"         => $nip_suami_istri,
		"penghasilan_suami_istri" => $penghasilan_suami_istri,
		"alamat_rumah"            => $alamat_rumah,
		"desa_kelurahan"          => $desa_kelurahan,
		"kecamatan"               => $kecamatan,
		"kabupaten"               => $kabupaten,
		"provinsi"                => $provinsi,
		"kode_pos"                => $kode_pos
	);
	
	
	$tbl_keluarga_insert = $this->db->replace("tbl_keluarga", $tbl_keluarga);


	// khusus untuk kepala sekolah jika memilih sk pengangkatan jabatan fungsional tertentu sebagai kepala sekolah
	if($sk_pengangkatan_jabatan_fungsional_tertentu == "Kepala Sekolah")
	{
		if($_FILES["foto_dokumen_nuk"]["name"] == "")
		{
			$foto_dokumen_nuk = "{$this->config->item('base_url')}/foto_dokumen_nuk/{$_FILES["foto_dokumen_nuk"]["name"]}";
		}
		elseif($_FILES["foto_dokumen_nuk"]["size"] > 1048576)
		{
			alert("Dokumen Foto Nuk Keluarga Melebihi 1MB");
			die();
		}elseif(!preg_match("/image/", $_FILES["foto_dokumen_nuk"]["type"]))
		{
			alert("Foto Dokumen Nuk Haruslah Gambar Jpg/png!");
			die();
		}else
		{
			$foto_dokumen_nuk = "{$this->config->item('base_url')}/foto_dokumen_nuk/{$_FILES["foto_dokumen_nuk"]["name"]}";
		}
		
		//foto sekolah
		if($_FILES["foto_sekolah"]["name"] == "")
		{
			$foto_sekolah = "";
		}
		elseif($_FILES["foto_sekolah"]["size"] > 1048576)
		{
			alert("Dokumen Foto Sekolah Melebihi 1MB");
			die();
		}elseif(!preg_match("/image/", $_FILES["foto_sekolah"]["type"]))
		{
			alert("Foto Sekolah Haruslah Gambar Jpg/png!");
			die();
		}else
		{
			$foto_sekolah = "{$this->config->item('base_url')}/foto_sekolah/{$_FILES["foto_sekolah"]["name"]}";
		}
		
		//foto dokumen kegiatan sekolah
		if($_FILES["foto_dokumen_kegiatan_sekolah"]["name"] == "")
		{
			$foto_dokumen_kegiatan_sekolah = "";
		}
		elseif($_FILES["foto_dokumen_kegiatan_sekolah"]["size"] > 1048576)
		{
			alert("Dokumen Foto Kegiatan Sekolah Melebihi 1MB");
			die();
		}elseif(!preg_match("/image/", $_FILES["foto_dokumen_kegiatan_sekolah"]["type"]))
		{
			alert("Foto Dokumen Kegiatan Sekolah Haruslah Gambar Jpg/png!");
			die();
		}else
		{
			$foto_dokumen_kegiatan_sekolah = "{$this->config->item('base_url')}/foto_dokumen_kegiatan_sekolah/{$_FILES["foto_dokumen_kegiatan_sekolah"]["name"]}";
		}
			
		$tbl_sekolah = array( "username" => $_COOKIE["username"],
			"nama"                               => $nama,
			"nip"                                => $nip,
			"unit_kerja"                         => $unit_kerja,
			"jenjang_sekolah"                    => $jenjang_sekolah,
			"nama_sekolah"                       => $nama_sekolah,
			"uppk"                               => $uppk,
			"nama_kepala_sekolah"                => $nama_kepala_sekolah,
			"nip_nama_kepala_sekolah"            => $nip_nama_kepala_sekolah,
			"tempat_lahir_kepala_sekolah"        => $tempat_lahir_kepala_sekolah,
			"tanggal_lahir_kepala_sekolah"       => $tanggal_lahir_kepala_sekolah,
			"jenis_kelamin_kepala_sekolah"       => $jenis_kelamin_kepala_sekolah,
			"pangkat_kepala_sekolah"             => $pangkat_kepala_sekolah,
			"pendidikan_terakhir_kepala_sekolah" => $pendidikan_terakhir_kepala_sekolah,
			"tmt_kepala_sekolah_periode_pertama" => $tmt_kepala_sekolah_periode_pertama,
			"tmt_kepala_sekolah_periode_kedua"   => $tmt_kepala_sekolah_periode_kedua,
			"tmt_kepala_sekolah_periode_ketiga"  => $tmt_kepala_sekolah_periode_ketiga,
			"no_sk_kepala_sekolah_pertama"       => $no_sk_kepala_sekolah_pertama,
			"no_sk_kepala_sekolah_kedua"         => $no_sk_kepala_sekolah_kedua,
			"no_sk_kepala_sekolah_ketiga"        => $no_sk_kepala_sekolah_ketiga,
			"no_sertifikat_nuk"                  => $no_sertifikat_nuk,
	        "foto_dokumen_nuk"                   => $foto_dokumen_nuk,
			"akreditasi_sekolah"                 => $akreditasi_sekolah,
			"nss"                                => $nss,
			"npsn"                               => $npsn,
			"status_sekolah"                     => $status_sekolah,
			"foto_sekolah"                       => $foto_sekolah,
			"foto_dokumen_kegiatan_sekolah"      => $foto_dokumen_kegiatan_sekolah,
			"jumlah_rombel"                      => $jumlah_rombel,
			"jumlah_tenaga_pengajar"             => $jumlah_tenaga_pengajar,
			"jumlah_siswa_laki_laki"             => $jumlah_siswa_laki_laki,
			"jumlah_siswa_perempuan"             => $jumlah_siswa_perempuan,
			"jumlah_siswa_keseluruhan"           => $jumlah_siswa_keseluruhan,
			"kebutuhan_guru"                     => $kebutuhan_guru,
			"guru_yang_tersedia"                 => $guru_yang_tersedia,
			"kekurangan_guru"                    => $kekurangan_guru,
			"kelebihan_guru"                     => $kelebihan_guru,
			"ruang_keterampilan"                 => $ruang_keterampilan,
			"lab_bahasa"                         => $lab_bahasa,
			"lab_komputer"                       => $lab_komputer,
			"lab_ipa"                            => $lab_ipa,
			"perpustakaan"                       => $perpustakaan,
			"ruang_kelas"                        => $ruang_kelas,
			"kondisi_ruangan"                    => $kondisi_ruangan,
			"alat_pembelajaran"                  => $alat_pembelajaran,
			"jumlah_guru_matematika"             => $jumlah_guru_matematika,
			"jumlah_guru_ipa"                    => $jumlah_guru_ipa,
			"jumlah_guru_ips"                    => $jumlah_guru_ips,
			"jumlah_guru_sbk"                    => $jumlah_guru_sbk,
			"jumlah_guru_bahasa_indonesia"       => $jumlah_guru_bahasa_indonesia,
			"jumlah_guru_bahasa_inggris"         => $jumlah_guru_bahasa_inggris,
			"jumlah_guru_pjok"                   => $jumlah_guru_pjok,
			"jumlah_guru_pkn"                    => $jumlah_guru_pkn,
			"jumlah_guru_prakarya"               => $jumlah_guru_prakarya,
			"jumlah_guru_agama_islam"            => $jumlah_guru_agama_islam,
			"jumlah_guru_agama_katolik"          => $jumlah_guru_agama_katolik,
			"jumlah_guru_agama_protestan"        => $jumlah_guru_agama_protestan,
			"jumlah_guru_agama_budha"            => $jumlah_guru_agama_budha,
			"jumlah_guru_agama_hindu"            => $jumlah_guru_bahasa_inggris,
			"jumlah_pns"                         => $jumlah_pns,
			"jumlah_gty"                         => $jumlah_gty,
			"jumlah_gtk"                         => $jumlah_gtk,
			"jumlah_gtt"                         => $jumlah_gtt,
			"jumlah_gdd"                         => $jumlah_gdd,
			"kepala_dinas_sekarang"              => $kepala_dinas_sekarang,
			"nip_kepala_dinas"                   => $nip_kepala_dinas,
			"keterangan_lain"                    => $keterangan_lain
		);
		
		$query = $this->db->query("select * from tbl_sekolah where username='$_COOKIE[username]' order by id_data_sekolah desc limit 1");
		
		if($query->num_rows() == 0 && $sk_pengangkatan_jabatan_fungsional_tertentu == "Kepala Sekolah")
		{
			$tbl_sekolah["username"] = $_COOKIE["username"];
			$tbl_sekolah_insert = $this->db->insert("tbl_sekolah", $tbl_sekolah);
		}else 
		{
			
			$tbl_sekolah_insert = $this->db->replace("tbl_sekolah", $tbl_sekolah);
		}

		if($tbl_profile_pegawai_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert && $tbl_sekolah_insert)
		{
			//data foto dokumen kepala sekolah
			move_uploaded_file($_FILES["foto_dokumen_kegiatan_sekolah"]["tmp_name"], "{$this->config->item('base_path')}/foto_dokumen_kegiatan_sekolah/{$_FILES["dokumen_sertifikat_diklat"]["name"]}");
			move_uploaded_file($_FILES["foto_sekolah"]["tmp_name"], "{$this->config->item('base_path')}/foto_sekolah/{$_FILES["foto_sekolah"]["name"]}");
			move_uploaded_file($_FILES["foto_dokumen_nuk"]["tmp_name"], "{$this->config->item('base_path')}/foto_dokumen_nuk/{$_FILES["foto_dokumen_nuk"]["name"]}");

			//foto dokumen karyawan
			move_uploaded_file($_FILES["foto_ijazah_terakhir"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_terakhir/{$_FILES["foto_ijazah_terakhir"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_sd"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_sd/{$_FILES["foto_ijazah_sd"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_smp"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_smp/{$_FILES["foto_ijazah_smp"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_sma"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_sma/{$_FILES["foto_ijazah_sma"]["name"]}");
			move_uploaded_file($_FILES["foto_ktp_suami_istri"]["tmp_name"], "{$this->config->item('base_path')}/foto_ktp_suami_istri/{$_FILES["foto_ktp_suami_istri"]["name"]}");
			move_uploaded_file($_FILES["foto_kartu_keluarga"]["tmp_name"], "{$this->config->item('base_path')}/foto_kartu_keluarga/{$_FILES["foto_kartu_keluarga"]["name"]}");
			move_uploaded_file($_FILES["dokumen_sertifikat_diklat"]["tmp_name"], "{$this->config->item('base_path')}/dokumen_sertifikat_diklat/{$_FILES["dokumen_sertifikat_diklat"]["name"]}");
			
			alert("Berhasil Mengedit Semua Data", time() + 1000000, "/");
			location($this->uri->segment(2));
		}else
		{
			alert("Gagal Mengedit Semua Data", time() + 1000000, "/");
		die();
		}
	}else
	{
		if($tbl_profile_pegawai_insert && $tbl_login_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert)
		{
			//foto dokumen karyawan
			move_uploaded_file($_FILES["foto_ijazah_terakhir"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_terakhir/{$_FILES["foto_ijazah_terakhir"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_sd"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_sd/{$_FILES["foto_ijazah_sd"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_smp"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_smp/{$_FILES["foto_ijazah_smp"]["name"]}");
			move_uploaded_file($_FILES["foto_ijazah_sma"]["tmp_name"], "{$this->config->item('base_path')}/foto_ijazah_sma/{$_FILES["foto_ijazah_sma"]["name"]}");
			move_uploaded_file($_FILES["foto_ktp_suami_istri"]["tmp_name"], "{$this->config->item('base_path')}/foto_ktp_suami_istri/{$_FILES["foto_ktp_suami_istri"]["name"]}");
			move_uploaded_file($_FILES["foto_kartu_keluarga"]["tmp_name"], "{$this->config->item('base_path')}/foto_kartu_keluarga/{$_FILES["foto_kartu_keluarga"]["name"]}");
			move_uploaded_file($_FILES["dokumen_sertifikat_diklat"]["tmp_name"], "{$this->config->item('base_path')}/dokumen_sertifikat_diklat/{$_FILES["dokumen_sertifikat_diklat"]["name"]}");

			alert("Berhasil Mengedit Semua Data", time() + 1000000, "/");
			location($this->uri->segment(2));
		}else
		{
			alert("Gagal Menambahkan Semua Data", time() + 1000000, "/");
			die();
		}
	}
}

 ?>
