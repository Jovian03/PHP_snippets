<?php
echo  "Composite number below 100: ";

for($i=2; $i<100; $i++)
{
$isComposite = true;

for($j=2; $j<=sqrt($i); $j++)
{
if($i%$j === 0)
{
$isComposite = false;
break;
}
}

if($isComposite){
echo $i."\n";
}
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>