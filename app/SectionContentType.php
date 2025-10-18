<?php

namespace App;

enum SectionContentType: string
{
    case Text = 'text';
    case Html = 'html';
    case Image = 'image';
    case Url = 'url';
    case Json = 'json';
}
