<?php
$d=date("D");
switch($d)
{
case "Mon":
echo "today is monday";
break;
case "Tue":
echo "today is tuesday";
break;
case "Wed":
echo "today is wednesday";
break;
case "Thu":
echo "today is thursday";
break;
case "Fri":
echo "today is friday";
break;
case "Sat":
echo "today is saturday";
break;
default:
echo "$d";
echo"today is a good day";
break;
}
echo"<br>";
echo "This code is written by Anjima Jinu";
?>