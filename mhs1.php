<?php
$koneksi = mysqli_connect("localhost","root","","paw_per_6");
$sql1 = "SELECT * FROM tbl_prodi";
$hasil = mysqli_query($koneksi,$sql1);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form tambah mahasiswa</title>
	<style>
		body{
			background-color: lightcoral;
		}
		h1{
			text-align: center;
		}
		p{
			font-size: 18px;
			text-align: center;
		}
	</style>
</head>
<body>

	<h1>Form  Mahasiswa</h1>
	<form method="POST" action="action.php">
		<p>Nama Mahasiswa : <input type="text" name="nama_mhs"></p>
		<p>Id Prodi : 
					<select class="form-select" name="prodi">
					  <option>->pilih prodi<-</option>
					  <?php
					  	while($baris=mysqli_fetch_assoc($hasil)){
					  	?>
					  <option value="<?php echo $baris['id_prodi'];?>"><?php echo $baris ['nama_prodi'];?></option>
					  <?php }?>
					</select>
		<p>Alamat : <input type="text" name="alamat"></p>
		<p><button type="submit">kirim</button></p>
	</form>

</body>
</html>