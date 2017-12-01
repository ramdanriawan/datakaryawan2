<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="datafile" value="500" required>
	<input type="submit" name="username" value="submit">
</form>

<?php 
print_r($_FILES);

	if(!preg_match("/image/", $_FILES["datafile"]["type"]))
	{
		echo "Foto Ijazah Terakhir Haruslah Gambar Jpg/png!";
		die();
}else
{
	echo "ya";
 }

 ?>
