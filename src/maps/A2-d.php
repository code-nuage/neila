<?php

namespace src\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A2_d extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(6,0);
    }

    public function name() : string {
        return '|A2-SEC4|';
    }

    public function description() : string {
        return 'The final checkpoint before the generator access stands like a fortress gate, its massive blast doors designed to contain something terrible.
        Multiple redundant locking mechanisms cover the entrance, many of them still sealed but showing signs of attempted breach from the inside.
        Warning lights bathe everything in an ominous red glow, and the air is thick with the smell of burned electronics and something else... something organic.
        Beyond the reinforced barriers, you can hear the steady thrum of the generator, so close yet still protected by layers of paranoid security.';
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