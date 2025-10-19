<?php

namespace App;

enum PropertyUnitOfMeasure: string
{
    case SquareMeter = 'sqm';
    case SquareFeet = 'sqft';
    case Hectare = 'hectare';
    case Acre = 'are';

    public function asTitle(): string
    {
        return match ($this) {
            PropertyUnitOfMeasure::SquareMeter => 'Square Meter',
            PropertyUnitOfMeasure::SquareFeet => 'Square Feet',
            PropertyUnitOfMeasure::Hectare => 'Hectare',
            PropertyUnitOfMeasure::Acre => 'Acre',
        };
    }
}
