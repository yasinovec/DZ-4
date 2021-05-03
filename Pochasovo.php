<?php
namespace Pochasovo;

use Hours\iHours;
use Tarifs\Tarifs;

include 'Tarifs.php';
include 'iHours.php';

class Pochasovo extends Tarifs implements iHours

{
    public function poMinutno($minuty)
    {
        $this->hours = $minuty;
        $this->total = $this->hours*$this->cenaMinut*MINUTE;
        echo $this->total . '<br>';
    }
    public function poDistance($km)
    {
    }
}