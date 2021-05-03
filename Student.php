<?php

namespace Base;
//use Tarifs;
//include 'Tarifs.php';
include 'Base.php';


class Student extends Base
{
    use Gps;
    protected $cenaMinut = 1/MINUTE;
    protected $cenaKm = 4;
}