<?php

require 'koneksi.php';

$kodeKelas = $_POST['kd_kelas'];
$namaKelas = $_POST['nm_kelas'];

$sql = "INSERT INTO kelas VALUES ('$kodeKelas', '$namaKelas')";
$koneksi->query($sql);

header('location: daftar_kelas.php');