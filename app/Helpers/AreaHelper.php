<?php

namespace App\Helpers;

use App\PropertyUnitOfMeasure;

class AreaHelper
{
    /**
     * Format area with smart abbreviation
     */
    public static function format(float $area, PropertyUnitOfMeasure $uom, bool $abbreviate = false): string
    {
        if (! $area) {
            return 'N/A';
        }

        // For large areas in square meters, consider showing in hectares
        if ($abbreviate && $uom === PropertyUnitOfMeasure::SquareMeter && $area >= 10000) {
            $hectares = $area / 10000;

            return number_format($hectares, 2).'ha';
        }

        // For large areas in square feet, consider showing in acres
        if ($abbreviate && $uom === PropertyUnitOfMeasure::SquareFeet && $area >= 43560) {
            $acres = $area / 43560;

            return number_format($acres, 2).' acres';
        }

        // Regular formatting
        if ($area >= 1000) {
            return number_format($area, 0, '.', ',').$uom->label();
        }

        return number_format($area, 0).$uom->label();
    }
}
