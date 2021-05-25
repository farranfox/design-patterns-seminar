<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Adapter\StatsAdapter;
use App\Adapter\ThirdPartyStats;

$xml = <<<DATA
<?xml version="1.0" ?>
<stats>
    <stat>
        <date>2021-01-01</date>
        <income>2999.9</income>
        <lost>599.47</lost>
    </stat>
    <stat>
        <date>2021-02-01</date>
        <income>3399.9</income>
        <lost>769.01</lost>
    </stat>
</stats>
DATA;

$stats = (new StatsAdapter(new ThirdPartyStats()))->doStats($xml);
dump($stats);
