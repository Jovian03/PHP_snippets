<?php
/*first method to create associate array*/
$salary = array("roshan"=>2000, "twinkle"=>1000, "zara"=>5000);

echo "<br>salary of Roshan is ".$salary['roshan']."\n";
echo "<br>salary of Twinkle is".$salary['twinkle']."\n";
echo "<br>salary of Zara is ".$salary['zara']."\n";

/*second method to create associate array*/
$salary['roshan']="high";
$salary['twinkle']="medium";
$salary['zara']="low";

echo "<br>salary of Roshan is ".$salary['roshan']."\n";
echo "<br>salary of Twinkle is ".$salary['twinkle']."\n";
echo "<br>salary of Zara is ".$salary['zara']."\n";
echo"<br>";
var_dump($salary);
echo"<br>";
echo "This code is written by Anjima Jinu";
?>