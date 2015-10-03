<html>
<head>
	<title></title>
</head>
<body>

<?php
$caracteres = "0123456789abc";
$numerodeletras=5;
$cadena = "";
for($i=0;$i<$numerodeletras;$i++)
{
    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);
}
printf("La cadena entera % se convierte al numero <b>%d</b>",$cadena, $cadena);

?>
<?php
$caracteres = "0123456789abc";
$numerodeletras=5;
$cadena = "";
for($i=0;$i<$numerodeletras;$i++)
{
    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);
}

printf("<br>");
printf("<br>");
printf("La cadena real % se convierte al numero real <b>%.4f</b>",$cadena, $cadena);

?>

</body>
</html>