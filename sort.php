<?php
$array1 = array(76,84,45,91);
$array2 = array(91,84,74,45);
sort($array1);
foreach($array1 as $num1)
{
echo "<br>array sorting in ascending order";
echo $num1."\n";
}

rsort($array2);
foreach($array2 as $num2)
{
echo "<br>array sorting in descending order";
echo $num2."\n";
}
?>