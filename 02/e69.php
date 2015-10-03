<html>
<head>
	<title></title>
</head>
<body>
<?php

$numeroAleatorio1 = mt_rand()/mt_getrandmax();
$numeroAleatorio2 = -1000+mt_rand()/mt_getrandmax()*(1000-(-1000));
printf("<b>N&uacutemero real aleatorio entre 0 y 1: </b>%.14f<br>",$numeroAleatorio1);
echo"<br>";
printf("<b>N&uacutemero real aleatorio entre -1000 y 1000: </b>%.14f<br>",$numeroAleatorio2);
echo "<br>";
printf("<b>Segundo N&uacutemero truncado a las mil&eacutesimas: </b>%.3f<br>",$numeroAleatorio2);
echo "<br>";
printf("<b>Segundo N&uacutemero truncado a las decenas: </b>%.0f<br>",$numeroAleatorio2);
?>
</body>
</html>