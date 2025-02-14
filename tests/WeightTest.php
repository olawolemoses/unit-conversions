<?php

namespace Freemind\UnitConversions\Tests;

use Freemind\UnitConversions\Weight;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        // echo $lbs;

        $this->assertEquals(220.4623, $lbs);
    }
}
