<?php
require_once("../../php/dbconn.php");

$reseller = $_REQUEST['term'];

$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$resellers = "SELECT companyName
                FROM reseller
               WHERE companyName LIKE '%".$reseller."%'";
$data = array();
if ($result = mysqli_query($conn, $resellers)) {

    while ($resellerName = mysqli_fetch_array($result)) {

        $data[] = array(
          //'label' => $resellerName['companyName'],
            'value' => $resellerName['companyName']
        );

        echo json_encode($data);
        //flush();

    }
}

?>
