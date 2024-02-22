<?php
//logical operator

$year=2014;
//leap year are divisible by 400 or by 4 not by 100
if(($year%400==0) || (($year%100!=0) && ($year%4==0)))
{
 echo "$year is a leap year";
}
else
{
echo "$year is not a leap year";
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>





