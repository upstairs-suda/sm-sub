<?php

namespace Submodule\Models\Product;

interface IProduct
{
    public function getName(): string;

    public function getPrice(): int;
}
