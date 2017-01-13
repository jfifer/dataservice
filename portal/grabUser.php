<?php

require_once("php/dbconn.php");

$username = $_POST['name'];
$email = $_POST['email'];

//$insert = 'INSERT INTO table VALUES (default, $username, $email, now())';

//$result=mysqli_query($conn,$insert);

header("Location: http://localhost/coredial/dataservice/portal/index.php");

?>