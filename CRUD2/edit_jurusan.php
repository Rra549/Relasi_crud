<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM jurusan WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF=8">
  <title>Edit Data Jurusan</title>
</head>

<body>
<table border="1">
  <h2>Edit Data Jurusan</h2>
  <form action="proses_edit_jurusan.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    Jurusan: <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>">
    <button><UPDATE type="submit" value="tambah">update</UPDATE></button>
  </form>
</body>
</html>

