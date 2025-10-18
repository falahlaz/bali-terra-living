<?php

namespace App;

enum PropertyUnitOfMeasure: string
{
    case SquareMeter = 'sqm';
    case SquareFeet = 'sqft';
    case Hectare = 'hectare';
    case Acre = 'are';
}
