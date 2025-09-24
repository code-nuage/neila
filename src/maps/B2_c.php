<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B2_c extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(5,-2);
    }

    public function name() : string {
        return '|B2-SEC3|';
    }

    public function description() : string {
        return 'This checkpoint shows clear signs of a desperate last stand - makeshift barricades constructed from lab equipment block the corridors.
        Bullet holes pepper the walls in precise patterns, and spent energy cell casings litter the floor like metallic confetti.
        The emergency lighting has shifted to a deep amber, casting everything in a hellish glow that makes the dried stains look black.
        You can hear the generator more clearly now, its rhythm irregular and unsettling, as if something is interfering with its normal operation.';
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