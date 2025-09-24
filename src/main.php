<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Money\Money;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('Neila');

$staurie->register([
    Console::class, 
    PrettyPrinter::class, 
    Menu::class,
    Map::class
]);

// Get the container and register the Map component
$container = $staurie->getContainer();
$map = $container->registerComponent(Map::class);

// Configure the map system
$map->configuration([
    'directory' => __DIR__.'/maps',
    'namespace' => 'CodeNuage\\Neila\\maps', 
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true,
    'starting_position' => 'A0'
]);

$staurie->run(); //LANCE LE JEU