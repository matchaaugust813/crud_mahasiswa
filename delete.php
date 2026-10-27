<?php

include "config.php";

$id = (int) $_GET['id'];

$query = "DELETE FROM tb_mhs WHERE id = '$id'";

mysqli_query($koneksi, $query);

header("Location: index.php");

?>