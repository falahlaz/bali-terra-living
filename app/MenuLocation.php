<?php

namespace App;

enum MenuLocation: string
{
    case Header = 'header';
    case Footer = 'footer';
    case Mobile = 'mobile';

    public function asTitle(): string
    {
        return match ($this) {
            self::Header => 'Header',
            self::Footer => 'Footer',
            self::Mobile => 'Mobile',
        };
    }
}
