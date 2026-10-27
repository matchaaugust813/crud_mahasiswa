<?php

include "../config.php";

$id       = (int) $_POST['id'];
$nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim      = mysqli_real_escape_string($koneksi, $_POST['nim']);
$jurusan  = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$angkatan = mysqli_real_escape_string($koneksi, $_POST['angkatan']);

$query = "UPDATE tb_mhs
          SET nama = '$nama', nim = '$nim', jurusan = '$jurusan', angkatan = '$angkatan'
          WHERE id = '$id'";

mysqli_query($koneksi, $query);

header("Location: ../index.php");

?>
