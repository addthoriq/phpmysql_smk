<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <a href="index.php">Kembali</a> <br>
    <form action="proses_tambah_kelas.php" method="POST">
        <label for="kode_kelas">Kode Kelas</label>
        <input type="text" name="kd_kelas" id="kode_kelas">
        <br><br>
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nm_kelas" id="nama_kelas">
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>