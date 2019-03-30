<?php

namespace Tests;

use FlyweightFactory;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class FlyweightTest
 * @package Tests
 */
class FlyweightTest
{
    /**
     * @var array
     */
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    /**
     * @var array
     */
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    /**
     * Test flyweight.
     */
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

// Run test.
(new FlyweightTest())->testFlyweight();