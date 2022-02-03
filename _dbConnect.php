<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ipl";
$db2 = "forums";
$check ="check";
$conn = mysqli_connect($servername,$username,$password,$database);

$forum_conn = mysqli_connect($servername,$username,$password,$db2);

if(!$conn)
        die("Error". mysqli_connect_error());


?>