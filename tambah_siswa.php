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
    <form action="proses_tambah_siswa.php" method="POST">
        <label for="kode_siswa">NIS</label>
        <input type="text" name="nis_siswa" id="kode_siswa">
        <br><br>
        <label for="nama_siswa">Nama</label>
        <input type="text" name="nm_siswa" id="nama_siswa">
        <br><br>
        <label for="kode_kelas">Kelas</label>
        <select name="kd_kelas" id="kode_kelas">
            <?php
                require 'koneksi.php';
                $sql = "SELECT * FROM kelas";
                $res = $koneksi->query($sql);
                if ($res->num_rows > 0) {
                    while ($baris = $res->fetch_assoc()) {
                        echo "<option value = " . $baris['id_kelas'] . " > " . $baris['nama_kelas'] . " </option>";
                    }
                }
            ?>
        </select>
        <br><br>
        <label for="email_siswa">Email</label>
        <input type="email" name="email_siswa" id="email_siswa">
        <p>Jenis Kelamin</p>
        <label for="jk">
            <input type="radio" name="jenis_kelamin" id="jk" value="L">
            Laki-laki
        </label>
        <label for="pr">
            <input type="radio" name="jenis_kelamin" id="pr" value="P">
            Perempuan
        </label>
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>