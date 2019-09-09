<?php


class Point2D
{
protected $x;
protected $y;
function __construct($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}

function setX($x){
    $this->x=$x;
}
function getX(){
    return $this->x;
}
function setY($y){
    $this->y=$y;
}
function getY(){
    return $this->y;
}
function getXY(){
    $array=[];
    array_push($array,$this->getX());
    array_push($array,$this->getY());
    return $array;
}
function setXY($x,$y){
    $this->x=$x;
    $this->y=$y;
}
function toString(){
    return "x:y".$this->getX().':'.$this->getY();
}
}