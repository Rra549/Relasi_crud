<?php
include 'koneksi.php';

$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO jurusan (jurusan) VALUES ('$jurusan')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();