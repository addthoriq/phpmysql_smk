<?php

require 'koneksi.php';

$kodeKelas = $_GET['code_class'];
$sql = "DELETE FROM kelas WHERE id_kelas = '$kodeKelas'";
$koneksi->query($sql);

header('location: daftar_kelas.php');