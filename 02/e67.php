<html>
<head>
	<title></title>
</head>
<body>
<?php
$numero=mt_rand(1,7);

switch ($numero) {
	case '1':
		printf("lunes");
		break;
	case '2':
		printf("martes");
		break;
	case '3':
		printf("miercoles");
		break;
	case '4':
		printf("jueves");
		break;
	case '5':
		printf("viernes");
		break;
	case '6':
		printf("sabado");
		break;
	case '7':
		printf("domingo");
		break;
	default:
		
		break;
}
?>
</body>
</html>