<?php
include '../config.php';

//id
//Nama
//nim
//jurusan 
//angkatan


$id = $_POST ['id'];
$nama = $_POST ['nama'];
$jurusan = $_POST ['jurusan'];
$angkatan = $_POST ['angkatan'];
$nim = $_POST ['nim'];

$query = mysqli_query(
    $koneksi,
    "UPDATE  tb_mhs
    SET id='$id', nama='$nama',jurusan='$jurusan', angkatan='$angkatan', nim='$nim' 
    WHERE id='$id'"

);
    header("Location: ../index.php");
?>