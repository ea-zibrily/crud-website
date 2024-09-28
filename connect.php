<br> Membuat Koneksi ke Database</br>
<?php

$hostName = "localhost";
$userName = "root";
$passName = "";
$dbName = "hanastudio";

//koneksi server mysql
$serverConnect = mysqli_connect($hostName, $userName, $passName, $dbName);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal!";
    exit(1);
}
echo "Koneksi Berhasil!";

?>