<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "smk";

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " .  $koneksi->connect_error);
}