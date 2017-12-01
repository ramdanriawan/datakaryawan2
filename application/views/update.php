<?php 

$this->db->where("id", $_POST["id"]);
$table = $_POST["table"];

unset($_POST["table"]);
unset($_POST["id"]);

if($this->db->update($table, $_POST))
{
	setcookie("pesan_insert", "Berhasil melakukan update data untuk id $_POST[id]");
	header("location: ");
}
else 
{
	setcookie("pesan_insert", "Gagal melakukan update data untuk id $_POST[id]");
	header("location: ");
}

 ?>