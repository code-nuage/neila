<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B1 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,-2);
    }

    public function name() : string {
        return '|B1-LAB|';
    }

    public function description() : string {
        return 'The laboratory is a nightmare of broken glass and twisted metal, scientific equipment scattered like the bones of some mechanical beast.
        Shattered test tubes crunch underfoot, their contents long since evaporated into noxious stains that seem to pulse in the dim emergency lighting.
        Computer terminals flicker with corrupted data streams, displaying warnings in alien symbols that hurt to look at directly.
        Whatever experiments were conducted here have left an otherworldly presence that makes your skin crawl.
        The chemical stench that originated here has spread throughout the warehouse above, a testament to the horrors that were unleashed.';
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