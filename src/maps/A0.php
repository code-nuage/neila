<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A0 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return '|R-001|';
    }

    public function description() : string {
        return 'You wake up in a cramped cell, barely large enough for the cot bolted to the floor.
        The air is stale, recycled, and tinged with the metallic tang of fear.
        Only one thing comes to your mind, you need to get out of here';
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