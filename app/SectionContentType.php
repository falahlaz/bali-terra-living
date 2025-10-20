<?php

namespace App;

enum SectionContentType: string
{
    case Text = 'text';
    case Html = 'html';
    case Image = 'image';
    case Url = 'url';
    case Json = 'json';

    public function asTitle(): string
    {
        return match ($this) {
            SectionContentType::Text => 'Text',
            SectionContentType::Html => 'HTML',
            SectionContentType::Image => 'Image',
            SectionContentType::Url => 'URL',
            SectionContentType::Json => 'JSON',
        };
    }
}
