<?php
// 16 times iteration
$arr = array(76,84,45,91);
echo "Initial array before sorting";
foreach($arr as $val)
{
echo "<br>$val";
}
for($i=0; $i<4; $i++)
{
for($j=0; $j<3; $j++)
{
if($arr[$j]<$arr[$j+1])
{
$temp=$arr[$j+1];
$arr[$j+1]=$arr[$j];
$arr[$j]=$temp;
}
}
}

echo "<br>Resulting array after sorting";
for($i=0; $i<4; $i++)
{
echo"<br>$arr[$i]";
}
echo"<br>";
echo "This code is written by Anjima Jinu";

?>