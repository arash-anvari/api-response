<?php

declare(strict_types=1);

namespace ArashAnvari\ApiResponse\Facades;

use Illuminate\Support\Facades\Facade;

class ApiResponse extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'ApiResponse';
    }
}
