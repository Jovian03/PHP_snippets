<?php
function prime($num)
{
$i=$num;
$temp=1;
	for($j=2;$j<=$i;$j++)
	{
	if($i%$j==0)
	{
	$temp++;
	}
}
	if($temp==2)
	{
	echo"$i is a prime number<br>";
	}
	else
	{
	echo "$i is not a prime number<br>";
	}
}

function perfect($num1)
{
$i=$num1;
$num=0;
for($j=1;$j<$i;$j++)
{
if($i%$j==0)
{
$num+=$j;
}
}
if($i==$num)
{
	echo"$i is a perfect number<br>";
	}
	else
	{
	echo "$i is not a perfect number<br>";
	}
}

prime(23);
perfect(44);
echo"<br>";
echo "This code is written by Anjima Jinu";
?>