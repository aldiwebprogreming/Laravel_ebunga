<?php 
		
include "koneksi.php";


$id = $_GET['id'];




$result = mysqli_query($conn, "SELECT * FROM tbl_kecamatan WHERE id_kab ='$id'");
	echo "<option>--Pilih Kecamatan--</option>";
	while ($data3 = mysqli_fetch_array($result)) {
 	  ?>

 	<option value="<?= $data3['id_kec'] ?>"><?= $data3['nama'] ?></option>
 <?php } ?>



