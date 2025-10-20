<?php

namespace App;

enum IconType: string
{
    case Svg = 'svg';
    case Image = 'image';
    case ClassIcon = 'class';

    public function asTitle(): string
    {
        return match ($this) {
            self::Svg => 'Svg',
            self::Image => 'Image',
            self::ClassIcon => 'Class',
        };
    }
}
