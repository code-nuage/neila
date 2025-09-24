<?php

namespace src\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B2_b extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,-2);
    }

    public function name() : string {
        return '|B2-SEC2|';
    }

    public function description() : string {
        return 'The second lower checkpoint features a camera quarantine chambers with thick transparent aluminum viewing ports.
        Inside the chambers, you can see the remnants of containment protocols - restraint devices and monitoring equipment now dark and lifeless.
        The walls are lined with what appear to be specimen containers, their contents obscured by frost and condensation.
        A ventilation system works overtime here, creating a constant whooshing sound that almost masks the occasional metallic tapping from somewhere within the walls.';
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