<?php
namespace Pochasovo;

use Hours;
use Tarifs;

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
