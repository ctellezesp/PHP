<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<h1>Hola</h1>
<?php
echo "<br><br>";

require ('select.php');
?>
<input type="name" id="dinero">
<button id="act" onclick="request();">Actualiza</button>
<button onclick="dlt();">Borrar</button>
<br>
<br>
<input placeholder="Nombre" type="name" id="nombre">
<input placeholder="Cantidad" type="name" id="dinero2">
<button onclick="send()">Agregar</button>
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

	function send(){
		var name = document.getElementById('nombre');
		var nombre = name.value;
		var texto = document.getElementById('dinero2');
		var dinero = texto.value;
		var url = "agregar.php";
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
	
</script>
</html>

