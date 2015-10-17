
<form action="servicioROT13.php" method="GET" name="formulario">
    Introduce el texto a cifrar: <input name="cadena" type="cadena" /> 
    <input type="submit" value="Enviar" />
</form>

<?php
$cadena = isset($_GET['cadena']) ? $_GET['cadena'] : null;
for ($i=0; $i <strlen($cadena); $i++) { 
	if ($cadena[$i] == 'n' || $cadena[$i] == 'o' || $cadena[$i] == 'p' 
		|| $cadena[$i] == 'q' || $cadena[$i] == 'r' || $cadena[$i] == 's'
		|| $cadena[$i] == 't' || $cadena[$i] == 'u' || $cadena[$i] == 'v'
		|| $cadena[$i] == 'w' || $cadena[$i] == 'x' || $cadena[$i] == 'y'
		|| $cadena[$i] == 'z') {
		echo chr(ord($cadena[$i])-13);
	}else{
		echo chr(ord($cadena[$i])+13);
	}
}
 ?>