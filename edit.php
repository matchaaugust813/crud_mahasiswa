<?php

include "config.php";

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = '$id'";

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
                   value="<?php echo htmlspecialchars($row['Nama']); ?>" required>
        </div>

        <br>
        
        <div>
            <label>NIM</label><br>
            <input type="text" name="NIM"
                   value="<?php echo htmlspecialchars($row['NIM']); ?>" required>
        </div>

        <br>
      
        <div>
            <label>Alamat</label><br>
            <input type="text" name="Alamat"
                   value="<?php echo htmlspecialchars($row['Alamat']); ?>" required>
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