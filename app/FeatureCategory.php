<?php

namespace App;

enum FeatureCategory: string
{
    case Amenity = 'amenity';
    case Facility = 'facility';
    case View = 'view';
    case Outdoor = 'outdoor';
    case Other = 'other';
}
