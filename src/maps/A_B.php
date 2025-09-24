<?php

namespace CodeNuage\Neila\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class A_B extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,-1);
    }

    public function name() : string {
        return '|A-B corridor|';
    }

    public function description() : string {
    return 'A junction corridor connecting the upper and lower decks of the ship. The walls here show signs of hasty barricading - welded metal plates and warning signs in multiple languages. Emergency bulkheads hang partially open, their hydraulic systems long since failed. You can feel a noticeable temperature difference as you move between sections, and the lighting shifts from the sickly yellow of deck A to the harsh white of deck B.';
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