<?php

namespace Jugid\Staurie\Example\Monsters;

use Jugid\Staurie\Game\Monster;

class Alien extends Monster {

    public function name() : string {
        return 'Alien';
    }

    public function description(): string { 
        return 'The Xenomorph. Run for your life!';
    }

    public function level() : int {
        return 100;
    }

    public function health_points(): int { 
        return 20; // on le rend tuable ?
    }

    public function defense(): int { 
        return 2;
    }

    public function attack() : int {
        return 5; // accorder avec les pv du joueur, est ce quil peut one-shot ?
    }

    public function experience(): int { 
        return 11;
    }

    public function skills(): array { 
        return [
            // 'Charge' => 20,
        ];
    }
}