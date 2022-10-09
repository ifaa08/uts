<?php
	$koneksi= mysqli_connect("localhost","root","","paw_per_6");
	$prodi = $_POST['prodi'];
	$nama = $_POST['nama_mhs'];
	$alamat = $_POST['alamat'];

	$tambah ="INSERT INTO mhs VALUES (NULL,'$prodi','$nama','$alamat')";
	$hasil = mysqli_query($koneksi,$tambah);
	$simpan =$_POST['simpan'];
	if ($hasil) {
	echo " <script>window.alert('Tambah Data Mahasiswa Berhasil'); document.location='mhs.php';</script>";
	}else {
	echo "<script>window.alert('Mohon Maaf, Tambah Data Mahasiswa Gagal'); document.location='mhs.php';</script>";
	
	}

?>