<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
</head>
<body>
    <a href="tambah_kelas.php">Tambah Kelas</a>
    <h1>Daftar Kelas</h1>
    <?php
        require 'koneksi.php';

        $sql = "SELECT * FROM kelas";
        $hasil = $koneksi->query($sql);
    ?>
    <table border=1>
        <tr>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Tindakan</th>
        </tr>
        <?php
            if ($hasil->num_rows > 0) {
                while ($baris = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $baris['id_kelas'] ?></td>
                        <td><?= $baris['nama_kelas'] ?></td>
                        <td>
                            <a href="edit_kelas.php?code_class=<?= $baris['id_kelas'] ?>">Ubah</a>
                            <a href="delete_kelas.php?code_class=<?= $baris['id_kelas'] ?>">Hapus</a>
                        </td>
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