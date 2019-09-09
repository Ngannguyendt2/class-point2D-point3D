<?php



class Point3D extends Point2D
{
protected $z;
function __construct($x, $y,$z)
{
    parent::__construct($x, $y);
    $this->z=$z;
}
function getZ(){
    return $this->z;
}
function setZ($z){
    $this->z=$z;
}
function setXYZ($x,$y,$z){
    $this->x=$x;
    $this->y=$y;
    $this->z=$z;
}
function getXYZ(){
    $array=[];
    array_push($array,$this->x);
    array_push($array,$this->y);
    array_push($array,$this->z);
    return $array;
}
function toString(){
    return "x:y:z".$this->getX().":".$this->getY().":".$this->getZ();
}
}