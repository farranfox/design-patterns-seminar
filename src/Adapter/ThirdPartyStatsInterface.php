<?php

namespace App\Adapter;

interface ThirdPartyStatsInterface
{
    public function doStats(string $json): array;
}
