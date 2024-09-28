<br> Menampilkan Data Game Developer </br>
<?php
include("connect.php");


$result = mysqli_query($serverConnect, "SELECT * FROM game_developer");
$collz = mysqli_num_fields($result);
echo "<br> Jumlah Field: ", $collz, "</br>";

$data = mysqli_num_rows($result);
echo "Jumlah Record: ", $data;
mysqli_close($serverConnect);

?>

