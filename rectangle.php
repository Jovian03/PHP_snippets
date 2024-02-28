<?php
class Rectangle
{

//declare properties
public $length = 10;
public $width = 5;

//method to get the perimeter
public function getPerimeter()
{
return(2*($this->length + $this->width));
}

//method to get the area
public function getArea()
{
return($this->length * $this->width);
}

public function showResult()
{
echo "Length of Rectangle:".$this->length."\n";
echo "Width of Rectangle:".$this->width."\n";
echo "Perimeter of Rectangle:".$this->getPerimeter()."\n";
echo "Area of Rectangle:".$this->getArea()."\n";
}
}

$rec=new Rectangle;
$rec->showResult();
?>