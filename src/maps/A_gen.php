<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A_gen extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(7,0);
    }

    public function name() : string {
        return '|A-GENERATOR|';
    }

    public function description() : string {
    return 'The primary generator chamber hums with barely contained power, its massive fusion core pulsing with an otherworldly blue-white light. Thick power cables snake across the ceiling like technological arteries, feeding the ship its lifeblood of energy. The air shimmers with heat distortion and electromagnetic interference that makes your skin tingle and your hair stand on end. Control panels line the walls, their displays showing readings that fluctuate wildly, as if the generator is fighting against some unseen influence. This is the heart of the ship, and you can feel its mechanical pulse thuding at an unsteady rate.';
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