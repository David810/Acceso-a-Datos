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
<div ><h1>
	<input name ="numero" readonly="readonly" size="1" value="<?php $numero = mt_rand(1,10);


	echo $numero; ?>" />

</h1>
</div>
</body>
</html>