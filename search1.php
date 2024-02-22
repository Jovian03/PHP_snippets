<?php
$numbers = array(10,20,30,40,50,60);
$element = 30;
$search=false;
	for($i=0;$i<count($numbers);$i++)
	{
	if($numbers[$i]==$element)
	{
	echo "Element found at position: ".($i+1);
	$search=true;
	break;
	}	
	}
if(!$search)
{
echo "element not found in the array";
}

echo"<br>";
echo "This code is written by Anjima Jinu";

?>