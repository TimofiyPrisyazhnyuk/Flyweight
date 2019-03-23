<?php

namespace Flyweight\Tests;

use Flyweight\FlyweightFactory;

require __DIR__ . '/../FlyweightInterface.php';
require __DIR__ . '/../FlyweightFactory.php';
require __DIR__ . '/../CharacterFlyweight.php';

class FlyweightTest
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($char);
                echo  $flyweight->render($font) . "\n";
            }
        }
        echo $factory->count() . "\n";
    }
}

(new FlyweightTest())->testFlyweight();