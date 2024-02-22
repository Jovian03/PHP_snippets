<?php
/*recursive function*/

function factorial($n)
{
if($n==0)
{
return 1;
}
else
{
$fact =  $n*factorial($n-1);
return $fact;
}
}

echo factorial(5),"<br>";
echo factorial(10),"<br>";
echo"<br>";
echo "This code is written by Anjima Jinu";
?>