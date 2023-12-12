<?php

$server = "localhost";
$user = "root";
$password = "root";
$nama_database = "siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>