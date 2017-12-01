<?php 

$query = $this->db->query("delete from $_GET[table] where id=$_GET[id]");

if($query)
{
	setcookie("pesan_insert", "Berhasil mendelete data dengan id $_GET[id]");
	header("location: ");
}
else
{
	setcookie("pesan_insert", "Gagal mendelete data dengan id $_GET[id]");
	header("location: ");
}

 ?>