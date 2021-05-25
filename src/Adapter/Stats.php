<?php

namespace App\Adapter;

class Stats
{
    public function doStats(string $xml): array
    {
        $xml = simplexml_load_string($xml);

        $timePeriod  = [];
        $totalIncome = 0;
        $totalLost   = 0;
        foreach ($xml as $item) {
            $timePeriod[] = (string) $item->date;
            $totalIncome += $item->income;
            $totalLost   += $item->lost;
        }

        return [
            'timePeriod'  => $timePeriod,
            'totalIncome' => $totalIncome,
            'totalLost'   => $totalLost,
            'totalProfit' => $totalIncome - $totalLost,
        ];
    }
}
