<?php
$count=0;
$num=2;
$sum=0;

while($count<20){
$div_count=0;
for($i=1;$i<=$num;$i++)
{
if(($num%$i) == 0){
$div_count++;
}
}
if($div_count<3)
{
echo $num."";
$sum+=$num;
$count++;
}
$num++;
}

echo "\n<br>Total prime numbers: ".$count;
echo "\n<br>Sum of prime numbers: ".$sum;
?>