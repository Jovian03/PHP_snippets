<?php
//function calling by reference

/*defining a function that accept parameter by reference*/

function selfMultiply(&$number) //&- gives reference of the memory location
{
$number*=$number;
return $number;
}

$mynum=5;
echo $mynum."<br>";//output-5

selfMultiply($mynum);
echo $mynum; //output-25
echo"<br>";
echo "This code is written by Anjima Jinu";
?>