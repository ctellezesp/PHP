<?php
require ("pg_conexion.php");
$nombre = $_GET["nombre"];
$dinero = $_GET["dinero"];
$query = "insert into consultas(nombre,dinero) values ('$nombre', '$dinero') returning id;";

$result = pg_query($dbconn, $query);
	while ($row = pg_fetch_row($result)){
		$last_id = $row[0];
	}

	 if($last_id)
	 	echo "Se ha insertado con id: ".$last_id;
	 else echo "Error al insertar";
?>