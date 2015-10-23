<?php 
$a = Array();
for ($i=1; $i < 6; $i++) { 
	$a[$i]=rand(100, 200);
}


 ?>
<table >
	<tr>
		<?php
		for ($i=1; $i < 6; $i++) { 
			echo "<td style=\"border:1px solid black\">$a[$i]</td>";
		}
		?>
	</tr>
</table>