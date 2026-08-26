<?php

namespace App\Enums;

enum CardStatus: string
{
    case Pending = 'pending';
    case Published = 'published';
}
