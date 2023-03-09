<?php

require 'koneksi.php';

$nisSiswa = $_POST['nis_siswa'];
$kodeKelas = $_POST['kd_kelas'];
$namaSiswa = $_POST['nm_siswa'];
$emailSiswa = $_POST['email_siswa'];
$jenisKelamin = $_POST['jenis_kelamin'];

$sql = "INSERT INTO siswa VALUES ('$nisSiswa', '$kodeKelas', '$namaSiswa', '$jenisKelamin', '$emailSiswa')";
$koneksi->query($sql);

header('location: daftar_siswa.php');