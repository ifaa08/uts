
<?php 	
$koneksi = mysqli_connect("localhost", "root","","paw_per_6");
$id = $_GET['id'];
$hapus = "DELETE FROM mhs WHERE id_mhs = $id";
$hasil = mysqli_query($koneksi,$hapus);
if ($hasil) {
 	header('location:mhs.php');
 }else{
   echo "Hapus Data Gagal"; 
 } 
 ?>