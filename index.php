<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point2D=new Point2D(5,3);
$point3D=new Point3D(7,4,6);
echo $point2D->toString().'<br>';
echo $point3D->toString();
