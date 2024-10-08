<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as KernelLaravel;

class Kernel extends KernelLaravel
{
    protected $middlewareGroups = [
        'web' => [
            // Outros middlewares
            \Inertia\Middleware::class,
        ],
    ];
}
