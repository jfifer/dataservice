<?php require_once("config.php"); ?>

<?php

$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);

if ($conn->connect_errno) {

    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>

