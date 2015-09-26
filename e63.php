<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero=mt_rand(100,200);
$numero1=&$numero;
?>
<b><u>N&uacute;mero aleatorio entre 100 y 200, ambos inclusive</u></b>
<br>
<h1>
<?php
	echo $numero1;
?>
</h1>
</body>
</html>