<?php
$marks = array(
"roshan"=>array("physics"=>35, "maths"=>30, "chemistry"=>39
),

"twinkle"=>array("physics"=>30, "maths"=>32, "chemistry"=>29
),

"zara"=>array("physics"=>31, "maths"=>22, "chemistry"=>39
)
);

/*accessing multi-dimensional array values*/
echo "<br>marks for Roshan in maths:";
echo $marks['roshan']['maths']."\n";

echo "<br>marks for Twinkle in Physics:";
echo $marks['twinkle']['physics']."\n";

echo "<br>marks for Zara in Chemistry:";
echo $marks['zara']['chemistry']."\n";
echo"<br>";
echo "This code is written by Anjima Jinu";
?>