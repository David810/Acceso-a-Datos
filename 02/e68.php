<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero=mt_rand(-100,100);
$numero1=mt_rand(1,100);
$ressuma=$numero+$numero1;
$resresta=$numero-$numero1;
$resmulti=$numero*$numero1;
$resdiv=$numero/$numero1;
$resporc=$numero%$numero1;
$resopuesto=$numero;
$suma=$numero++;
$resta=$suma;
?>

<h1>
<?php
	printf("%d + %d = %d<br>",$numero, $numero1, $ressuma); 
	echo "<br>";
	printf("%d - %d = %d<br>",$numero, $numero1, $resresta); 
	echo "<br>";
	printf("%d * %d = %d<br>",$numero, $numero1, $resmulti); 
	echo "<br>";
	printf("%d / %d = %.13f<br>",$numero, $numero1, $resdiv); 
	echo "<br>";
	printf("%d %% %d = %d<br>",$numero,$numero1, $resporc); 
	echo "<br>";
	printf("El opuesto %d de es %d<br>",$resopuesto,-$resopuesto); 
	echo "<br>";
	printf("%d++ vale  %d<br>",++$suma,++$numero);
	echo "<br>";
	printf("%d-- vale  %d<br>",++$resta,--$suma);
	

?>
</h1>
</body>
</html>