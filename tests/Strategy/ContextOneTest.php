<?php

namespace Strategy;

use App\Strategy\ContextOne;
use PHPUnit\Framework\TestCase;

class ContextOneTest extends TestCase
{
    private $data;

    public function setUp(): void
    {
        $this->data = [
            'name'     => 'Farukh',
            'age'      => 33,
            'position' => 'Junior Web Developer'
        ];
    }

    public function testJsonFormatter()
    {
        $context = new ContextOne('json');

        $formatted = $context->format($this->data);

        $this->assertJson($formatted);
        $this->assertJsonStringEqualsJsonString($formatted, json_encode($this->data));
        $this->assertStringContainsString('age', $formatted);
        $this->assertStringContainsString('position', $formatted);
    }

    public function testXmlFormatter()
    {
        $context = new ContextOne('xml');

        $formatted = $context->format($this->data);

        $xml = simplexml_load_string($formatted, 'SimpleXMLElement', LIBXML_NOCDATA);

        $this->assertEquals('Farukh', $xml->name);
        $this->assertEquals('33', $xml->age);
        $this->assertEquals('Junior Web Developer', $xml->position);
    }

    public function testStringFormatter()
    {
        $context = new ContextOne('string');

        $formatted = $context->format($this->data);

        $this->assertStringContainsString('Farukh', $formatted);
        $this->assertStringContainsString(33, $formatted);
        $this->assertStringContainsString('Junior Web Developer', $formatted);
    }

    public function testInvalidFormatter()
    {
        $this->expectException(\InvalidArgumentException::class);

        $context = new ContextOne('unsupported');
    }
}
