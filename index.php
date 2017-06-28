<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<h1>Hola</h1>
<?php
echo "<br><br>";
require ('conexion.php');
require ("pg_conexion.php");
?>
<h1>MySQL</h1>
<input placeholder="Nombre" type="name" id="nombre">
<input placeholder="Cantidad" type="name" id="dinero2">
<button onclick="send()">Agregar</button>
<br>
<?php
require ('select.php');
?>
<input type="name" id="dinero">
<button id="act" onclick="request();">Actualiza</button>
<button onclick="dlt();">Borrar</button>
<br>
<br>
<h1>Posgres</h1>
<input placeholder="Nombre" type="name" id="pg_nombre">
<input placeholder="Cantidad" type="name" id="pg_dinero2">
<button onclick="send_pg()">Agregar</button>
<br>
<?php
require ('pg_select.php');
?>
<input type="name" id="pg_dinero">
<button onclick="pg_request();">Actualiza</button>
<button onclick="pg_dlt();">Borrar</button>
<br>
<br>
<div id="demo"></div>
</body>

<script type="text/javascript">
	var xhttp = new XMLHttpRequest();

	function request(){
	var seleccion = document.getElementById('seleccion');
	var id = seleccion.value;
	var texto = document.getElementById('dinero');
	var dinero = texto.value;
	var url = "update.php";

	url = url + "?id="+id+"&dinero="+dinero;
	xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
        }
    };
		xhttp.open("GET", url, true);
		xhttp.send();
	}

	function dlt(){
		var seleccion = document.getElementById('seleccion');
		var id = seleccion.value;
		var url = "delete.php";
		url = url + "?id="+id;
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
        }
    };

    	xhttp.open("GET", url, true);
		xhttp.send();
	}

	function send_pg(){
		var name = document.getElementById('pg_nombre');
		var nombre = name.value;
		var texto = document.getElementById('pg_dinero2');
		var dinero = texto.value;
		var url = "pg_agregar.php";
		url = url + "?nombre="+nombre+"&dinero="+dinero;
		xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
        }
    };
		xhttp.open("GET", url, true);
		xhttp.send();
	}

	function pg_request(){
	var seleccion = document.getElementById('pg_seleccion');
	var id = seleccion.value;
	var texto = document.getElementById('pg_dinero');
	var dinero = texto.value;
	var url = "pg_update.php";

	url = url + "?id="+id+"&dinero="+dinero;
	xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
        }
    };
		xhttp.open("GET", url, true);
		xhttp.send();
	}

	function pg_dlt(){
		var seleccion = document.getElementById('pg_seleccion');
		var id = seleccion.value;
		var url = "pg_delete.php";
		url = url + "?id="+id;
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
        }
    };

    	xhttp.open("GET", url, true);
		xhttp.send();
	}
	
</script>
</html>

