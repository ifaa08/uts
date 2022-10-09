<?php
$koneksi = mysqli_connect("localhost","root","","paw_per_6");
$sql = "SELECT id_Mhs,nama_mhs,nama_prodi,alamat FROM mhs m,tbl_prodi p WHERE m.id_prodi =p.id_prodi";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    a:link {
        text-decoration: none;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Data Mahasiswa</h2>
  <p>data ini dari my sql:</p>  
  <button type="button" class="btn btn-warning"><a href="mhs1.php">tambah</a></button>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id_mhs</th>
        <th>nama_mhs</th>
        <th>prodi_mhs</th>
        <th>alamat</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          while($baris=mysqli_fetch_assoc($hasil)) {

      ?>
      <tr>
        <td><?php echo $baris['id_Mhs'];?></td>
        <td><?php echo $baris['nama_mhs'];?></td>
        <td><?php echo $baris['nama_prodi'];?></td>
        <td><?php echo $baris['alamat'];?></td>
        <td> 
          <a href="formedit.php?id=<?php echo $baris['id_Mhs'];?> "class="btn btn-info">edit</a>
          <a href="delete.php?id=<?php echo $baris['id_Mhs'];?>" class="btn btn-danger" onclick="return confirm('yakin');">delete</a>

        </td>
      </tr>
      <?php }?>
      
    </tbody>
  </table>
</div>

</body>
</html>
