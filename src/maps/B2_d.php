<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B2_d extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(6,-2);
    }

    public function name() : string {
        return '|B2-SEC4|';
    }

    public function description() : string {
    return 'This must be it, the penultimate checkpoint feels like the mouth of some mechanical beast, with massive hydraulic jaws that could crush anything attempting unauthorized passage. The security systems here are still partially active, red laser grids sweeping in complex patterns across the corridor. Warning klaxons sound intermittently, their wailing echoing through the metal corridors like the cries of the damned. The air is thick with the smell of ozone and something else - something that reminds you of a morgue on a hot day.';
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