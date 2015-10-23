<table >
	<tr>
		<?php
		$a = Array();
		for ($b=0; $b < 10; $b++) { 
			for ($i=0; $i < 10; $i++) {
			$a[$i]=rand(100, 200); 
			echo "<td style=\"border:1px solid black; padding:10px; border-spacing:0px\">$a[$i]</td>";
			}
			echo "<tr>";
		}
		?>
	</tr>
</table>