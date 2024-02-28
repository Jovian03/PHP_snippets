<?php
class Circle
{

//declare properties
const pi=3.14;
public $radius=5;

//method to get the perimeter
public function getPerimeter()
{
return 2*pi() * $this->radius;
}

//method to get the area
public function getArea()
{
return pi() * $this->radius * $this->radius;
}

public function showResult()
{
echo "Value of pi:".pi()."\n";
echo "Radius of circle:".$this->radius."\n";
echo "Perimeter of Circle:".$this->getPerimeter()."\n";
echo "Area of Circle:".$this->getArea()."\n";
}
}

$cir=new Circle;
$cir->showResult();
?>