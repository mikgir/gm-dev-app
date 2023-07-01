<?php

namespace App\Enum;

enum StatusEnum: string
{
    case PUBLISHED = 'PUBLISHED';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

}
