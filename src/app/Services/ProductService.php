<?php

namespace Submodule\Services;

use Opis\String\UnicodeString as wstring;
use Submodule\Models\Product\IProduct;

class ProductService
{
    public function toDisplayName(IProduct $product): string
    {
        $string = $product->getName() . ' (' . $product->getPrice() . ')';
        $string .= ' <staging>';

        return (string) wstring::from($string)->pad(5, '*');
    }
}
