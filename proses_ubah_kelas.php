<?php

require 'koneksi.php';

$kdKelas = $_POST['kd_kelas'];
$namaKelas = $_POST['nm_kelas'];

$sql = "UPDATE kelas SET nama_kelas = '$namaKelas' WHERE id_kelas = '$kdKelas'";
$koneksi->query($sql);

header('location: daftar_kelas.php');