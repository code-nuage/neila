<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A1_2 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,0);
    }

    public function name() : string {
        return '=> A2';
    }

    public function description() : string {
    return 'This is a narrow corridor leading to the A2 security checkpoint. The flickering lights cast long, distorted shadows, and the air thickens even more. You can hear the hum of the generator beyond the checkpoint, a sound that is both reassuring and ominous.';
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