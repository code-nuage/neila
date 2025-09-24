<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B_gen extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(8,-2);
    }

    public function name() : string {
        return '|B-GENERATOR|';
    }

    public function description() : string {
        return 'The secondary generator chamber is darker and more ominous than its upper counterpart, its fusion core flickering with unstable crimson energy.
        Bio-luminescent growths have somehow taken root along the power conduits, pulsing in rhythm with the generator like a malevolent heartbeat.
        The air is thick with spores and the metallic taste of corrupted energy, making every breath feel like poison.
        Strange shadows move independently of their sources, and you swear you can see faces in the swirling energy patterns of the core.
        This generator has been changed by whatever infected the ship, and it no longer serves purely mechanical purposes.
        The beast didn\'t even bother to take the doors, a gaping hole of torn metal and sparks indicates that to you';
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