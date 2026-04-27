<?php
$host = 'gateway01.ap-southeast-1.prod.alicloud.tidbcloud.com';
$port = 4000;
$user = '2g8sUhwYN9NeyTE.root';
$pass = 'eey7wFToimgjqrPT';
$db   = 'db-pemweb';

$koneksi = mysqli_init();
mysqli_ssl_set($koneksi, NULL, NULL, NULL, NULL, NULL);
$connected = mysqli_real_connect($koneksi, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);

if (!$connected) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$koneksi->set_charset("utf8");
?>