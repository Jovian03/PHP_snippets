<?php
	class Developer
	{}
	class Programmer
	{}
	$raj=new Developer();
	if($raj instanceof Developer)
	{
	echo "raj is a developer";
	}
	else
	{
	echo "raj is a programmer";
	}
	echo"<br>";
	$temp1=($raj instanceof Developer);
	var_dump($temp1);
	$temp2=($raj instanceof Programmer);
	var_dump($temp2);
 	echo"<br>";
echo "This code is written by Anjima Jinu";
?>