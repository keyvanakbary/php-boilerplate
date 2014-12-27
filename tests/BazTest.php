<?php

use Foo\Baz;

class BazTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldSayHello()
    {
        $baz = new Baz;

        $this->assertEquals($baz->hello(), 'hello');
    }
}
