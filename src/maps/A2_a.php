<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A2_a extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,0);
    }

    public function name() : string {
        return '|A2-SEC1|';
    }

    public function description() : string {
    return 'The first security checkpoint stands before you, its blast doors sealed tight with heavy-duty magnetic locks. A biometric scanner flickers weakly next to the entrance, its red light pulsing like a mechanical heartbeat. Warning signs in multiple languages cover the walls, but many have been scratched out or defaced with what looks like claw marks. The air circulation system hums ominously overhead, and you can smell the faint scent of ozone from the security systems.';
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