<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero=mt_rand(100,200);

?>
<b><u>N&uacute;mero aleatorio entre 100 y 200, ambos inclusive</u></b>
<br>
<h1>
<?php
	printf("%0.2f, ",$numero);
	printf("%b, ",$numero);
	printf("%o, ",$numero);
	printf("%X",$numero);
?>
</h1>
</body>
</html>