<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <a href="tambah_siswa.php">Tambah Siswa</a>
    <h1>Daftar Siswa</h1>
    <?php
        require 'koneksi.php';

        $sql = "SELECT nis, nama, nama_kelas, jenis_kelamin, email FROM siswa JOIN kelas ON id_kelas = kelas_id";
        $hasil = $koneksi->query($sql);
    ?>
    <table border=1>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tindakan</th>
        </tr>
        <?php
            // var_dump($hasil->fetch_assoc());
            if ($hasil->num_rows > 0) {
                while ($baris = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $baris['nis'] ?></td>
                        <td><?= $baris['nama'] ?></td>
                        <td><?= $baris['nama_kelas'] ?></td>
                        <td><?= $baris['email'] ?></td>
                        <td><?= $baris['jenis_kelamin'] ?></td>
                        <td><a href="edit_siswa.php?kode_siswa=<?= $baris['nis'] ?>">Ubah</a></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<p>Data tidak ditemukan</p>";
            }
        ?>
    </table>
</body>
</html>