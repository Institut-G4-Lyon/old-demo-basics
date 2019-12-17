<?php

use PHPUnit\Framework\TestCase;

include "./index.php";

class IndexTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEquals(main(), "Bonjour tout le monde");
    }
}