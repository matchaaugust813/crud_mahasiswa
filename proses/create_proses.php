<?php

include "../config.php";

$nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim      = mysqli_real_escape_string($koneksi, $_POST['nim']);
$jurusan  = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$angkatan = mysqli_real_escape_string($koneksi, $_POST['angkatan']);

$query = "INSERT INTO tb_mhs (nama, nim, jurusan, angkatan)
          VALUES ('$nama', '$nim', '$jurusan', '$angkatan')";

mysqli_query($koneksi, $query);

header("Location: ../index.php");

?>
