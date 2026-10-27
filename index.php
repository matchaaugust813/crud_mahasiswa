<?php

include "config.php";

$data = mysqli_query($koneksi, "SELECT * FROM tb_mhs");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
</head>
<body>
      <h1>APLIKASI CRUD MAHASISWA</h1>

        <a href="create.php">Tambah data</a>
        <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['nama']); ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo htmlspecialchars($row['jurusan']); ?></td>
                <td><?php echo htmlspecialchars($row['angkatan']); ?></td>

                <td> 
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>  |
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>

        <?php } ?> 

    </table>

</body>
</html>
