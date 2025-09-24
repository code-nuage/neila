<?php

namespace CodeNuage\Neila\Npcs;

use Jugid\Staurie\Game\Npc;

class Cat extends Npc {

    public function name() : string {
        return 'Jones';
    }

    public function description() : string {
        return 'A small orange tabby named Jones (Jonesy to his friends).';
    }

    public function speak() : string|array {
        if($this->playerHasItem('CatBox')) {
            return ['MEEEEEEOOOOWWWWWW!!!!', 'You now have a Jones in a box.'];
            $this.giveItem(new CatInABox());
        } else {
            return ["Purr...", "...Meow...", "...It seems Jones is relieved to see you."];
        }
    }
}