<?php 
$koneksi = mysqli_connect("localhost", "root","","paw_per_6");
$id = $_POST['id_mhs'];
$nama = $_POST['nama_Mhs'];
$prodi =$_POST['prodi'];
$alamat = $_POST['alamat'];
$update = "UPDATE mhs SET id_prodi= '$prodi',nama_Mhs='$nama', alamat='$alamat' WHERE id_mhs =$id";
$hasil = mysqli_query($koneksi,$update);
if ($hasil) {
	echo " <script>window.alert('Update Data Mahasiswa Berhasil'); document.location='mhs.php';</script>";
		
}else{
	echo "Data Gagal di Update";
	
}


 ?>