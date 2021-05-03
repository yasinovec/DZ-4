<?php
namespace Tarifs;

abstract class Tarifs
{
    protected $cenaMinut = 3/MINUTE;
    protected $cenaKm = 10;
    protected $hours;
    protected $distance;
    protected $total;
    abstract public function poMinutno($minuty);
    abstract public function poDistance($km);
}