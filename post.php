<?php
$data = json_decode(file_get_contents('php://input'), true);

echo $data["Marca"]. " tiene un auto modelo".$data["Modelo"]. " se lanzo en el año ".$data["Year"];
?>