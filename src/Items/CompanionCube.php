<?php

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item;

class CompanionCube extends Item {

    public function name() : string {
        return 'CompanionCube';
    }

    public function description(): string
    {
        return 'The cake is a lie';
    }

    public function statistics(): array
    {
        return [];
    }
}