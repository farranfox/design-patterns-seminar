<?php

namespace Strategy;

use App\Strategy\ContextOne;
use PHPUnit\Framework\TestCase;

class ContextOneTest extends TestCase
{
    /** @test */
    public function testJsonFormatter()
    {
        $data = [
            'name'     => 'Farukh',
            'age'      => 33,
            'position' => 'Junior Web Developer'
        ];

        $context = new ContextOne('string');

        $formatted = $context->format($data);

        $this->assertStringContainsString('Farukh', $formatted);

        //dump($context->format($data));
    }
}
