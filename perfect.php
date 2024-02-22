<?php
function isPerfect($a){
$sum=0;
for($i=1;$i<$a;$i++)
{
if($a%$i==0)
{
$sum+=$i;
}
}
return $sum == $a;
}
$a=18;
if(isPerfect($a))
{
echo "$a is a Perfect number";
}
else
{
echo "$a is not a Perfect number";
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>