<?php

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Flamethrower extends Item_Equippable {

    public function name() : string {
        return 'Flamethrower';
    }

    public function description(): string
    {
        return 'Fire !';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'ability'=> 4
        ];
    }
}