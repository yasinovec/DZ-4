<?php
const MINUTE = 1;
const HOUR = MINUTE*60;
//include 'Base.php';
//include 'Pochasovo.php';
include 'Student.php';
//$base = new \Base\Base();
//echo $base->poDistance(8);
//$chas = new \Pochasovo\Pochasovo();
//echo $chas->poMinutno(80);
$student = new \Base\Student();
$student->gps(5);