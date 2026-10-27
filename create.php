<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="proses/create_proses.php" method="POST">

        <div>
            <label>Nama</label><br>
            <input type="text" name="nama" required>
        </div>
        <br>

        <div>
            <label>NIM</label><br>
            <input type="text" name="nim" required>
        </div>
        <br>

        <div>
            <label>Jurusan</label><br>
            <select name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <br>

        <div>
            <label>Angkatan</label><br>
            <input type="text" name="angkatan" required>
        </div>
        <br>

        <button type="submit">Simpan</button>

    </form>

    <br>
    <a href="index.php">Kembali</a>

</body>
</html>
