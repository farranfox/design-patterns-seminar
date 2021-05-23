<?php

namespace App\Strategy;

class ContextOne
{
	private $strategy;

    public function __construct(string $outputType) {
        switch ($outputType) {
            case "json":
                $this->strategy = new JsonFormatter();
                break;
            case "xml":
                $this->strategy = new XmlFormatter();
                break;
            case "string":
                $this->strategy = new StringFormatter();
                break;
            default:
                throw new \InvalidArgumentException("{$outputType} is not supported");
        }
    }

    public function format(array $data): string 
    {
        return $this->strategy->format($data);
    }
}
