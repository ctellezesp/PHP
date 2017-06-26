<?php
require ('conexion.php');
$id = $_GET["id"];
$query = "DELETE FROM consultas WHERE id='$id'";

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>