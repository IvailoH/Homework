<?php
$arr = array(5 => TRUE,1,3.14, 'text');
foreach ($arr as $value) {
	print_r($value); echo " - ";
    echo gettype($value), "; ";
}
?>
