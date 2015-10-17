<?php
$cadena="hola"; 
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