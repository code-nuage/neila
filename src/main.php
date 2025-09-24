<?php

use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Menu\Menu;

require_once __DIR__.'/vendor/autoload.php';

$staurie = new Staurie('Mon premier MUD');

$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class
]);

$container = $staurie->getContainer();
$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text' => 'Bienvenue dans mon aventure MUD !',
    'labels' => [
        'new_game' => 'Commencer',
        'quit' => 'Quitter'
    ]
]);

$staurie->run();
