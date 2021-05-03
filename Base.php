<?php
namespace Base;

use \Tarifs\Tarifs;

include 'Tarifs.php';

class Base extends Tarifs
{
    public function poMinutno($minuty)
    {
        $this->hours = $minuty;
        $this->total = $this->hours*$this->cenaMinut*MINUTY;
        echo $this->total . '<br>';
    }
    public function poDistance($km)
    {
        $this->distance = $km;
        $this->total = $this->distance*$this->cenaKm;
        echo $this->total . '<br>';
    }
}
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