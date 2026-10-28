<?php

include "config.php";

$id = $_GET['id'];

$query = "SELECT * FROM tb_mhs WHERE id = '$id'";

$data = mysqli_query($koneksi, $query);

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="proses/edit_proses.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div>
            <label>ID</label><br>
            <input type="text" name="ID"
                   value="<?php echo htmlspecialchars($row['id']); ?>" required>
        </div>

        <br>

        <div>
            <label>Nama</label><br>
            <input type="text" name="Nama"
                   value="<?php echo htmlspecialchars($row['nama']); ?>" required>
        </div>

        <br>
        
        <div>
            <label>NIM</label><br>
            <input type="text" name="nim"
                   value="<?php echo htmlspecialchars($row['nim']); ?>" required>
        </div>

        <br>
      
        <div>
            <label>Jurusan</label><br>
            <input type="text" name="jurusan"
                   value="<?php echo htmlspecialchars($row['jurusan']); ?>" required>
        </div>

        <br>

        <div>
            <label>Angkatan</label><br>
            <input type="text" name="angkatan"
                   value="<?php echo htmlspecialchars($row['angkatan']); ?>" required>
        </div>


        <div>
            <label>Prodi</label><br>
            <select name="Prodi" required>
                <option value="">-- Pilih Prodi --</option>
                <option value="Teknik Informatika"
                    <?php if ($row['Prodi'] == 'Teknik Informatika') echo 'selected'; ?>>
                    Teknik Informatika
                </option>
                <option value="Teknik Industri"
                    <?php if ($row['Prodi'] == 'Teknik Industri') echo 'selected'; ?>>
                    Teknik Industri
                </option>
                <option value="Teknik Sipil"
                    <?php if ($row['Prodi'] == 'Teknik Sipil') echo 'selected'; ?>>
                    Teknik Sipil
                </option>
                <option value="Bisnis Digital"
                    <?php if ($row['Prodi'] == 'Bisnis Digital') echo 'selected'; ?>>
                    Bisnis Digital
                </option>
            </select>
        </div>

        <br>

        <button type="submit">Simpan Perubahan</button>

    </form>

    <br>

    <a href="index.php">Kembali</a>

</body>
</html>