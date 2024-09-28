<?php
$kode = $_POST["kode"];
include("connect.php");

$result = mysqli_query($serverConnect, "DELETE FROM game_developer WHERE GameDev_Code = '$kode'");
echo "<br>Data dengan kode ", $kode, " berhasil dihapus";
mysqli_close($serverConnect);

?>