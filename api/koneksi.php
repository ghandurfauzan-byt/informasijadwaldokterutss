<?php
// Parameter koneksi dari TiDB Cloud (sudah sesuai screenshot)
$host = 'gateway01.ap-southeast-1.prod.alicloud.tidbcloud.com';
$port = 4000;
$user = '2g8sUhwYN9NeyTE.root';
$pass = 'eey7wFToimgjqrPT';
$db   = 'db-pemweb';

// Path ke file ca.pem (letakkan file ini di folder yang sama dengan koneksi.php)
// Download CA cert dari dialog Connect, simpan sebagai ca.pem
$ca_cert = __DIR__ . '/ca.pem';

// Buat koneksi mysqli dengan SSL
$koneksi = mysqli_init();
mysqli_ssl_set($koneksi, NULL, NULL, $ca_cert, NULL, NULL);
mysqli_real_connect($koneksi, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$koneksi->set_charset("utf8");

// Optional: untuk testing, hapus baris ini nanti
// echo "Koneksi ke TiDB Cloud berhasil!";
?>