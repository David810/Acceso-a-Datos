<html>
<head>
	<title></title>
</head>
<body>
	<?php
$numeroAleatorio1 = -100+mt_rand()/mt_getrandmax()*(100-(-100));
$numeroAleatorio2 = 1+mt_rand()/mt_getrandmax()*(1-(-10));
$resultadoSuma = $numeroAleatorio1+$numeroAleatorio2;
$resultadoResta = $numeroAleatorio1-$numeroAleatorio2;
$resultadoMultiplicacion = $numeroAleatorio1*$numeroAleatorio2;
$resultadoDivision = $numeroAleatorio1/$numeroAleatorio2;
$resultadoPorcentaje = $numeroAleatorio1%$numeroAleatorio2;
$numeroAleatorio1Inverso = -($numeroAleatorio1);
$suma = $numeroAleatorio1++;

printf("<b>%.12f + %.13f = %.11f</b>",$numeroAleatorio1, $numeroAleatorio2, $resultadoSuma);
echo "<br>";
echo "<br>";
printf("<b>%.12f - %.13f = %.11f</b>",$numeroAleatorio1, $numeroAleatorio2, $resultadoResta);
echo "<br>";
echo "<br>";
printf("<b>%.12f * %.13f = %.11f</b>",$numeroAleatorio1, $numeroAleatorio2, $resultadoMultiplicacion);
echo "<br>";
echo "<br>";
printf("<b>%.12f / %.13f = %.11f</b>",$numeroAleatorio1, $numeroAleatorio2, $resultadoDivision);
echo "<br>";
echo "<br>";
printf("<b>%.12f %% %.13f = %.0f</b>",$numeroAleatorio1, $numeroAleatorio2, $resultadoPorcentaje);
echo "<br>";
echo "<br>";
printf("<b>El opuesto de %.12f es %.12f</b>",$numeroAleatorio1, $numeroAleatorio1Inverso);
echo "<br>";
echo "<br>";
printf("<b>%.12f++ vale %.12f</b>",$numeroAleatorio1, ++$numeroAleatorio1);
echo "<br>";
echo "<br>";
printf("<b>%.12f-- vale %.12f</b>",--$numeroAleatorio1, --$numeroAleatorio1);

	?>
</body>
</html>