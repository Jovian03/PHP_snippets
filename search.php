<?php
$arr = array(76,84,45,91);
echo "initial array";
foreach($arr as $val)
{
echo"<br>$val";
}

$search_element = 34;
$position = 0;

for($i=0;$i<4;$i++)
{
if($arr[$i] === $search_element)
{
$position = $i;
break;
}
}

if($position >=0)
{
echo "<br>the element '$search_element' is found at position $position";
}
else
{
echo "<br>the element is not found";
}
?>