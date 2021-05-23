<?php

namespace App\Strategy;

class StringFormatter implements StrategyInterface 
{
    const DELIMITER = ",";

    public function format(array $data): string 
    {
        return implode(self::DELIMITER, $data);
    }
}
