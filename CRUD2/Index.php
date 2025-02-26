<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1><b>Data Mahasiswa</b></h1>
  <button><a href="tambah_mahasiswa.php">Tambah Data</a><br></button>
  <table border="1">
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Nim</th>
      <th>Email</th>
      <th>Nomor</th>
      <th>Jurusan</th>
      <th>Aksi</th>
      </tr>
      
<?php while ($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><php echo $row["id"]; ?></td>
    <td><php echo $row["nama"]; ?></td>
    <td><php echo $row["nim"]; ?></td>
    <td><php echo $row["email"]; ?></td> 
    <td><php echo $row["nomor"]; ?></td> 
    <td><php echo $row["jurusan"]; ?></td>
    <td>
      <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">hapus</a>
    </td>
    </tr>
  <?php } ?>
</table>
</body>

</html>

<?php $conn->close(); ?>


<?php
include 'koneksi.php';

$sql = "SELECT * FROM jurusan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Data Jurusan</title>
</head>

<body>
  <h1><b>Data Jurusan</b></h1>
  <button><a href="tambah_jurusan.php">Tambah Data</a></button>
  <table border="1">
    <tr>
      <th>Id</th>
      <th>Jurusan</th>
      <th>Aksi</th>
      </tr>
      
<?php while ($row = $result->fetch_assoc()) { ?>
  <tr> 
    <td><php echo $row["id"]; ?></td>
    <td><php echo $row["jurusan"]; ?></td>
    <td>
      <a href="edit_jurusan.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a href="hapus_jurusan.php?id=<?php echo $row['id']; ?>">hapus</a>
    </td>
    </tr>
  <?php } ?>
</table>
</body>

</html>

<?php $conn->close(); ?>