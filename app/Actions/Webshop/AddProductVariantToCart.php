<?php

namespace App\Actions\Webshop;

use App\Factories\CartFactory;

class AddProductVariantToCart
{
    public function add($variantId, $quantity = 1, $cart = null)
    {
        // If cart is defined we use it or fallback to use the factory.
        ($cart ?: CartFactory::make())->items()->firstOrCreate(
            ["product_variant_id" => $variantId],
            ["quantity" => 0]
        )->increment('quantity', $quantity);
    }
}
