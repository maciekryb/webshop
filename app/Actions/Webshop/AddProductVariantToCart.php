<?php

namespace App\Actions\Webshop;

use App\Models\Cart;

class AddProductVariantToCart
{

    public function add($variantId)
    {
        $cart = match (auth()->guest()) {
            true => Cart::firstOrCreate(['session_id' => session()->getId()]),
            false => auth()->user()->cart ?: auth()->user()->cart()->create(),
        };

        return $cart;
    }
}
