<?php
$a=10;
$b=20;
$c= ++$a + $a++ + --$b + ++$b ; // post increment 11+11+19+20 = 61
echo $c;
?>