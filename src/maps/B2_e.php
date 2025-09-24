<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B2_e extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(7,-2);
    }

    public function name() : string {
        return '|B2-SEC5|';
    }

    public function description() : string {
        return 'You sigh as you see there\'s anothe, final checkpoint before the secondary generator is a testament to paranoia and desperation.
        Multiple blast doors, each thicker than the last, create a maze of reinforced passages designed to contain something unimaginably dangerous.
        The walls here pulse with a faint bioluminescent glow, as if something has infected the very structure of the ship.
        Beyond the final barrier, the generator whispers secrets in frequencies that make your bones vibrate and your vision blur at the edges.
        You feel nauseated';
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