<?php

$koneksi= mysqli_connect("localhost","root","","pertemuan_5");

if ($koneksi) {
	echo "berhasil melakukan koneksi";
}else
{
	echo "gagal melakukan koneksi";
}

?>