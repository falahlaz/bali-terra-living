<?php

namespace App;

enum ContactStatus: string
{
    case New = 'new';
    case Read = 'read';
    case Replied = 'replied';
    case Closed = 'closed';
}
