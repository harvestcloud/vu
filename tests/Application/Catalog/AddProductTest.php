<?php

namespace App\Tests\Application\Catalog;

use App\Application\Catalog\AddProduct;
use PHPUnit\Framework\TestCase;

class AddProductTest extends TestCase
{
    public function test_can_be_created(): void
    {
        $this->assertTrue(false);

        $addProduct = AddProduct::with(
            'b0663660-7323-42f6-b9a1-0ee6dc43e845',
            'My first product'
        );

        $this->assertSame(
            'b0663660-7323-42f6-b9a1-0ee6dc43e845',
            $addProduct->productId()
        ); 
    }
}
