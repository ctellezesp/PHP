<?php

require ('conexion.php');
$nombre = $_GET['nombre'];
$money = $_GET['dinero'];
$query = "insert into consultas(nombre, dinero) values ('$nombre', $money);";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>