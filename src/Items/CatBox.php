<?php

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item_Equippable;

class CatBox extends Item_Equippable {

    public function name() : string {
        return 'CatBox';
    }

    public function description(): string
    {
        return 'It seems pretty empty...';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [];
    }
}