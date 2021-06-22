<?php
$host="localhost";
$port=3306;
$socket="";
$user="pi";
$password="@Pookie85";
$dbname="cost_pack";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error()); 

$sql = "INSERT INTO cost_pack(cost_pack) VALUES ('cost_pack');

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>