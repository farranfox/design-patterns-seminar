<?php

namespace App\Adapter;

interface StatsInterface
{
    public function doStats(string $xml): array;
}
