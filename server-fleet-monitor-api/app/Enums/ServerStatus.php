<?php

namespace App\Enums;

enum ServerStatus: string
{
    case Unreachable = 'unreachable';
    case Degraded = 'degraded';
    case Healthy = 'healthy';
}
