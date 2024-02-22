<?php
/*example 1*/
echo"First way ";
for($i=1; $i<=10; $i++)
{
	echo "$i \n";
}
/*example 2*/
echo"<br>Another way ";
for($i=1;;$i++)
{
	if($i>10)
	{
	break;
	}
	echo "$i \n";
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>