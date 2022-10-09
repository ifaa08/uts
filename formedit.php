<?php
$koneksi = mysqli_connect("localhost","root","","paw_per_6");

$id =$_GET['id'];
$sql = "SELECT * FROM tbl_prodi";
$hasil = mysqli_query($koneksi,$sql);
$data = mysqli_query($koneksi,"SELECT * FROM mhs WHERE id_Mhs =$id");
$rawr =mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form edit mahasiswa</title>
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

  <h1>Form Edit Mahasiswa</h1>
  <form method="post" action="haledit.php">
    <input type="hidden" name="id_mhs" value="<?php echo $rawr['id_mhs']; ?>">
    <p>Nama Mahasiswa : <input type="text" name="nama_Mhs" value="<?php echo $rawr['nama_Mhs'];?>"></p>
    <p>Id Prodi : 
          <select class="form-select" name="prodi">
            <option>->pilih prodi<-</option>
            <?php
              while($baris=mysqli_fetch_assoc($hasil)){
              ?>
            <option value="<?php echo $baris['id_prodi'];?>"><?php echo $baris ['nama_prodi'];?></option>
            <?php }?>
          </select>
    <p>Alamat : <input type="text" value="<?php echo $rawr['alamat'];?>" name="alamat"></p>
    <p><input type="submit" value="send" name="kirim"></p>
  </form>

</body>
</html>