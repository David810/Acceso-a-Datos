<?php 
$a = mt_rand()/mt_getrandmax()*(100);
$b = mt_rand()/mt_getrandmax()*(100);
$c = mt_rand()/mt_getrandmax()*(100);

printf("\n\n");   
if (($a>$b) && ($a>$c))    
if ($b>$c)   
printf("%d %d %d",$a,$b,$c);   
else   
printf("%d %d %d",$a,$c,$b);   
  
  
if (($b>$a) && ($b>$c))   
if ($a>$c)   
printf("%d %d %d",$b,$a,$c);   
else   
printf("%d %d %d",$b,$c,$a);   
  
if (($c>$a) && ($c>$b))   
if ($a>$b)   
printf("%d %d %d",$c,$a,$b);   
else   
printf("%d %d %d",$c,$b,$a);   

?>