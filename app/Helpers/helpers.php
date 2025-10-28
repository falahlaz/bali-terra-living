<?php

use App\Helpers\PriceHelper;

if (! function_exists('format_price')) {
    function format_price($price, $currency = 'USD', $showDecimals = false): string
    {
        return PriceHelper::format($price, $currency, $showDecimals);
    }
}

if (! function_exists('format_price_full')) {
    function format_price_full($price, $currency = 'USD'): string
    {
        return PriceHelper::formatFull($price, $currency);
    }
}
