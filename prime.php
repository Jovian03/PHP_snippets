<?php
echo  "Prime number below 100: ";

for($i=2; $i<=100; $i++)
{
$isPrime = true;

for($j=2; $j<=sqrt($i); $j++)
{
if($i%$j === 0)
{
$isPrime = false;
break;
}
}

if($isPrime){
echo $i."\n";
}
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>