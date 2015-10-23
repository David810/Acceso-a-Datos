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
			echo "<td style=\"border:1px solid black; padding:10px; border-spacing:0px\">$a[$i]</td>";
		}
		?>
	</tr>
</table>