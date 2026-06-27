<?php

namespace App\Enums;

enum ServerEnvironment: string
{
    case Production = 'production';
    case Staging = 'staging';
    case Local = 'local';
}
