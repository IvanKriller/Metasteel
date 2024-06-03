<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Metasteel";

$induction = mysqli_connect($servername, $username, $password, $dbname);

if ($induction == false) {
 echo "Ошибка подключения";
}
?>