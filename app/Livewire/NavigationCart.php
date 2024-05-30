<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Livewire\Component;
use Livewire\Attributes\Computed;


class NavigationCart extends Component
{

    public $listeners = [
        'productAddedToCart' => '$refresh',
        'productRemovedFromCart' => '$refresh',
    ];

    #[Computed]
    public function count()
    {
        return CartFactory::make()->items()->sum('quantity');
    }

    public function render()
    {
        return view('livewire.navigation-cart');
    }
}
