<?php
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;
//use Mon\Name\Space;


require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('Neila');

$staurie->register([Console::class, PrettyPrinter::class, Menu::class]);


$staurie->run(); //LANCE LE JEU