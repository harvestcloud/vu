<?php

declare(strict_types=1);

namespace App\Application\Shared;

abstract class AbstractCommand
{
    public static function with(): static
    {
        $class = get_called_class();

        return new $class(...func_get_args());
    }
}
