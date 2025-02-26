<?php
include 'koneksi.php';
$id = $_POST['id'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE jurusan SET jurusan='$jurusan' WHERE id=$id";

if ($conn->query($sql) === TRUE){
  header("Location: index.php");
  exit;
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
