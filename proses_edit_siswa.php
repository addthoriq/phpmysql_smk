<?php

require 'koneksi.php';

$nisSiswa = $_POST['nis_siswa'];
$kodeKelas = $_POST['kd_kelas'];
$namaSiswa = $_POST['nm_siswa'];
$emailSiswa = $_POST['email_siswa'];
$jenisKelamin = $_POST['jenis_kelamin'];

if (empty($namaSiswa) || empty($emailSiswa)) {
    $getSiswa = "SELECT nama, email FROM siswa WHERE nis = '$nisSiswa'";
    $res = $koneksi->query($getSiswa);
    $baris = $res->fetch_assoc();
    $siswa_nama = $baris['nama'];
    $siswa_email = $baris['email'];
    if (empty($namaSiswa)) {
        $namaSiswa = $siswa_nama;
    } else {
        $namaSiswa = $_POST['nm_siswa'];
    }
    if (empty($emailSiswa)) {
        $emailSiswa = $siswa_email;
    } else {
        $emailSiswa = $_POST['email_siswa'];
    }
}

$sql = "UPDATE siswa SET nama = '$namaSiswa', kelas_id = '$kodeKelas', jenis_kelamin = '$jenisKelamin', email = '$emailSiswa' WHERE nis = '$nisSiswa'";
$koneksi->query($sql);

header('location: daftar_siswa.php');