<?php
class greeting
{
  public $str="HelloWorld!";
  function show_greeting() 
     {
        return$this->str;
     }
}
$message=new greeting;
var_dump($message);
echo"<br>";
echo "This code is written by Anjima Jinu";
?>