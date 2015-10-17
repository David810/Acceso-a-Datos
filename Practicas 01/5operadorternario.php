



<?php
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
$user = isset($_GET['nombre']) ? $_GET['nombre'] : null;
$contraseña = isset($_GET['contraseña']) ? $_GET['contraseña'] : null;

	
	if ($user == null) {?>
	<form action="operadorternario.php" method="GET" name="formulario">
	-- Login --
<br>
<br>
    Introduce tu Nombre de Usuario: <input name="nombre" type="nombre" /> 
    <br>
    <br>
    Introduce tu Contraseña: <input name="contraseña" type="contraseña" /> 
    <br>
    <br>
    <input type="submit" value="Enviar" />
</form>
<?php
		
	}else{
		echo "Bienvenido ",$nombre;
	}
	
?>