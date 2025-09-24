<?php

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item_Equippable;

class CatInABox extends Item_Equippable {

    public function name() : string {
        return 'Jones in a Box';
    }

    public function description(): string
    {
        return 'MMEEEEEEEEEOOOOOOOOOWWWWWWWW !!!';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'wisdom'=> -5
        ];
    }
}