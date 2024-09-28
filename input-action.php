<?php
$kode = $_POST["kode"];
$name = $_POST["name"];
$since = $_POST["since"];
$country = $_POST["country"];

include("connect.php");
$result = mysqli_query($serverConnect, "INSERT INTO game_developer values('$kode', '$name', '$since', '$country')");
echo "Data telah ditambahkan";
mysqli_close($serverConnect);
?>