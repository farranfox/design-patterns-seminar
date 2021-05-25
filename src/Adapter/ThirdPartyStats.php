<?php

namespace App\Adapter;

final class ThirdPartyStats implements ThirdPartyStatsInterface
{
    public function doStats(string $json): array
    {
        $data = json_decode($json, true);

        $timePeriod  = [];
        $totalIncome = 0;
        $totalLost   = 0;
        foreach ($data['stat'] as $item) {
            $timePeriod[] = $item['date'];
            $totalIncome += $item['income'];
            $totalLost   += $item['lost'];
        }

        return [
            'timePeriod'  => $timePeriod,
            'totalIncome' => $totalIncome,
            'totalLost'   => $totalLost,
        ];
    }
}
