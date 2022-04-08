<?php
$host="51.210.151.13";
$port=3306;
$socket="";
$user="bornegel";
$password="bornegel";
$dbname="borne_gel";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());
$query = "SELECT * FROM borne_gel.compte";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2, $field3, $field4, $field5, $field6);
    while ($stmt->fetch()) {
        echo( $field1. $field2.$field3. $field4. $field5. $field6);
    }
    $stmt->close();
}
$con->close();
?>