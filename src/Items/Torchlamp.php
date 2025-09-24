<?

namespace CodeNuage\Neila\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Torchlamp extends Item_Equippable {

    public function name() : string {
        return 'Torchlamp';
    }

    public function description(): string
    {
        return 'Lights you in the dark';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'ability'=> 1
        ];
    }
}