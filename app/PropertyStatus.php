<?php

namespace App;

enum PropertyStatus: string
{
    case Available = 'available';
    case Sold = 'sold';
    case Reserved = 'reserved';
    case Rented = 'rented';
    case Maintenance = 'maintenance';
    case OffMarket = 'off_market';
}
