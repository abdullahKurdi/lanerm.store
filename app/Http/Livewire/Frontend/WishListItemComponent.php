<?php

namespace App\Http\Livewire\Frontend;

use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class WishListItemComponent extends Component
{
    use livewirealert;
    public $item;

    public function moveToCart($rowId)
    {
        $this->emit('moveToCart', $rowId);
    }

    public function removeFromWishList($rowId)
    {
        $this->emit('removeFromWishList', $rowId);
    }


    public function render()
    {
        return view('livewire.frontend.wish-list-item-component', [
            'wishlistItem' => Cart::instance('wishlist')->get($this->item)
        ]);
    }
}
