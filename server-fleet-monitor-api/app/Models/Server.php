<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\OSType;
use App\Enums\ServerEnvironment;
use App\Enums\ServerStatus;


class Server extends Model
{
    /** @use HasFactory<\Database\Factories\ServerFactory> */
    use HasFactory;

    protected $fillable = [
        'hostname',
        'ip_address',
        'environment',
        'os_type',
        'description',
        'status',
    ];

    protected $attributes = [
        'status' => 'unreachable',
    ];

    protected function casts(): array
    {
        return [
            'os_type' => OSType::class,
            'status' => ServerStatus::class,
            'environment' => ServerEnvironment::class,
        ];
    }
}
