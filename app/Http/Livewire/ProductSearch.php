<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductSearch extends Component
{
    public $searchtext;
    public $selecttype;

    public function render()
    {
        $keyword = '%'.$this->searchtext.'%';
        return view('livewire.product-search',[
            'products' => Product::where('product_name','LIKE', $keyword)->where('product_type','LIKE', $this->selecttype)->paginate(5),
        ]);
    }
}
