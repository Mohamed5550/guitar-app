<?php

namespace App\Enums;

enum Builder: string
{
    case FENDER = 'Fender';
    case MARTIN = 'Martin';
    case GIBSON = 'Gibson';
    case COLLINGS = 'Collings';
    case OLSON = 'Olson';
    case RYAN = 'Ryan';
    case PRS = 'PRS';
    case ANY = 'Any';
}