<?php

namespace App\Actions\Webshop;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Collection;

class CreateStripeCheckoutSession
{
    public function createFromCart(Cart $cart)
    {
        return $cart->user->checkout(
            $this->formatCartItems($cart->items)
        );
    }

    public function formatCartItems(Collection $items)
    {
        return $items->loadMissing('product')->map(function ($item) {
            return
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'unit_amount' => $item->product->price->getAmount(),
                        'product_data' => [
                            'name' => $item->product->name,
                            'metadata' => [
                                'product_id' =>  $item->product->id,
                                'product_variant_id' =>  $item->product_variant_id,
                            ]
                        ]
                    ],
                    'quantity' =>  $item->quantity,
                ];
        })->toArray();
    }
}
