<?php

namespace App\Helpers;

class PriceHelper
{
    /**
     * Format price with currency symbol and abbreviation
     *
     * @param float $price
     * @param string $currency
     * @param bool $showDecimals
     * @return string
     */
    public static function format(float $price, string $currency = 'USD', bool $showDecimals = false): string
    {
        $symbols = [
            'USD' => '$',
            'IDR' => 'Rp',
        ];

        $symbol = $symbols[$currency] ?? $currency;

        // Convert to abbreviated format
        $abbreviated = self::abbreviateNumber($price, $currency, $showDecimals);

        return $symbol . ' ' . $abbreviated;
    }

    /**
     * Abbreviate large numbers
     *
     * @param float $number
     * @param string $currency
     * @param bool $showDecimals
     * @return string
     */
    private static function abbreviateNumber(float $number, string $currency, bool $showDecimals): string
    {
        // For IDR, use different thresholds (Millions and Billions)
        // For USD, use K, M, B notation

        if ($currency === 'IDR') {
            if ($number >= 1000000000) {
                // Billions (Miliar in Indonesian)
                $abbreviated = $number / 1000000000;
                return self::formatDecimal($abbreviated, $showDecimals) . 'M'; // M for Miliar
            } elseif ($number >= 1000000) {
                // Millions (Juta in Indonesian)
                $abbreviated = $number / 1000000;
                return self::formatDecimal($abbreviated, $showDecimals) . 'Jt'; // Jt for Juta
            }
        } else {
            // USD and other currencies
            if ($number >= 1000000000) {
                // Billions
                $abbreviated = $number / 1000000000;
                return self::formatDecimal($abbreviated, $showDecimals) . 'B';
            } elseif ($number >= 1000000) {
                // Millions
                $abbreviated = $number / 1000000;
                return self::formatDecimal($abbreviated, $showDecimals) . 'M';
            } elseif ($number >= 1000) {
                // Thousands
                $abbreviated = $number / 1000;
                return self::formatDecimal($abbreviated, $showDecimals) . 'K';
            }
        }

        // For numbers less than threshold, show full number with formatting
        return number_format($number, 0, '.', ',');
    }

    /**
     * Format decimal places
     *
     * @param float $number
     * @param bool $showDecimals
     * @return string
     */
    private static function formatDecimal(float $number, bool $showDecimals): string
    {
        if ($showDecimals || $number != floor($number)) {
            // Show decimals if requested or if there's a fractional part
            return number_format($number, 1, '.', ',');
        }

        return number_format($number, 0, '.', ',');
    }

    /**
     * Get full formatted price (not abbreviated)
     *
     * @param float $price
     * @param string $currency
     * @return string
     */
    public static function formatFull(float $price, string $currency = 'USD'): string
    {
        $symbols = [
            'USD' => '$',
            'IDR' => 'Rp',
        ];

        $symbol = $symbols[$currency] ?? $currency;

        if ($currency === 'IDR') {
            // Indonesian format: Rp 1.000.000.000
            return $symbol . ' ' . number_format($price, 0, ',', '.');
        } else {
            // International format: $1,000,000
            return $symbol . number_format($price, 0, '.', ',');
        }
    }
}
