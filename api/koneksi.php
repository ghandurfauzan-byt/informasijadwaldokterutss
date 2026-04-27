<?php
$host = 'gateway01.ap-southeast-1.prod.alicloud.tidbcloud.com';
$port = 4000;
$user = '2g8sUhwYN9NeyTE.root';
$pass = 'cW5FdFgEDCYiCL6J';
$db   = 'db-pemweb';

$koneksi = mysqli_init();

// Pengaturan SSL wajib untuk TiDB Cloud
mysqli_ssl_set($koneksi, NULL, NULL, NULL, NULL, NULL);

$status = mysqli_real_connect(
    $koneksi, 
    $host, 
    $user, 
    $pass, 
    $db, 
    $port, 
    NULL, 
    MYSQLI_CLIENT_SSL
);

if (!$status) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>