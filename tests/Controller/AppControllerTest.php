<?php

namespace App\Controller\Tests\Controller;

use Calculator;
use PHPUnit\Framework\TestCase;

class AppControllerTest extends TestCase
{
    public function testValue()
    {
        $result = 25 + 17;

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}
