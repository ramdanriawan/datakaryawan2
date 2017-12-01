<?php 
extract($_POST);

if($_POST["media"] == "register")
{
	//data untuk tabel profile pegawai

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
		"tgl_lahir"            => $tgl_lahir,
		"nik"                  => $nik,
		"npwp"                 => $npwp,
		"jenis_kelamin"        => $jenis_kelamin,
		"status_pegawai"       => $status_pegawai,
		"jenjang_tempat_tugas" => $jenjang_tempat_tugas
	);

	$tbl_profile_pegawai_insert = $this->db->insert("tbl_profile_pegawai", $tbl_profile_pegawai);

	if($_FILES["dokumen_sertifikat_diklat"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Sertifikasi Diklat Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["dokumen_sertifikat_diklat"]["tmp_name"], "../../dokumen_sertifikat_diklat/$_FILES[dokumen_sertifikat_diklat][name]");
		$dokumen_sertifikat_diklat = base_url() . "dokumen_sertifikat_diklat/$_FILES[dokumen_sertifikat_diklat][name]";
	}

	//data untuk table formulir pegawai
	$tbl_pegawai = array(
		"nama"                                        => $nama,
		"nip"                                         => $nip,
		"pangkat"                                     => $pangkat,
		"tmt_golongan"                                => $tmt_golongan,
		"sk_pengangkatan_awal"                        => $sk_pengangkatan,
		"tmt_pengangkatan_awal"                       => $tmt_pengangkatan,
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
		"dokumen_sertifikat_diklat"                   => $dokumen_sertifikat_diklat,
		"tmt_jabatan"                                 => $tmt_jabatan,
		"masa_kerja_terakhir"                         => $masa_kerja_sk,
		"masa_kerja_pengkangkatan"                    => $masa_kerja_pengkangkatan,
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

	$tbl_pegawai_insert = $this->db->insert("tbl_pegawai", $tbl_pegawai);


	if($_FILES["foto_ijazah_terakhir"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Terakhir Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_terakhir"]["tmp_name"], "../../foto_ijazah_terakhir/$_FILES[ijazah_terakhir][name]");
		$ijazah_terakhir = base_url() . "foto_ijazah_terakhir/$_FILES[ijazah_terakhir][name]";
	}
	if($_FILES["foto_ijazah_sd"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Sd Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_sd"]["tmp_name"], "../../foto_ijazah_sd/$_FILES[foto_ijazah_sd][name]");
		$foto_ijazah_sd = base_url() . "foto_ijazah_sd/$_FILES[foto_ijazah_sd][name]";
	}
	if($_FILES["foto_ijazah_smp"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Smp Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_smp"]["tmp_name"], "../../foto_ijazah_smp/$_FILES[foto_ijazah_smp][name]");
		$foto_ijazah_smp = base_url() . "foto_ijazah_smp/$_FILES[foto_ijazah_smp][name]";
	}
	if($_FILES["foto_ijazah_sma"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Ijazah Sma Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_ijazah_sma"]["tmp_name"], "../../foto_ijazah_sma/$_FILES[foto_ijazah_sma][name]");
		$foto_ijazah_sma = base_url() . "foto_ijazah_sma/$_FILES[foto_ijazah_sma][name]";
	}

	//data untuk tabel data pendidikan
	$tbl_pendidikan = array(
		"nama"                   => $nama,
		"nip"                    => $nip,
		"pendidikan_terakhir"    => $pendidikan_terakhir,
		"no_ijazah_terakhir"     => $no_ijazah_terakhir,
		"ijazah_terakhir"        => $ijazah_terakhir,
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

	$tbl_pendidikan_insert = $this->db->insert("tbl_pendidikan", $tbl_pendidikan);


	if($_FILES["foto_ktp_suami_istri"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Suami Istri Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_ktp_suami_istri"]["tmp_name"], "../../foto_ktp_suami_istri/$_FILES[foto_ktp_suami_istri][name]");
		$foto_ijazah_sma = base_url() . "foto_ktp_suami_istri/$_FILES[foto_ktp_suami_istri][name]";
	}
	if($_FILES["foto_kartu_keluarga"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Kartu Keluarga Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_kartu_keluarga"]["tmp_name"], "../../foto_kartu_keluarga/$_FILES[foto_kartu_keluarga][name]");
		$foto_ijazah_sma = base_url() . "foto_kartu_keluarga/$_FILES[foto_kartu_keluarga][name]";

	//data untuk tabel data keluarga
	$tbl_keluarga = array(
		"nama"                    => $nama,
		"nip"                     => $nip,
		"status_perkawinan"       => $status_perkawinan,
		"foto_ktp_suami_istri"    => $foto_ktp_suami_istri,
		"foto_kartu_keluarga"     => $foto_kk,
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

	$tbl_keluarga_insert = $this->db->insert("tbl_keluarga", $tbl_keluarga);

	if($_FILES["foto_dokumen_nuk"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Nuk Keluarga Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_dokumen_nuk"]["tmp_name"], "../../foto_dokumen_nuk/$_FILES[foto_dokumen_nuk][name]");
		$foto_ijazah_sma = base_url() . "foto_dokumen_nuk/$_FILES[foto_dokumen_nuk][name]";
	}
	if($_FILES["foto_sekolah"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Sekolah Keluarga Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_sekolah"]["tmp_name"], "../../foto_sekolah/$_FILES[foto_sekolah][name]");
		$foto_ijazah_sma = base_url() . "foto_sekolah/$_FILES[foto_sekolah][name]";
	}
	if($_FILES["foto_dokumen_kegiatan_sekolah"]["size"] > 12400000)
	{
		setcookie("pesan_insert", "Dokumen Foto Kegiatan Sekolah Melebihi 1MB");
		header("Location: login");
	}else
	{
		move_uploaded_file($_FILES["foto_dokumen_kegiatan_sekolah"]["tmp_name"], "../../foto_dokumen_kegiatan_sekolah/$_FILES[foto_dokumen_kegiatan_sekolah][name]");
		$foto_ijazah_sma = base_url() . "foto_dokumen_kegiatan_sekolah/$_FILES[foto_dokumen_kegiatan_sekolah][name]";
	}

	// khusus untuk kepala sekolah jika memilih sk pengangkatan jabatan fungsional tertentu sebagai kepala sekolah
	if($sk_pengangkatan_jabatan_fungsional_tertentu == "Kepala Sekolah")
	{
		$tbl_sekolah = array(
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
			"no_sertifikasi_nuk"                 => $no_sertifikasi_nuk,
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
	}
		);

		$tbl_sekolah_insert = $this->db->insert("tbl_sekolah", $tbl_sekolah);

		if($tbl_profile_pegawai_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert && $tbl_sekolah_insert)
		{
			setcookie("pesan_insert", "Berhasil Menambahkan Semua Data", time() + 1000000, "/");
			header("Location: login");
		}else
		{
			setcookie("pesan_insert", "Gagal Menambahkan Semua Data", time() + 1000000, "/");
			header("Location: login");
		}
	}else
	{
		if($tbl_profile_pegawai_insert && $tbl_pegawai_insert && $tbl_pendidikan_insert && $tbl_keluarga_insert)
		{
			setcookie("pesan_insert", "Berhasil Menambahkan Semua Data", time() + 1000000, "/");
			header("Location: login");
		}else
		{
			setcookie("pesan_insert", "Gagal Menambahkan Semua Data", time() + 1000000, "/");
			header("Location: login");
		}
	}
}

 ?>