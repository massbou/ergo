<?php

// $servername = "mysql.hostinger.fr";
// $username = "u384378146_lif14";
// $password = "massifan1995";
// $dbname = "u384378146_ucbl";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eggs";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo '<p> Pas connecté!</p>';
}

?>
