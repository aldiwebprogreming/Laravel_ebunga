<?php 
use Illuminate\Support\Facades\DB;
 ?>

<!DOCTYPE html>
<html><head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head><style>
	table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:black;
    font-weight:bold;
    font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}
</style><body>


		<img src="{{url('logo/logo1.png')}}" style='height: 100px; position: absolute; bottom: 50px; left:120 px; top:30px;'>

		<h3 style="text-align: center; margin-bottom: 20px;">LAPORAN DATA BRENCH SELLER</h3>
			<h3 style="text-align: center;">PT.EBUNGA SUSKSES MAKMUR</h3>
			<p style="text-align: center;font-style: italic;"><strong>Jl.Cemara No.15 Medan Estate, Kabupaten Deliserdang, Sumatera Utara</strong></p>
			<hr style="border: 3px solid;">
		<br><br><br>

	<p><strong> Dicetak Pada Tanggal : <?= date('m-d-Y'); ?></strong></p>
		
	<table border="1" >
		<tr>
			<th>No</th>
			<th width="">Kode Branch</th>
			<th width="">Nama Branch</th>
			<th width="">Id Seller</th>
			<th width="">Alamat</th>
			<th width=""> Phone</th>
			<th width="">Email</th>
			<th width="">Waktu Pengajuan</th>
			<th width="">Waktu Approve</th>
			<th width="">Status Branch</th>
			<th width="">Active</th>			
		</tr>

			<?php $no = 1 ?>
			 @foreach($bseller as $data)	


			<?php 

				$alamat = $data->alamat;
				$id_kel = substr($alamat, 0, 10);
				echo $id_kel;

				$id_kec = substr($alamat,11,6);
				// echo $id_kec ;

				$id_kab = substr($alamat,11,4);
				// echo $id_kab ;

				$id_prov = substr($alamat,23,2);

				$kel =DB::table('tbl_kelurahan')->where('id_kel',$id_kel)->get();
				foreach ($kel as $list_kel) {
					
				}

				$kec =DB::table('tbl_kecamatan')->where('id_kec',$id_kec)->get();
				foreach ($kec as $list_kec) {
					
				}

				$kab =DB::table('tbl_kabupaten')->where('id_kab',$id_kab)->get();
				foreach ($kab as $list_kab) {
					
				}
				$prov =DB::table('tbl_provinsi')->where('id_prov',$id_prov)->get();
				foreach ($prov as $list_prov) {
					
				}




			 ?>
		<tr>
			 <td>{{$no++}}</td>
			<td>{{$data->kd_branch}}</td>
			<td>{{$data->nama_branch}}</td>
			<td>{{$data->id_seller}}</td>
			<td>{{$list_kel->nama}}-{{$list_kel->nama}}-{{$list_kec->nama}}-{{$list_kab->nama}}-{{$list_prov->nama}}</td>
			<td>{{$data->phone}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->waktu_pengajuan}}</td>
			<td>{{$data->waktu_approve}}</td>
			<td>{{$data->status_branch}}</td>
			<td>{{$data->active}}</td>

			
		</tr>
			
		@endforeach
					
	</table>

	<div class="" style="position: absolute; top :100%">
		<hr class="" style="border: 1px solid; color: black;" > 
		<small style="font-style: italic;"> <?= date('m-d-Y'); ?> </small>

	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body></html>