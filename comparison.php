<?php
//comparison operator

$x=25;
$y=35;
$z="25";
var_dump($x == $z); // output : boolean true
echo"<br>";
var_dump($x === $z);// output : boolean false //identical operator
echo"<br>";
var_dump($x != $y); // output : boolean true
echo"<br>";
var_dump($x !== $z);// output : boolean true
echo"<br>";
var_dump($x < $y); // output : boolean true
echo"<br>";
var_dump($x > $y); // output : boolean false
echo"<br>";
var_dump($x <= $z); // output : boolean true
echo"<br>";
var_dump($x >= $y); // output : boolean false
echo"<br>";
echo "This code is written by Anjima Jinu";
?>