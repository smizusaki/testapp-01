<?php
$a="Hello";
$b="world";
 
$c=$a.$b;
printf("%s+%s=%s\n", $a, $b, $c);
 
$d=sprintf("%s, %s", $a, $b);
printf("%s\n", $d);
 
$e=nl2br( sprintf("%s\n",$d) );
printf("%s\n",$e)
?>
