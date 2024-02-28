<?php
class Triangle
{

//declare properties
public $length = 5;
public $width = 10;
public $height = 5;

//method to get the perimeter
public function getPerimeter()
{
return($this->length + $this->width + $this->height);
}

//method to get the area
public function getArea()
{
return($this->width * $this->height)/2;
}

public function showResult()
{
echo "Length of Triangle:".$this->length."\n";
echo "Width of Triangle:".$this->width."\n";
echo "Height of Triangle:".$this->height."\n";
echo "Perimeter of Triangle:".$this->getPerimeter()."\n";
echo "Area of Triangle:".$this->getArea()."\n";
}
}

$tri=new Triangle;
$tri->showResult();
?>