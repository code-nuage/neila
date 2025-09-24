<?php

namespace src\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class B1_2 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,-2);
    }

    public function name() : string {
        return '=> B2';
    }

    public function description() : string {
        return 'A cramped maintenance corridor stretches before you, its metal walls scarred with deep scratches that look disturbingly organic.
        Emergency lighting flickers intermittently, revealing glimpses of dark stains on the floor that you prefer not to examine too closely.
        The distant thrumming of the secondary generator grows louder as you approach the B2 checkpoint, but underneath it, you swear you can hear something else... breathing.
        Condensation drips from overhead pipes, each drop echoing like a countdown in the oppressive silence.';
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