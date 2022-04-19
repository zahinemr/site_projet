<?php
include'connexionbdd.php';

$mail=$_GET['mail'];
$password=$_GET['password'];
$query = "SELECT grade ,idCompte FROM borne_gel.compte WHERE email=? AND password=?";

if ($stmt = $bdd->prepare($query)) {
    $stmt->bind_param('ss',$email,$password);
    if($stmt->execute()){
        $stmt->bind_result($grade,$idCompte);

        while ($stmt->fetch()) {
            $tab=array("succes"=>true,"grade"=>$grade,"id"=>$idCompte);
        }
        if(empty($tab)){
            $tab=array("succes"=>false);
        }

        echo(json_encode($tab));

        $stmt->close();
    }

}
?>
*/ $host="51.210.151.13";
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
