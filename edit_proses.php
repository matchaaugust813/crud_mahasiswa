<?php
include 'index.php';

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
    $conn,
    "UPDATE  tb_mhs
    SET id='$id', nama='$nama',jrursan='$jurusan', angkatan='$angkatan', nim='$nim' 
    WHERE id='$id'"

);
?>