<?php

namespace src\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A2_c extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(5,0);
    }

    public function name() : string {
        return '|A2-SEC3|';
    }

    public function description() : string {
        return 'The third checkpoint has clearly seen violence - blast marks scar the walls and the security console is partially destroyed.
        Broken glass from shattered monitoring screens crunches underfoot, and sparks occasionally shower from damaged electrical systems.
        Emergency lockdown shutters hang at awkward angles, as if something forced its way through with tremendous strength.
        The metallic taste of fear hangs in the recycled air, and you can see dark handprints pressed against the reinforced windows.';
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