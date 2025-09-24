<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A2_b extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,0);
    }

    public function name() : string {
        return '|A2-SEC2|';
    }

    public function description() : string {
        return 'The second security checkpoint is more sophisticated, with multiple scanning arrays and reinforced titanium barriers.
        Decontamination nozzles hang from the ceiling like metallic stalactites, their chambers stained with unknown residues.
        The floor is marked with yellow hazard lines that have begun to fade, and you notice deep gouges in the metal plating.
        A automated voice occasionally crackles from hidden speakers, repeating security protocols in a language that sends chills down your spine.';
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