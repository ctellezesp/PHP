<?php
require('pg_conexion.php');
$query = "select id, nombre from consultas where dinero >0;";
$result = pg_query($dbconn, $query) or die("Fallo la consulta");

if (pg_num_rows($result) > 0) {
	echo "<select id='pg_seleccion'>";
    while($row = pg_fetch_array($result)) {
     echo "<option value='". $row["id"]."'>". $row["nombre"]. "</option>";
    }
    echo "</select>";
} else {
    echo "0 results";
}
?>