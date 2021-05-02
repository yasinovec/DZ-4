<?php

const MINUTE = 1;
const HOUR = MINUTE*60;

class Base
{
    protected $cenaMinut = 3/MINUTE;
    protected $cenaKm = 10;
    protected $hours;
    protected $distance;
    protected $total;
    public function poMinutno($minuty)
    {
        $this->hours = $minuty;
        $this->total = $this->hours*$this->cenaMinut*MINUTE;
        echo $this->total . '<br>';
    }
    public function poDistance($km)
    {
        $this->distance = $km;
        $this->total = $this->distance*$this->cenaKm;
        echo $this->total . '<br>';
    }
}

class Pochasovo extends Base
{
    public $hours;
    public $cenaMinut = 200/HOUR;
    public function poDistance($km)
    {
    }
    public function poMinutno($minuty)
    {
        parent::poMinutno($minuty);
        $minuty = HOUR*ceil($minuty/HOUR);
    }
}
$pocasovo = new Pochasovo();
echo 'Почасовая: ';
$pocasovo->poMinutno(60);

class Student extends Base
{
    use Gps;
    protected $cenaMinut = 1/MINUTE;
    protected $cenaKm = 4;
}
$student = new Student();
echo 'Почасовая студенческая: ';
$student->poMinutno(10);
echo 'Покилометровая студенческая: ';
$student->poDistance(10);

trait Gps
{
    protected $cenaGps = 15/HOUR;
    public function gps($gpsHours)
    {
        $itogo = $this->cenaGps = $this->cenaGps*$gpsHours*HOUR;
        echo $itogo;//потом прибавить это к сумме
    }
}
trait Driver
{
    public $driver = 100;
}