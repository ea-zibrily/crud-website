Membuat koneksi ke Database <br>
<?php
$server = 'localhost';
$username = 'root';
$psw = '';
$dbname = 'hanastudio';

$konek = mysql_connect($server, $username, $psw, $dbname) or die ('Koneksi Gagal!');
mysql_select_db('hanastudio', $konek) or die ('Koneksi ke Database Gagal!');
echo 'Koneksi Sukses!';
?>