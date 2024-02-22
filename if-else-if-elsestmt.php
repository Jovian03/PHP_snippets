<?php
$marks=79;
if($marks>=100)
{
echo "student passed with A+ grade";
}
elseif(($marks<=100) && ($marks>=90))
{
echo "student passed with A grade";
}
elseif(($marks<=90) && ($marks>=70))
{
echo "student passed with B grade";
}
elseif(($marks<=70) && ($marks>=50))
{
echo "student passed with C grade";
}
else
{
echo "student failed the exam";
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>