<br> Data Game Developer </br>
<?php
include("connect.php");

$result = mysqli_query($serverConnect, "SELECT * FROM game_developer");
echo "<table border = 2.5>";
echo "<tr><td> Kode </td><td> Name </td><td> Since </td><td> Country </td></tr>";

//menggunakan loop-while
while ($rowz = mysqli_fetch_row($result))
{
    echo "<tr><td> $rowz[0] </td><td> $rowz[1] </td><td> $rowz[2] </td><td> $rowz[3] </td></tr>";
}
?>