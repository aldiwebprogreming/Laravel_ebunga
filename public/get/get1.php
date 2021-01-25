<?php 
		
include "koneksi.php";


$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM tbl_kabupaten WHERE id_prov ='$id'");
	echo "<option>--Pilih kabupaten--</option>";
	while ($data = mysqli_fetch_array($result)) {
 	  ?>

 	<option value="<?= $data['id_kab'] ?>"><?= $data['nama'] ?></option>
 <?php } ?>



