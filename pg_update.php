<?php
require("pg_conexion.php");
$id = $_GET["id"];
$dinero = $_GET["dinero"];
$query = "UPDATE consultas SET dinero='$dinero' WHERE id='$id'";
$result = pg_query($dbconn, $query) or die("Fallo la conexion");
	if ($result) {
    echo "Record updated successfully";
	} 
	else {
    echo "Error updating record: " . pg_last_error($dbconn);
	}

?>