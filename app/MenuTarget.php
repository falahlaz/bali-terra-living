<?php

namespace App;

enum MenuTarget: string
{
    case Blank = '_blank';
    case Self = '_self';

    public function asTitle(): string
    {
        return match ($this) {
            self::Blank => 'Blank',
            self::Self => 'Self',
        };
    }
}
