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

    /**
     * Get the display label for the unit
     *
     * @return string
     */
    public function label(): string
    {
        return match($this) {
            self::SquareMeter => 'm²',
            self::SquareFeet => 'ft²',
            self::Hectare => 'ha',
            self::Acre => 'ac',
        };
    }

    /**
     * Get conversion factor to square meters
     *
     * @return float
     */
    public function toSquareMeters(): float
    {
        return match($this) {
            self::SquareMeter => 1,
            self::SquareFeet => 0.092903,
            self::Hectare => 10000,
            self::Acre => 4046.86,
        };
    }

    /**
     * Convert from square meters to this unit
     *
     * @param float $sqm
     * @return float
     */
    public function fromSquareMeters(float $sqm): float
    {
        return match($this) {
            self::SquareMeter => $sqm,
            self::SquareFeet => $sqm / 0.092903,
            self::Hectare => $sqm / 10000,
            self::Acre => $sqm / 4046.86,
        };
    }

    /**
     * Get all available units as array
     *
     * @return array
     */
    public static function options(): array
    {
        return [
            self::SquareMeter->value => self::SquareMeter->asTitle(),
            self::SquareFeet->value => self::SquareFeet->asTitle(),
            self::Hectare->value => self::Hectare->asTitle(),
            self::Acre->value => self::Acre->asTitle(),
        ];
    }
}
