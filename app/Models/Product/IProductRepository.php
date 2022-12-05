<?php

namespace Submodule\Models\Product;

interface IProductRepository
{
    /**
     * @return IProduct[]
     */
    public function fetchAll(): array;
}
