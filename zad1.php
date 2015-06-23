<?php
$today = getdate(); 
echo "The date is: $today[mday]</br>";
$a=$today[hours]+1;
echo "The time is: $a:$today[minutes]";
?>
