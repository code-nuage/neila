<?php

namespace src\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B2_a extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,-2);
    }

    public function name() : string {
        return '|B2-SEC1|';
    }

    public function description() : string {
        return 'The lower deck security checkpoint feels more clinical and sterile than its upper counterpart, with pristine white walls that seem to glow under harsh fluorescent lighting.
        Biometric scanners here are more advanced, their blue LEDs casting an eerie glow that makes everything look corpse-like.
        The floor is polished to a mirror shine, but you notice strange, dark patterns beneath the surface that seem to shift when you are not looking directly at them.
        A faint humming emanates from hidden machinery in the walls, creating an unsettling harmonic that makes your teeth ache.';
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