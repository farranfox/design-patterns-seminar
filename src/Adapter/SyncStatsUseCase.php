<?php

namespace App\Adapter;

final class SyncStatsUseCase
{
    private $stats;

    public function __construct(StatsInterface $stats)
    {
        $this->stats = $stats;
    }

    public function execute(string $xml): array
    {
        return $this->stats->doStats($xml);
    }
}
