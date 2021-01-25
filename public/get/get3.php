<?php 
		
include "koneksi.php";


$id = $_GET['id'];




$result = mysqli_query($conn, "SELECT * FROM tbl_kelurahan WHERE id_kec ='$id'");
	echo "<option>--Pilih Kelurahan--</option>";
	while ($data = mysqli_fetch_array($result)) {
 	  ?>

 	<option value="<?= $data['id_kel'] ?>"><?= $data['nama'] ?></option>
 <?php } ?>



