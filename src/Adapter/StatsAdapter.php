<?php

namespace App\Adapter;

final class StatsAdapter implements StatsInterface
{
    private $stats;

    public function __construct(ThirdPartyStats $stats)
    {
        $this->stats = $stats;
    }

    public function doStats(string $xml): array
    {
        $xml  = simplexml_load_string($xml);
        $json = json_encode($xml);

        return $this->stats->doStats($json);
    }
}
