<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $name;
    public $price;
    public $imgsrc;
    public $message;

    public function mount($product)
    {
        $this->name = $product->product_name;
        $this->price = $product->product_price;
        $this->imgsrc = $product->product_imgsrc1;
    }

    public function render()
    {
        return view('livewire.product');
    }
}
