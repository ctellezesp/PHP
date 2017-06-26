<?php

require ('conexion.php');
$query = "insert into consultas(nombre, dinero) values ('Yoc', 5.50);";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} 

else if ($conn->errno==1062){
	echo "<br> Entrada duplicada";
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>