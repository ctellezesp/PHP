<?php
require("pg_conexion.php");
$id = $_GET["id"];
$query = "DELETE FROM consultas WHERE id='$id'";
$result = pg_query($dbconn, $query) or die("Fallo la conexion");
	if($result){
		echo "Delete completed";
	}
	else {
    echo "Error updating record: " . pg_last_error($dbconn);
	}
?>