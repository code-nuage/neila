<?php

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Gun extends Item_Equippable {

    public function name() : string {
        return 'Gun';
    }

    public function description(): string
    {
        return 'Poom poom';
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