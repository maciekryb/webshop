<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Computed;


class StoreFront extends Component
{

    #[Computed]
    public function product()
    {
        return Product::query()->get();
    }

    public function render()
    {
        return view('livewire.store-front');
    }
}
