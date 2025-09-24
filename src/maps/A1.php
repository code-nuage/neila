<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A1 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return '|A1-WH|';
    }

    public function description() : string {
    return 'The air is thick with the stench of decay and spilled chemicals. This was once a storage area for the lab, with shelves now overturned and their contents scattered across the floor. A makeshift dining area is visible to the side,tables overturned and stained with what you pray is just old rations. Something definitely passed through here, and it wasn\'t human.';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}