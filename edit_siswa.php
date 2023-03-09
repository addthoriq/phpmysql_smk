<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <a href="daftar_siswa.php">Kembali</a> <br>
    <?php
        require 'koneksi.php';
        $getKodeSiswa = $_GET['kode_siswa'];
        $sql = "SELECT nis, nama, email, jenis_kelamin, nama_kelas, id_kelas FROM siswa JOIN kelas ON id_kelas = kelas_id WHERE nis = '$getKodeSiswa'";
        $res = $koneksi->query($sql);
        $baris = $res->fetch_assoc();
    ?>
    <form action="proses_edit_siswa.php" method="POST">
        <label for="kode_siswa">NIS</label>
        <input type="text" name="nis_siswa" id="kode_siswa" value="<?= $baris['nis'] ?>" readonly>
        <br><br>
        <label for="nama_siswa">Nama</label>
        <input type="text" name="nm_siswa" id="nama_siswa" value="<?= $baris['nama'] ?>">
        <br><br>
        <label for="kode_kelas">Kelas</label>
        <select name="kd_kelas" id="kode_kelas">
            <option value="<?= $baris['id_kelas'] ?>"> <?= $baris['nama_kelas'] ?></option>
            <?php
                include 'koneksi.php';
                $getKelas = "SELECT * FROM kelas";
                $sumberKelas = $koneksi->query($getKelas);
                while ($barisKelas = $sumberKelas->fetch_assoc()) {
                    echo "<option value=".$barisKelas['id_kelas'].">".$barisKelas['nama_kelas']."</option>";
                }
            ?>
        </select>
        <br><br>
        <label for="email_siswa">Email</label>
        <input type="email" name="email_siswa" id="email_siswa" value="<?= $baris['email'] ?>">
        <p>Jenis Kelamin</p>
        <?php
        if ($baris['jenis_kelamin'] == 'L' || $baris['jenis_kelamin'] == 'l') {
            ?>
            <label for="jk">
                <input type="radio" name="jenis_kelamin" id="jk" value="L" checked>
                Laki-laki
            </label>
            <label for="pr">
                <input type="radio" name="jenis_kelamin" id="pr" value="P">
                Perempuan
            </label>
            <?php
        } elseif ($baris['jenis_kelamin'] == 'P' || $baris['jenis_kelamin'] == 'p') {
            ?>
            <label for="jk">
                <input type="radio" name="jenis_kelamin" id="jk" value="L">
                Laki-laki
            </label>
            <label for="pr">
                <input type="radio" name="jenis_kelamin" id="pr" value="P" checked>
                Perempuan
            </label>
            <?php
        } else {
            ?>
            <label for="jk">
                <input type="radio" name="jenis_kelamin" id="jk" value="L">
                Laki-laki
            </label>
            <label for="pr">
                <input type="radio" name="jenis_kelamin" id="pr" value="P">
                Perempuan
            </label>
            <?php
        }
        ?>
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>