<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kelas</title>
</head>
<body>
    <a href="daftar_siswa.php">Kembali</a> <br>
    <?php
        require 'koneksi.php';

        $getKodeKelas = $_GET['code_class'];
        $sql = "SELECT * FROM kelas WHERE id_kelas = '$getKodeKelas'";
        $res = $koneksi->query($sql);
        $baris = $res->fetch_assoc();
    ?>
    <form action="proses_ubah_kelas.php" method="POST">
        <label for="kode_kelas">Kode Kelas</label>
        <input type="text" name="kd_kelas" id="kode_kelas" value="<?= $baris['id_kelas'] ?>" readonly>
        <br><br>
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nm_kelas" id="nama_kelas" value="<?= $baris['nama_kelas'] ?>">
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>