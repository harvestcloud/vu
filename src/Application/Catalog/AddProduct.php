<?php

declare(strict_types=1);

namespace App\Application\Catalog;

use App\Application\Shared\AbstractCommand;

final class AddProduct extends AbstractCommand
{
    protected function __construct(
        private string $productId,
        private string $name
    ) {}

    public function name(): string
    {
        return $this->name;
    }

    public function productId(): string
    {
        return $this->productId;
    }
}
