<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_DATABASE');

$koneksi = mysqli_init();
mysqli_ssl_set($koneksi, NULL, NULL, NULL, NULL, NULL);
$connected = mysqli_real_connect($koneksi, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL);

if (!$connected) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$koneksi->set_charset("utf8");
?>