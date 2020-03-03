<?php
class Circle{
public const pie = 3.14;
public function radiusofcircle($r){
	echo "radius of circle is ". 2 * self::pie * $r ;
	}
}
$obj = new Circle();
$obj->radiusofcircle("2");
?>